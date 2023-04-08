<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            margin: 8px;
            display: flex;
            justify-content: center;
        }

        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    $nameErr = $emailErr = $genderErr = $agreeErr = "";
    $name = $email = $group = $class_details = $gender = $courses = $agree= "";
    $selected_courses = array ();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<h2>Your Input:</h2>";
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    //   echo "Name:".$name;
    //   echo "<br>";
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    //   echo "E-Mail:".$email;
    //   echo "<br>";
    }
    
    if (empty($_POST["group"])) {
      $group = "";
    } else {
      $group = test_input($_POST["group"]);
    //   echo "Group #".$group;
    //   echo "<br>";
    }

    if (empty($_POST["class_details"])) {
        $class_details = "";
      } else {
        $class_details = test_input($_POST["class_details"]);
        // echo "class_details:".$class_details;
        // echo "<br>";
      }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    //   echo "Gender:".$gender;
    //   echo "<br>";
    }

    if(isset($_POST['courses'])){
        $selected_courses=$_POST['courses'];
    } 

    if (empty($_POST["agree"])) {
      $agreeErr = "You must agree to terms";
    } else {
      $agree = test_input($_POST["agree"]);
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <h2>Application name AAST_BIS class registration</h2>
        <p class="error">*Required Field.</p>
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name"placeholder="" value="">
                    <span class="error">*
                        <?php echo $nameErr;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="email">E-Mail:</label></td>
                <td><input type="text" id="email" name="email"placeholder="" value="">
                    <span class="error">*
                        <?php echo $emailErr;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="Group">Group #</label></td>
                <td><input type="text" id="Group" name="group"placeholder="" value=""></td>
            </tr>
            <tr>
                <td><label for="class_details">Class details:</label></td>

                <td>
                    <textarea id="class_details" name="class_details" cols="30" rows="5"
                    placeholder="" value=""></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <input type="radio" id="Male" name="gender" value="Male" />
                    <label for="Male">Male</label>
                    <input type="radio" id="Female" name="gender" value="Female" />
                    <label for="Female">Female <span class="error">*
                            <?php echo $genderErr;?>
                        </span></label>
                </td>
            </tr>
            <tr>
                <td> <label for="courses">Select Courses:</label> </td>
                <td>
                    <select name="courses[]" multiple>
                        <option value="html">HTML</option>
                        <option value="Javascript">JavaScript</option>
                        <option value="PHP">PHP</option>
                        <option value="MySQL">MySQL</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="Agree">Agree:</label></td>
                <td>
                    <input type="checkbox" id="Agree" name="agree">
                    <span class="error">*
                        <?php echo $agreeErr;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit" name="submit">
                </td>
            </tr>
        </table>
        <div>
            <?php
                echo "<h2>Your given values are as:</h2>";
                if (!empty($_POST["name"])) {
                    echo "Name:".$name;
                    echo "<br>";
                }
                if (!empty($_POST["email"])) {
                    echo "E-Mail:".$email;
                    echo "<br>";                
                }
                if (!empty($_POST["group"])) {
                    echo "Group #".$group;
                    echo "<br>";    
                }
                if (!empty($_POST["class_details"])) {
                    echo "Class details:".$class_details;
                    echo "<br>";
                }
                if (!empty($_POST["gender"])) {
                    echo "Gender:".$gender;
                    echo "<br>";
                }
                if (!empty($_POST["courses"])) { 
                    echo "Your Courses are : "."<br>";
                    foreach($selected_courses as $course){
                        echo $course."<br>";
                    }                  
                }
            ?>
        </div>

    </form>
    <!-- 
    <script>

    </script> -->
    <!-- <script src=""></script> -->

</body>

</html>
 