<?php 
session_start();
session_unset();
session_destroy();
?>

 <html>
<body>
 
 <?php
        $_SESSION["name"] = "Mike";
        $_SESSION["password"] = "12345";
        echo "Welcome." ."<br>";
           
           if (isset($_SESSION["name"]) && isset($_SESSION["password"])){
           echo "Name: ".$_SESSION["username"]."<br>";
           echo "Pass:".$_SESSION["password"]."<br>";
            }
           else
           {
           echo "not set";
 ?>

        <a href="login.php.php"> Return to login.</a>
            


<a href="home.php">
<a href="login.php"> Login Page</a>
<a href = "Welcome.php"> Welcome Page</a>
<a href="logout.php">Logout Page</a>

</body>
 </html>
