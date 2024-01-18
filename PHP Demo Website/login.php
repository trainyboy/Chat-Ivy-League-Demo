/*
Displays page to log in to the website
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Once the users enter and submit credentials that match the ones stored in the database, they will be redirected to either the admin_index page or the index page depending on their role 
*/ 


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from the database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            // Verify the password
            if($user_data['password'] === $password)
			{
                echo "Reached password verification!<br>";

                $_SESSION['user_id'] = $user_data['user_id'];
                echo "User ID set in session!<br>";

                // Check the role
                if ($user_data['role'] === 'admin') {
                    // Redirect to admin page
                    header("Location: admin_index.php");
                } else {
                    // Redirect to user page
                    header("Location: index.php");
                }
                die;
            } else {
                echo "Password verification failed!<br>";
            }
        } else {
            echo "Error fetching user data: " . mysqli_error($con) . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
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

<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin: 10px; color: white">Login</div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>
        <input id="button" type="submit" value="Login"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
    </form>
</div>
</body>
</html>
