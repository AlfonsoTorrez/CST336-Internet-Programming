<?php
    session_start();
    
    if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
        
        header("Location: index.php");
        
    }
    
     include("../../dbConnection.php");
     $conn = getDatabaseConnection();
    
    function getDepartmentInfo(){
        global $conn;        
        $sql = "SELECT deptName, departmentId 
                FROM tc_department 
                ORDER BY deptName";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll();
        
        return $records;
        
    }
    
    function getUserInfo($userId) {
        global $conn;    
        $sql = "SELECT * 
                FROM tc_user
                WHERE userId = $userId";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch();
        //print_r($record);
        return $record;
    }
    
    if (isset($_GET['updateUserForm'])) { //admin has submitted form to update user
        $sql = "UPDATE tc_user
                SET firstName = :fName,
                    lastName = :lName
    			WHERE userId = :userId";
    			
    	$namedParameters = array();
    	$namedParameters[":fName"] = $_GET['firstName'];
    	$namedParameters[":lName"] = $_GET['lastName'];
    	$namedParameters[":userId"] = $_GET['userId'];
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        
        header("Location: admin.php");//redirect admin portal
        
    }
    
    if (isset($_GET['userId'])) {
    
        $userInfo = getUserInfo($_GET['userId']);
    
    
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Info</title>
    </head>
    <body>
        <header>
            <h1> User Information </h1>
        </header>
        
        First Name: <?=$userInfo['firstName']?> <br>
        Last Name: <?=$userInfo['lastName']?><br>
        Email: <?=$userInfo['email']?> <br>
        University Id: <?=$userInfo['universityId']?> <br>
        Phone: <?=$userInfo['phone']?> <br>
        Gender: <?=$userInfo['gender']?> <br> 
        
        <form>
              <input type="button" onclick="location.href='admin.php';" value="Go Back" />
        </form>

    </body>
</html>