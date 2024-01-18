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
	<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRybNQSSuEspERRoJBgDA5hpcGl5qWkrrODVFeepn8UpHLVUerNeney3jXy5Hq7phDG9HZt3vVGgkEm/pubhtml?widget=true&amp;headers=false" width="100%" height="600"></iframe>

	Hello, <?php echo $user_data['user_name'];?>
</body>
</html>


