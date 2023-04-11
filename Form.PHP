<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <Style>
        /* form {
            display: flex;
            justify-content: center;
            display: block;
            margin-top: 0em;
        }

        h2 {
            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        } */
        /* body.center {
            display: flex;
            justify-content: center;
        } */

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .submit {
            color: white;
            background-color: #337ab7;
        }

        .submit:hover {
            background-color: #4CAF50;
            color: black;
            opacity: 1;
        }

        .Reset {
            color: white;
            background-color: #337ab7;
        }

        .Reset:hover {
            background-color: #4CAF50;
            color: black;
            opacity: 1;
        }
        .error{color: red;}
    </Style>
</head>

<body class="center">
<?php
$fullNameErrMsg = $emailErrMsg = $genderErrMsg = $receive_emailsErrMsg = '';
$fullName = $email = $gender = $receive_emails = '';
if(isset($_POST['submit'])){
        if(empty($_POST['fullName'])){
            $fullNameErrMsg = "Name is Required";
        }else{
            $fullName = $_POST['fullName'];
        }
        if(empty($_POST['email'])){
            $emailErrMsg="email is Required";
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST['gender'])){
           $genderErrMsg="Selecting gender is Required";
        }else{
            $gender = $_POST['gender'];
        }
        if(empty($_POST['receive_emails'])){
            $receive_emailsErrMsg="Selecting is Required";
        }else{
            $receive_emails = $_POST['receive_emails'];
        }   
}
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <h2>User Registration Form</h2>
        <p>Please fill this form and submit to add user record to the database.</p>
        <div>
            <label for="fullName">Name</label><br><input type="text" name="fullName" id="fullName" required>
            <span class="error">* <?php echo $fullNameErrMsg;?></span><br>
        </div>
        <div>
            <br><label for="email">E-Mail</label><br><input type="email" name="email" id="email" required>
            <span class="error">* <?php echo $emailErrMsg;?></span><br>
        </div>
        <div>
            <br><label for="Gender">Gender</label><span class="error">* <?php echo $genderErrMsg;?></span><br>
            <input type="radio" name="gender" id="male" value="Male"><label for="male">Male</label><br>
            <input type="radio" name="gender" id="female" value="Female"><label for="female">Female</label><br>
        </div>
        <div>
            <input type="checkbox" name="receive_emails" id="receive_emails">
            <label for="receive_emails">Receive E-Mails from us.</label>
            <span class="error">* <?php echo $receive_emailsErrMsg;?></span><br>
        </div>        
        <div>
            <br><button type="submit" name="submit" class="button submit" >Submit</button>
            <button type="reset" name="Reset" class="button Reset" >Cancel</button><br>
        </div>
    </form>
</body>

</html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = '';
    $database_name = 'day4';
// Create connection with MySQL 
    $conn = mysqli_connect ($servername, $username, $password, $database_name);
// Checking connection
    if(!$conn){die('Could not connect: '.mysqli_error($conn));}
    // echo 'Connected successfully<br>';
//! Select Database
    mysqli_select_db($conn,$database_name);
    // echo "Database Selected Successfully"."<br>";
// using sql to create a data entry query
$sql = "INSERT INTO Details (Username, Email, Gender, Mail_Status)
VALUES ('$fullName','$email','$gender','$receive_emails')";
//    $retval = mysqli_query( $conn,$sql );
if(mysqli_query($conn,$sql)){die('New records Could not insert to table: '.$sql."<br>".mysqli_error($conn));}
    echo "<br>Data inserted to table successfully<br>";
    mysqli_close($conn);
?>
