<?php
    $servername = "localhost";
    $username = "root";
    $password = '';
    $database_name = 'day4';
// Create connection with MySQL without Created Database 
    $conn = mysqli_connect($servername, $username, $password);
// Checking connection
    if(!$conn){die("Connection failed: ".mysqli_connect_error());}
    echo "Connected Database Successfully"."<br>";
//* sql to Create a MySQL Database
    $sql="CREATE DATABASE IF NOT EXISTS $database_name";
//* Check Creation of MySQL Database
    $retval=mysqli_query($conn, $sql);
    if($retval){echo"Database Created Successfully"."<br>";} 
    else{echo "Error creating database: ".mysqli_error($conn)."<br>";}
//! Select Database
    mysqli_select_db( $conn,$database_name );
    echo "Database Selected Successfully"."<br>";
//& Create a MySQL Database Table
    $sql = "CREATE TABLE IF NOT EXISTS Details (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR(30) NOT NULL,
        Email VARCHAR(50),
        Gender ENUM ('Female','Male') NOT NULL,
        Mail_Status ENUM ('Yes','No') NOT NULL)";
//& Check Creation of MySQL Database Table
    $retval = mysqli_query($conn, $sql);
    if($retval){echo"Table Created Successfully"."<br>";} 
    else{echo"Error creating table: ".mysqli_error($conn)."<br>";}
//? Insert Multiple Data Records Into MySQL Database Table     
    $sql = "INSERT INTO Details (Username, Email, Gender, Mail_Status)
    VALUES ('Ahmed','Ahmed@example.com','Male','Yes');";
    $sql .= "INSERT INTO Details (Username, Email, Gender, Mail_Status)
    VALUES ('Khaled','Khaled@example.com','Male','No');";
    $sql .= "INSERT INTO Details (Username, Email, Gender, Mail_Status)
    VALUES ('Bahaa','Bahaa@example.com','Male','Yes');";
    $sql .= "INSERT INTO Details (Username, Email, Gender, Mail_Status)
    VALUES ('Ehab','Ehab@example.com','Male','No');";
    $sql .= "INSERT INTO Details (Username, Email, Gender, Mail_Status)
    VALUES ('Mohamed','Mohamed@example.com','Male','No');";    
//? Check Multiple Insertion Data Records Into MySQL Database Table 
    // $retval = mysqli_query($conn, $sql);
    if($conn->multi_query($sql) === TRUE){echo "New records created successfully"."<br>";} 
    else{echo"Error: ".$sql."<br>".$conn->error;}  
// //^ Delete All Records (Rows)
//     $sql = "DELETE FROM Details";
// //^ Check Deleting of All Records From Database Table
//     // $retval = mysqli_query($conn, $sql);
//     if(mysqli_query($conn, $sql)){echo"Record deleted successfully"} 
//     else{echo"Error deleting record: ".mysqli_error($conn);}
//     mysqli_close($conn);
?>