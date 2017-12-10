<?php
    function editBook($bookId){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();
        $sql = "SELECT * FROM fp_csumblibrary WHERE bookId = '".$bookId."' ";
        
    
        $statement = $conn->prepare($sql);
        $statement->execute();
        $book = $statement->fetch(PDO::FETCH_ASSOC);
        
        //print_r($books);
    
        echo json_encode($book);
    }
    editBook($_POST['bookId']); 
?>