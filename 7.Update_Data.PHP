<?php
//& Update Data Records
$servername = "localhost";
$username = "root";
$password = '';
$database_name = 'Users';

//* Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);
//* Checking connection
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
    echo "Connected Database Successfully"."<br>";
//* Select
    mysqli_select_db( $conn,$database_name );
        echo "Database Selected Successfully"."<br>";
//* sql to Update a record
$sql = "UPDATE Users_Details SET userName='Adam' WHERE id=1";

$Update_query_result = mysqli_query( $conn, $sql );
if ($Update_query_result) { echo "Record updated successfully";} 
else { echo "Error updating record: " . mysqli_error($conn);}

mysqli_close($conn);
?>