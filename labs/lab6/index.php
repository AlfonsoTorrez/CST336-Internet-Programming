<?php


?>
<!DOCTYPE html>
<html>
    <head>
         <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
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