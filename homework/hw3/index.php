<?php
//              ****REQUIREMENTS FOR ASSIGNMENT****
//The form includes at least six HTML Form Elements
//There are at least four different types of Form Elements. (text, checkbox, radio, select, number, submit, etc.)
//Upon submission of the form, the data is "processed" and new data is displayed. Do not just display the same data.
//Upon submission of the form, the form is displayed again, with the submitted values pre-filled.
//Check boxes and radio buttons should be accessible (use "label for") 
//There is validation for all unset or empty values with error messages. 
//There is an external CSS with at least 20 rules
//MY OBJECTIVE: Create a way for students to keep track of there courses with an background image, info (Course name, Your name, and grade),  abd

include 'myFunctions.php'; 
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Course Tracker </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body id=index>
        <header>
            <h1>Course Tracker</h1><br>
            Are you tired being late to class? Are you forgetting your classes? <br>
            Well don't worry because Course Tracker has your back!
            <br><br>
        </header>
            <form>
                <u>Course Name</u>:<br>
                  <select name="courseName">
                    <option value="CST 336" >CST 336</option>
                    <option value="MATH 170">MATH 170</option>
                    <option value="CST 300">CST 300</option>
                    <option value="CST 495">CST 495</option>
                  </select>
                <br>
                <u>Professor</u>:<br>
                <input type="text" name="professor" id="textbox2">
                <br>
                <u>Location</u>:<br>
                <input type="text" name="location" id="textbox3">
                <br><br>
                <u>Time</u>:<br>
                <input type="radio" name="time" value="8am-10am">8am-10am 
                <input type="radio" name="time" value="10am-12pm">10am-12pm
                <input type="radio" name="time" value="12pm-2pm">12pm-2pm<br>
                <input type="radio" name="time" value="2pm-4pm">2pm-4pm 
                <input type="radio" name="time" value="4pm-6pm">4pm-6pm
                <input type="radio" name="time" value="6pm-8pm">6pm-8pm<br>
                <input type="radio" name="time" value="8pm-10pm">8pm-10pm<br>
                <br><br>
                <input type="submit" name="submit" value="Submit">
                <br>
                <input type="submit" name="print" value="Print Classes">
                <br>
                <input type="submit" name="reset" value="Reset Classes">
            </form>
            
            <div>
                <?php
                    if(isset($_GET['submit'])){
                        if($_GET['courseName']!="")
                            if($_GET['professor']!="")
                                if($_GET['location']!="")
                                    if($_GET['time']!="")
                                        addClass($_GET['courseName'],$_GET['professor'],$_GET['location'],$_GET['time']);
                                    else
                                        echo 'Time textbox is empty. Try Again!';
                                else
                                    echo 'Location textbox is empty. Try Again!'; 
                            else
                                echo 'Professor textbox is empty. Try Again!'; 
                        else 
                            echo 'Course Name textbox empty. Try Again!'; 
                    }
                    if(isset($_GET['print'])){
                      echo '<a href="print.php">Print Classes Here!</a>'; 
                    }
                    
                    if(isset($_GET['reset'])){
                        resetSession(); 
                    }
                ?>
            </div>
    <footer> 
        <hr>
        CST 336, 2017 &copy; Torres <br /> 
        <strong>Disclaimer:</strong> The information on this webpage is fictitous.<br /> 
        Its is used for academic purpose.<br />
        <img src="img/CSUMBLogoBlue.png" alt="CSUMB Logo">
        <img src="img/buddy.png" alt="Buddy Logo">
    </footer>
    </body>
</html>