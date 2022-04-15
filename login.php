<?php 
session_start();
?>


<html>
<body>
<form action = "login.php" method = "POST">
Username: <input type="text" name="username"><br>
Password: <input type="text" name = "password"><br>

<input type='submit' name = 'submit' value = 'login'>
</form>

<?php
if(isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username != "Mike" && $password != "12345"){
		echo "Information is incorrect";	
	}
	else {
		header("Location: welcome.php");
	}
	
}

?>

<a href="login.php"> Login Page</a>
<a href = "Welcome.php"> Welcome Page</a>
<a href="logout.php">Logout Page</a>

</body>
</html>


