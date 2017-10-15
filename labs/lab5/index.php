<?php 
/*
1) All devices are initially displayed, ordered by name (15pts)
2) Devices are filtered by type  (15pts)
3) Devices are filtered by name  (15pts)
4) Devices are filtered by availability (15pts)
5) Devices are sortable by name or price (ascending order) (15pts)
6) Devices listed include a link to see checked-out history (15pts)
7) There is an external CSS file (10pts)
*/
include '../../dbConnection.php';
    
$conn = getDatabaseConnection(); 
    
function getDeviceTypes() {
    global $conn;
    $sql = "SELECT DISTINCT(deviceType)
            FROM `tc_device` 
            ORDER BY deviceType";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        echo "<option> "  . $record['deviceType'] . "</option>";
    }
}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Device Center </title>
    </head>
    <body>
        <form>
            <?=getDeviceTypes()?>
        </form>
    </body>
</html>