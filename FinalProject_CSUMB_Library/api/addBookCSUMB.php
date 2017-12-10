<?php
    // INSERT INTO `fp_csumblibrary` (`bookId`, `bName`, `bGenre`, `bAuthor`) VALUES (NULL, 'War and Peace', 'Historical Fiction', 'Leo Tolstoy');
    function addBook($name,$genre,$author){
        include '../dbConnectionFP.php';
        $conn = getDatabaseConnection();

        $sql = "INSERT INTO `fp_csumblibrary` (`bookId`, `bName`, `bGenre`, `bAuthor`) VALUES (NULL, '$name', '$genre', '$author')";
        
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        //$u = $statement->fetch(PDO::FETCH_ASSOC);
      
    }
    addBook($_POST['name'],$_POST['genre'],$_POST['author']); 
?>