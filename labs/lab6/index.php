<?php
/*
Rubric
8) There is a confirmation to delete a user (10 points)
9) It uses Bootstrap (10 points)
*/


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Lab 6: Admin Login Page</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <header>
            <h1>Admin Login Page</h1>
        </header>
        
        <form method="POST" action="loginProcess.php">
            
            Username: <input type="text" name="username"/> <br></br>
            
            Password: <input type="password" name="password"/>  <br></br>
            
            <input type="submit" name="login" value="Login"/>  <br></br>
        </form>
    </body>
</html>