<?php
    //SELECT * FROM `fp_csumblibrary` ORDER BY `fp_csumblibrary`.`bName` ASC 
    
    include '../dbConnectionFP.php';
    $conn = getDatabaseConnection();
    
    $sql = "SELECT * FROM fp_csumblibrary ORDER BY fp_csumblibrary.bName DESC ";
    
    $books = array();
    $statement = $conn->prepare($sql);
    $statement->execute();
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($books);

    echo json_encode($books);
?>