/* 
This is the admin page of the website
Page will load when the role of the account is a "admin" user
----------------------------------------------------------------------------------------
Once loaded, the page will load a google sheet with responses from the google form
There will also be a logout button to logout of the account
*/

<?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); 
	include("connection.php");
	include("function.php");

	$user_data = check_login($con); //used to check if user is login or not 
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1> This is the admin page</h1>
	<br>
	<iframe src="published sheet link HTML URL;headers=false" width="100%" height="600"></iframe>

	Hello, <?php echo $user_data['user_name'];?>
</body>
</html>


