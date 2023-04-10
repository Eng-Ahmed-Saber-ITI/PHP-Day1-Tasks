<?php include '0.Conn.PHP';?>

<?php
//* Select
    mysqli_select_db( $conn,$database_name );
    echo "Database Selected Successfully"."<br>";

//& sql to Create a MySQL Database Table

    $sql = "CREATE TABLE IF NOT EXISTS Users_Details (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR(30) NOT NULL,
        Email VARCHAR(50),
        Gender varchar (10) check (gender in ('Female','Male')),
        Mail_Status varchar (5) check (Mail_Status in ('Yes','No')),
        User_Action varchar (3) check (User_Action in ('View','Edit','Delete')) )";

//*Check Creation of MySQL Database Table
    $Table_query_result = mysqli_query( $conn, $sql );

    if ($Table_query_result) {
        echo "Table <span style='color:red'>Users_Details</span> Created Successfully"."<br>";
    } 
    else {echo "Error creating table: " . mysqli_error($conn)."<br>";}

    mysqli_close($conn);
?>