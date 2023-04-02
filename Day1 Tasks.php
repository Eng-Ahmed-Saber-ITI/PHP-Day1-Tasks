<?php
// //! *************************( Task 1)************************* -->
// -	Show your phpinfo on browser.
    //* phpinfo();
    echo "<br>";
    echo "<br>";
// //! *************************( Task 1)************************* -->
// -   Use constant to display your website name which mustn’t change across your pages.
echo "Use constant to display your website name which mustn’t change across your pages.";
    echo "<br>";
    echo "<br>";
define("My_Website_Name", "Service4X");
  echo My_Website_Name."<br>";
    echo "<br>";
  echo constant("My_Website_Name")."<br>"; // same thing as the previous line
    echo "<br>";
  print My_Website_Name."<br>";
    echo "<br>";
  print constant("My_Website_Name")."<br>"; // same thing as the previous line
    echo "<br>";
    echo "<br>";
// //! *************************( Task 1)************************* -->
// -   Show your server name, address and port.
//     also the filename and path of the currently executing script.
echo "Show your server name, address and port.also the filename 
        and path of the currently executing script.";
    echo "<br>";
    echo "<br>";
//Super global variables 
//^ Serverc Name
echo "Returns the name of the host server";
  echo "<br>";
echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo "<br>";
//^ Server Address
  echo "<br>";
echo "Returns the IP address of the host server";
echo $_SERVER['SERVER_ADDR'];
  echo "<br>";
  echo "<br>";
//^ Server Port
  echo "<br>";
echo "Returns the port being used on the user's machine to communicate with the web server";
echo $_SERVER['REMOTE_PORT'];
  echo "<br>";
  echo "<br>";
//^ Filename 
  echo "<br>";
echo "Returns the filename of the currently executing script";
echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo "<br>";
//^ Filename Path
  echo "<br>";
echo "Returns the absolute pathname of the currently executing script";
echo $_SERVER['SCRIPT_FILENAME'];
  echo "<br>";
  echo "<br>";
// //! *************************( Task 1)************************* -->
// -   Your brother is 10 years old, If you know that :
//     age less than 5 --> Print Msg --> Stay at home,
//     age equal 5 --> Print Msg --> Go to Kindergarden,
//     age between 6 & 12 --> Print Msg --> Go to grade :XXX
//     (Use switch case).
  echo "<br>";
echo "Your brother is 10 years old, If you know that :";
  echo "<br>";
echo "age less than 5 --> Print Msg --> Stay at home,";
  echo "<br>";
echo "age equal 5 --> Print Msg --> Go to Kindergarden,";
  echo "<br>";
echo "age between 6 & 12 --> Print Msg --> Go to grade :XXX";
  echo "<br>";
echo "(Use switch case).";
  echo "<br>";
  echo "<br>";
$age = 10;
$grade = $age-6;
    switch ($age) {
    case ($age < "5"):
      echo "Stay at home";
      break;
    case ($age === "5"):
      echo "Go to Kindergarden";
      break;
    case ( "6" < $age and $age < "12"):
      echo "Go to grade :$grade";
      break;
  }
    ?>
