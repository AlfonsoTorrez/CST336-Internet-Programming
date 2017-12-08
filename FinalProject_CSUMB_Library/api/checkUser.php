<?php
    function checkUser($userEmail,$userPassword){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();
        //return userId
        $sql = "SELECT userId FROM `fp_user` WHERE email = '".$userEmail."' AND password = '".$userPassword."'";
        
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        $userId = $statement->fetch(PDO::FETCH_ASSOC);
        
        //print_r($books);
    
        echo json_encode($userId);
    }
    checkUser($_POST['userEmail'],$_POST['userPassword']); 
?>