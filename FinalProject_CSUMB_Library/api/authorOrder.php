<?php
    //SELECT bAuthor FROM `fp_csumblibrary` 
    
    include '../dbConnectionFP.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT bAuthor FROM fp_csumblibrary";
    
    $books = array();
    $statement = $conn->prepare($sql);
    $statement->execute();
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($books);

    echo json_encode($books);
?>