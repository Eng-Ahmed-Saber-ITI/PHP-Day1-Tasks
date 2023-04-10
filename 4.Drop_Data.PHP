<?php include '0.Conn.PHP';?>

<?php
//& Drop Data Records
//* Select
    mysqli_select_db( $conn,$database_name );
    echo "Database Selected Successfully"."<br>";
// sql to delete a record
$sql = "DELETE * FROM Users_Details";

$Delete_query_result = mysqli_query( $conn, $sql );

if ( $Delete_query_result ) { echo "Record deleted successfully"} 
else { echo "Error deleting record: " . mysqli_error($conn);}

mysqli_close($conn);
?>