<?php
    include 'inc/header.php'; 
?>
<!DOCTYPE html>
<html>

        <header>
            <h1>Admin Login Page</h1>
        </header>
        
        <form method="POST" action="api/checkAdmin.php">
            
            Email: <input type="text" name="email"/> <br></br>
            
            Password: <input type="password" name="password"/>  <br></br>
            
            <input type="submit" name="login" value="Login"/>  <br></br>
        </form>
<?php
    include 'inc/footer.php'; 
?>