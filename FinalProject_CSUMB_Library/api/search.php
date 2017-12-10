<?php
    function addBook($name){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();

        $sql = "SELECT * FROM fp_csumblibrary WHERE bName = '".$name."'";
        
        $books = array();
        $statement = $conn->prepare($sql);
        $statement->execute();
        $books = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      echo json_encode($books); 
    }
    addBook($_GET['name']); 
?>