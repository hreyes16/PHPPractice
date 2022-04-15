<?php
session_start();

?>

<html>
    <body>
        <?php 
        session_destroy();
        header("Location: login.php");
        
        ?>
        <a href="login.php"> Login Page</a>
        <a href = "login.php"> Welcome Page</a>

    </body>
</html>