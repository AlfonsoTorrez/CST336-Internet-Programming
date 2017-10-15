<?php 
$host = 'localhost'; //cloud 9
$dbname = 'tcp';
$username  = 'root';
$password = '';
//create database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
function getUsersAndDepartment(){
    global $dbConn;
    
    $sql = "SELECT firstName, lastName, deptName FROM `tc_user`
           INNER JOIN tc_department
           ON tc_user.deptId = tc_department.departmentId";
           
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    foreach ($records as $records){
        echo $records['firstName'] . ' ' . $records['lastName'] . ' -- ' . $records['deptName'] . "<br/>"; 
    }
}
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> SQL Joins </title>
    </head>
    <body>
        <h2> Users and their corresponding department</h2>
        
        <?=getUsersAndDepartment()?>
        
    </body>
</html>