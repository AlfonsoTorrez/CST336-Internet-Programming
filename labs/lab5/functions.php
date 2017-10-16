<?php

$conn = getDatabaseConnection();
//Device Info
$deviceNameInOrder = array(); 
$deviceId = array();
$deviceName = array(); 
$deviceType = array();
$devicePrice = array();
$deviceStatus = array(); 

//Checkout Info 
$cId = array();
$cDate = array();
$cDueDate = array();
$cReturnDate = array();


function setDeviceInfo() {
    global $conn;
    global $deviceId;
    global $deviceName;
    global $deviceType;
    global $devicePrice;
    global $deviceStatus; 
    
    global $cId;
    global $cDate;
    global $cDueDate;
    global $cReturnDate;
    
    $sql = "SELECT DISTINCT(deviceName), deviceId, 
            deviceType, price, status FROM `tc_device` 
            ORDER BY deviceName";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        $deviceName[] = $record['deviceName'];
        $deviceType[] = $record['deviceType'];
        $deviceId[] = $record['deviceId'];
        $devicePrice[] = $record['price'];
        $deviceStatus[] = $record['status'];
    }
    
    
    $sql = "SELECT deviceId, checkoutDate, dueDate, returnDate FROM `tc_checkout`";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        $cId[] = $record['deviceId'];
        $cDate[] = $record['checkoutDate'];
        $cDueDate[] = $record['dueDate'];
        $cReturnDate[] = $record['returnDate'];
    }
}

function getDeviceNamesInOrder(){
    global $deviceName; 
    
    for($i=0;$i<sizeOf($deviceName); $i++){
        echo "$deviceName[$i]"; 
        echo "<br>"; 
    }
}

function getDeviceById($Id){
    global $deviceId;
    global $deviceName;
    global $deviceType;
    global $devicePrice;
    global $deviceStatus; 
    
    for($i=0; $i<sizeof($deviceType); $i++){
        if($deviceId[$i]==$Id){
            echo "ID:$deviceId[$i] ----- NAME:$deviceName[$i] ----- TYPE:$deviceType[$i] ----- PRICE:$devicePrice[$i] ----- STATUS:$deviceStatus[$i]";
            echo "<br>";
        }
    }
}

function filterByTypeA($a){
    global $deviceId;
    global $deviceType; 
    global $cReturnDate; 
    global $cId;
    
    if($a=="y"){
        for($i=0; $i<sizeof($deviceType); $i++){
            if(!is_null($cReturnDate[$i])){
                getDeviceById($cId[$i]); 
            }
        }
    }
    else if($a=="n"){
        for($i=0; $i<sizeof($deviceType); $i++){
            if(is_null($cReturnDate[$i])){
                getDeviceById($cId[$i]); 
            }
        }
    }
}

function filterByType($type){
    global $deviceId;
    global $deviceName;
    global $deviceType;
    global $devicePrice;
    global $deviceStatus; 
    
    for($i=0; $i<sizeof($deviceType); $i++){
        if($deviceType[$i]==$type){
            echo "ID:$deviceId[$i] ----- NAME:$deviceName[$i] ----- TYPE:$deviceType[$i] ----- PRICE:$devicePrice[$i] ----- STATUS:$deviceStatus[$i]";
            echo "<br>";
        }
        
    }
}

function filterByName($name){
    global $deviceId;
    global $deviceName;
    global $deviceType;
    global $devicePrice;
    global $deviceStatus; 
    echo '<h3>Devices Filterd This Name: ',$Name,'</h3>';
    for($i=0;$i<sizeOf($deviceName);$i++){
        if($deviceName[$i]==$name){
            echo "ID:$deviceId[$i] ----- NAME:$deviceName[$i] ----- TYPE:$deviceType[$i] ----- PRICE:$devicePrice[$i] ----- STATUS:$deviceStatus[$i]";
            echo "<br>";
        }
    }
    if (!in_array("$name", $deviceName)) {
        echo "Name not found in database.";
    }
}

?> 