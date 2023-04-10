<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $database_name = 'Users';
//* Create connection with MySQL without Created Database 

    $conn = mysqli_connect($servername, $username, $password);

//* Checking connection

    if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
        echo "Connected Database Successfully"."<br>";

//& sql to Create a MySQL Database

    $sql = "CREATE DATABASE IF NOT EXISTS $database_name";

//*Check Creation of MySQL Database

    $DB_Q_result = mysqli_query( $conn, $sql );

    if ( $retval ) { 
        echo "Database <span style='color:red'>$database_name</span> Created Successfully"."<br>";
    } 
    else { echo "Error creating database: " . mysqli_error($conn)."<br>";}

    mysqli_close($conn);
?>