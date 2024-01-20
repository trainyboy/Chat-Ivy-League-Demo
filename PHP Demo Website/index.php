
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
	<h1> This is the index page</h1>
	<br>
	Hello, <?php echo $user_data['user_name'];?>
	
	<iframe src="Google from HTML link" width="640" height="3039" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
	<button id="executePython">Done</button>
	<script>
document.getElementById('executePython').addEventListener('click', function() {
    fetch('executePython.php')
        .then(response => response.text())
        .then(data => {
            // Process the response (data) from the PHP script
            console.log(data);
            alert(data); // or update the DOM with the response
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
</script>

</body>
</html>


