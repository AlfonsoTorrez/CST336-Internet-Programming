<?php
        /*Use this later to see how many times I searched a certain zipcode
    SELECT COUNT(zipCode) FROM `db_zipcode` WHERE zipCode = 95206 */
    include '../../dbConhw5.php';
    $conn = getDatabaseConnection();
    function displayZips() {
        global $conn; 
        $sql = "SELECT zipCode,timestamp 
                FROM db_zipcode";
    
        $zips = array();
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        $zips = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($zips);
        echo json_encode($zips);
    }
    // SELECT zipCode,timestamp FROM `db_zipcode` 
    function addZip($zip){
        global $conn; 
        $sql = "INSERT INTO db_zipcode (zipId, zipCode, timestamp) VALUES (NULL, '".$zip."', CURRENT_TIMESTAMP)";
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        //$zips = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r("Bruh");
        displayZips(); 
    }
    
    addZip($_GET['zip']); 
    
?>