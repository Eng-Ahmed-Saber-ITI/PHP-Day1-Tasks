<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <style>
        div {
            display: flex;
            justify-content: center;
            position: relative;
        }
        h1 {
            text-align: center;
        }
        button {
            background-color: #4CAF50; /* Green */
            color: white;
            position: absolute;
            right: 150px;
            padding: 8px;
            font-size: 16px;
            margin: 2px 1px;
            text-align: right;
            display: inline-block;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        table{
            text-align: center;
            color: black;
            background-color: #e8f9f9;
        }
    </style>
</head>
<body class="center">
    <div>
        <h1 class="head">Users Details</h1>
        <a href="./Form.PHP"> <button class="button">Add New User</button> </a> 
        
    </div>

    <div>
        <table class="table" border="1">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Mail Status</th>
            </tr>
            <?php //include '0.Conn.PHP';?>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = '';
                $database_name = 'day4';
                //* Create connection with MySQL 
                $conn = mysqli_connect($servername, $username, $password, $database_name );
                //* Checking connection
                if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
                // echo "Connected Database Successfully"."<br>";
                //* Select
                    mysqli_select_db( $conn,$database_name );
                    $sql = 'SELECT ID, Username, Email, Gender, Mail_Status FROM Details';
                    $result = mysqli_query($conn, $sql);
                    if(! $result ) { die('Could not get data: ' . mysqli_error($conn))."<br>";}
                    //? Output Data of Each Row

                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>      
                    <td><?php print_r ( $row ['ID']);?></td>
                    <td><?php print_r ( $row['Username']);?></td>
                    <td><?php print_r ( $row['Email']);?></td>
                    <td><?php print_r ( $row['Gender']);?></td>
                    <td><?php print_r ( $row['Mail_Status']);?></td>
            </tr>
        <?php } // else { echo "0 results"; } 
        } mysqli_close($conn);
        ?>
        </table>
    </div>
</body>
</html>

<?php
//     $servername = "localhost";
//     $username = "root";
//     $password = '';
//     $database_name = 'Users';
// // Create connection with MySQL 
//     $conn = mysqli_connect ($servername, $username, $password, $database_name);
// // Checking connection
//     if(!$conn){die('Could not connect: '.mysqli_error($conn));}
//     // echo 'Connected successfully<br>';
// //! Select Database
//     mysqli_select_db( $conn,$database_name );
//     // echo "Database Selected Successfully"."<br>";
// $fullNameErrMsg = $emailErrMsg = $genderErrMsg = $receive_emailsErrMsg = '';
// $fullName = $email = $gender = $receive_emails = '';
// if(isset($_POST['submit'])){
//         if(empty($_POST['fullName'])){
//             $fullNameErrMsg = "Name is Required";
//         }else{
//             $fullName = $_POST['fullName'];
//         }
//         if(empty($_POST['email'])){
//             $emailErrMsg="email is Required";
//         }else{
//             $email = $_POST['email'];
//         }
//         if(empty($_POST['gender'])){
//            $genderErrMsg="Selecting gender is Required";
//         }else{
//             $gender = $_POST['gender'];
//         }
//         if(empty($_POST['terms'])){
//             $receive_emailsErrMsg="Selecting is Required";
//         }else{
//             $receive_emails = $_POST['receive_emails'];
//         }   
// }
// // using sql to create a data entry query
// $sql = "INSERT INTO Users_Details (Username, Email, Gender, Mail_Status)
// VALUES ('$fullName','$email','$gender','$receive_emails')";
//    $retval = mysqli_query( $conn,$sql );
// if ($retval ) {echo "New record created successfully";} 
//   else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
//    mysqli_close($conn);
// ?>


// <?php
#5//insert data to TABLE
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='k2';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//    if(!$conn){die('Could not connect: '.mysqli_error($conn));}
//    echo 'Connected successfully<br>';
// //select
//    mysqli_select_db( $conn,$dbname );
// //create table
//    $sql = "INSERT INTO emp(emp_name,emp_address, emp_salary, join_date) 
//    VALUES ( 'guest', 'XYZ', 2000, NOW() )";
//    $retval = mysqli_query( $conn,$sql );
//    if(!$retval){die('Could not insert to table: ' . mysqli_error($conn));}
//    echo "<br>Data inserted to table successfully\n";
//    mysqli_close($conn);
?>
<?php
#6 //select==get from to TABLE
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='k2';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//    if(!$conn){die('Could not connect: '.mysqli_error($conn));}
//    echo 'Connected successfully<br>';
//    $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
//    mysqli_select_db($conn,$dbname);
//    $result = mysqli_query($conn,$sql );
//    if(!$result){die('Could not get data: '.mysqli_error($conn));}
//    if (mysqli_num_rows($result) > 0) {
// // output data of each row
// // echo "<table>";
//     while($row = mysqli_fetch_assoc($result)) {
//          echo "EMP ID :{$row['emp_id']}  <br> ".
//          "EMP NAME : {$row['emp_name']} <br> ".
//          "EMP SALARY : {$row['emp_salary']} <br> ".
//          "--------------------------------<br>";}
// // echo "</table>";
//     } else { echo "0 results";}
// /* //Its a good practice to release cursor memory
//  mysqli_free_result($result);*/
//     echo "Fetched data successfully\n";
//     mysqli_close($conn);
?>
