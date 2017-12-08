<?php
    function addBook($userId,$bookId){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();
        $sql = "INSERT INTO fp_userlibrary (userId, bookId) VALUES ('".$userId."', '".$bookId."')";
        
        //$books = array();
        $statement = $conn->prepare($sql);
        $statement->execute();
        //$books = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($books);
    
        //echo json_encode($books);
    }
    addBook($_POST['userId'],$_POST['bookId']); 
?>