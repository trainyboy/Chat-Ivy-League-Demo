/*
This code creates a signup page
---------------------------------------------------------------------------------------------------------------------------------------
Users enter a unique username and password to create an account, which then can be used to sign in to their account 
The information entered is saved into mysql database

* All users signing up this way will automatically get the user role, the admin role has to be manually changed in the database
---------------------------------------------------------------------------------------------------------------------------------------
after signing up successfully, user can click the "login" button to be directed to the login page
/*

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $user_id = random_num(8);

    $check_query = "SELECT user_id FROM users WHERE user_name = '$user_name' LIMIT 1";
    $check_result = mysqli_query($con, $check_query);

    if ($check_result && mysqli_num_rows($check_result) > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        $insert_query = "INSERT INTO users (user_id, user_name, password, role) VALUES ('$user_id', '$user_name', '$password', 'users')";
        $insert_result = mysqli_query($con, $insert_query);

        if ($insert_result) {
            echo "Registration successful!";
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style type="text/css">
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>

            <input id="text" type="text" name="user_name" placeholder="Username" required><br>
            <input id="text" type="password" name="password" placeholder="Password" required><br>

            <input id="button" type="submit" value="Signup"><br>

            <a href="login.php" style="color:white;">Click to Login</a><br>
        </form>
    </div>

</body>
</html>
