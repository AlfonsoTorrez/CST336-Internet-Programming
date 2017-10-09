<?php
//              ****REQUIREMENTS FOR ASSIGNMENT****
//The form includes at least six HTML Form Elements
//There are at least four different types of Form Elements. (text, checkbox, radio, select, number, submit, etc.)
//Upon submission of the form, the data is "processed" and new data is displayed. Do not just display the same data.
//Upon submission of the form, the form is displayed again, with the submitted values pre-filled.
//Check boxes and radio buttons should be accessible (use "label for") 
//There is validation for all unset or empty values with error messages. 
//There is an external CSS with at least 20 rules
//OBJECTIVE: Create a way for students to keep track of there courses with an background image, info (Course name, Your name, and grade),  abd




?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Course Tracker </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <header>
            <h1>Course Tracker</h1><br>
            Are you tired being late to class? Are you forgetting your classes?
        </header>
        <body>
            <form>
                Course Name:<br>
                <input type="text" name="coursename" id="textbox">
                <br>
                Professor:<br>
                <input type="text" name="professor" id="textbox">
                <br>
                Location:<br>
                <input type="text" name="location" id="textbox">
                <br><br>
                Time:<br>
                <input type="radio" name="time" value="8am-10am">8am-10am 
                <input type="radio" name="time" value="10am-12pm">10am-12pm
                <input type="radio" name="time" value="12pm-2pm">12pm-2pm<br>
                <input type="radio" name="time" value="2pm-4pm">2pm-4pm 
                <input type="radio" name="time" value="4pm-6pm">4pm-6pm
                <input type="radio" name="time" value="6pm-8pm">6pm-8pm<br>
                <input type="radio" name="time" value="8pm-10pm">8pm-10pm<br>
                <br><br>
                <input type="submit" value="Submit" id="button">
            </form>

        </body>
        
    <footer> 
        <hr>
        CST 336, 2017 &copy; Torres <br /> 
        <strong>Disclaimer:</strong> The information on this webpage is fictitous.<br /> 
        Its is used for academic purpose.<br />
        <img src="img/CSUMBLogoBlue.png" alt="CSUMB Logo">
    </footer>
    </body>
</html>