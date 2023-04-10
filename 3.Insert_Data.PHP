<?php include '0.Conn.PHP';?>

<?php
//* Select

    mysqli_select_db( $conn,$database_name );
    echo "Database Selected Successfully"."<br>";
    
//& Insert Data Records
//*Insert Multiple Data Records Into MySQL Database Table 

    $sql = "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
    VALUES ('Ahmed','Ahmed@example.com','Male','Yes');";
    $sql .= "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
    VALUES ('Khaled','Khaled@example.com','Male','No');";
    $sql .= "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
    VALUES ('Bahaa','Bahaa@example.com','Male','Yes');";
    $sql .= "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
    VALUES ('Ehab','Ehab@example.com','Male','No');";
    $sql .= "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
    VALUES ('Mohamed','Mohamed@example.com','Male','No');";    

//*Check Multiple Insertion Data Records Into MySQL Database Table 
    $Insert_query_result = mysqli_query( $conn, $sql );

    if ($conn->multi_query($sql) === TRUE) { 
        echo "New records created successfully"."<br>";
     } 
        else { echo "Error: " . $sql . "<br>" . $conn->error; }

    mysqli_close($conn);
?>