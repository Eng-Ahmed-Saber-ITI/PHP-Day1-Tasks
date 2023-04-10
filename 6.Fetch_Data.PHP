<?php //include '0.Conn.PHP';?>

<?php
$servername = "localhost";
$username = "root";
$password = '';
$database_name = 'Users';
//* Create connection with MySQL 
$conn = mysqli_connect($servername, $username, $password, $database_name );
//* Checking connection
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
}
// echo "Connected Database Successfully"."<br>";
//* Select
mysqli_select_db( $conn,$database_name );
// echo "Database Selected Successfully"."<br>";

if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $receive_emails = $_POST['receive_emails'];

// using sql to create a data entry query

    // $sql = "INSERT INTO  'Users_Details' (Username, Email, Gender, Mail_Status) 
    // VALUES ('$userName','$email','$gender','$receive_emails')";

$sql = "INSERT INTO  'Users_Details' (Username, Email, Gender, Mail_Status) VALUES ('".$userName."','".$email."','".$gender."','".$receive_emails."')";

// send query to the database to add values and confirm if successful
    $Fetch_query_result = mysqli_query($conn, $sql);
    if( mysqli_query($conn, $sql) ) { echo "Entries added!". mysqli_connect_error()."<br>";}
    } 
    mysqli_close($conn);
?>
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
        <button class="button">Add New User</button>
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
                    mysqli_select_db( $conn,$database_name );
                    $sql = 'SELECT ID, Username, Email, Gender, Mail_Status FROM Users_Details';
                    $result = mysqli_query($conn, $sql);
                    if(! $result ) { die('Could not get data: ' . mysqli_error($conn))."<br>";}
                    //? Output Data of Each Row
                    if (mysqli_num_rows($result) > 0) {
                    // echo "<table>";
                    while($row = mysqli_fetch_assoc($result)) {
                ?>      
                    <td><?php print_r ( $row ['id']);?></td>
                    <td><?php print_r ( $row['username']);?></td>
                    <td><?php print_r ( $row['email']);?></td>
                    <td><?php print_r ( $row['gender']);?></td>
                    <td><?php print_r ( $row['Mail_Status']);?></td>
            </tr>
        <?php } 
        // else { echo "0 results"; } 
        } mysqli_close($conn);
        ?>
        </table>
    </div>
</body>
</html>