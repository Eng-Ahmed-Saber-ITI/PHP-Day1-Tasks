<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./myStyle.css">

    <title>Add User</title>
    <style>
        body.center {
            display: flex;
            justify-content: center;
        }

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

        .cancel {
            color: white;
            background-color: #337ab7;
        }

        .cancel:hover {
            background-color: #4CAF50;
            color: black;
            opacity: 1;
        }
    </style>
</head>

<body class="center">

    <form action="6.Fetch_Data.PHP" method="POST" >
        <table>
            <h3>User Registration Form</h3>
            <p>Please fill this form and submit to add user record to the database.</p>
            <tr>
                <label for="userName">Name</label><br>
                <input type="text" name="userName" id="userName" placeholder="Enter Your Full Name" value="Ahmed Saber"
                    minlength="3" maxlength="30" required><br>
            </tr>
            <tr>
                <br><label for="email">E-Mail</label><br>
                <input type="email" name="email" id="email" placeholder="Enter Your E-Mail" value="Ahmed@example.com"
                    minlength="5" maxlength="50" required><br>
            </tr>
            <tr>
                <br><label for="Gender">Gender</label><br>

                <input type="radio" id="male" name="gender" value="Male" >
                <label for="male">Male</label><br>

                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label><br>
            </tr>
            <tr>
                <input type="checkbox" name="receive_emails" id="emails" value="Yes" >

                <label for="emails">Receive E-Mails from us.</label><br>
            </tr>
            <tr>
                <br><button type="submit" name="submit" class="button submit" value="Submit">Submit</button>

                <button type="reset" name="cancel" class="button cancel" value="Reset">Cancel</button><br>
            </tr>
        </table>
    </form>
</body>

</html>