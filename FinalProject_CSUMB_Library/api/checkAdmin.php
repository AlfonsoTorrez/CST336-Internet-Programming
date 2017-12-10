<?php
    function checkUser($userEmail,$userPassword){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();
        //return userId
        $sql = "SELECT userId FROM `fp_user` WHERE email = '".$userEmail."' AND password = '".$userPassword."'";
        
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        $userId = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($userId['userId'] == "1"){
            header("Location: ../adminCSUMB.php"); 
        }else{
            //echo $userId['userId'];
            echo ("Incorrect email or password.");
            echo "<br>";
            echo "<a class='nav-item nav-link' href='../adminSignIn.php'>Go Back To Admin Page</a>";
        }
    }
    checkUser($_POST['email'],SHA1($_POST['password'])); 
?>