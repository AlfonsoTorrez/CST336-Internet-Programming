<?php
    session_start();

    if (!isset($_SESSION['username'])) { //checks whether admin has logged in
        
        header("Location: index.php");
        exit();
        
    }

    include '../../dbConnection.php';
    $conn = getDatabaseConnection();


function displayUsers() {
        global $conn;
        $sql = "SELECT * 
                FROM tc_user
                ORDER BY lastName";
                
        $statement = $conn->prepare($sql);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($users);
        return $users;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

        <title>Admin Page</title>
    </head>
    <body>
        <header>
            <h1> TCP ADMIN PAGE </h1>
            <h2> Welcome <?=$_SESSION['adminFullName']?>! </h2>
        </header>
        
        <hr>
        
        
        <form action="addUser.php">
            
            <input type="submit" value="Add new User" />
            
        </form>
        
          <form action="logout.php">
            
            <input type="submit" value="Logout" />
            
        </form>
        
        <br /><br />
        
        <?php
        
        $users = displayUsers();
        
            foreach($users as $user) {
                        
                        //echo $user['userId'] . '  ' . $user['firstName'] . "  " . $user['lastName'];
                        echo $user['userId'] . '  ' . "<a href='userInfo.php?userId=".$user['userId']."'> ".$user['firstName']." ".$user['lastName']." </a> ";
                        echo "[<a href='updateUser.php?userId=".$user['userId']."'> Update </a> ]";
                        //echo "[<a href='deleteUser.php?userId=".$user['userId']."'> Delete </a> ]";
                        echo "<form action='deleteUser.php' style='display:inline' onsubmit='return confirmDelete(\"".$user['firstName']."\")'>
                                 <input type='hidden' name='userId' value='".$user['userId']."' />
                                 <input type='submit' value='Delete'>
                              </form>
                            ";
                        
                        echo "<br />";
                        
                    }

        ?>
        
        
    </body>
</html>