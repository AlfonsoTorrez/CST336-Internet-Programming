<?php 
/*
1) All devices are initially displayed, ordered by name (15pts)
2) Devices are filtered by type  (15pts)
3) Devices are filtered by name  (15pts)
4) Devices are filtered by availability (15pts) //I need to go to "checkout" part of the database
5) Devices are sortable by name or price (ascending order) (15pts)
6) Devices listed include a link to see checked-out history (15pts)
7) There is an external CSS file (10pts) *DONE*
*/
include '../../dbConnection.php';
include 'functions.php'; 

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Device Center </title>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>Device Center</h1>
        <form id=deviceNamesInOrder>
            
        <?=setDeviceInfo()?>
        <h2><u>Device Names</u>:</h2>
        <?=getDeviceNamesInOrder()?> 
        <br></br>
        </form>
        <form id=deviceInfo>
            Filter Devices By Type: 
            <select name="deviceTypes">
                <option value="" >Select One</option>
                <option value="Camera" >Camera</option>
                <option value="DynamicMics">Dynamic Mics</option>
                <option value="Laptop">Laptop</option>
                <option value="Microphone">Microphone</option>
                <option value="Smartphone">Smartphone</option>
                <option value="Tablet">Tablet</option>
                <option value="VR Headset">VR Headset</option>
            </select>
            <br></br>
            <input type="submit" name="submit" value="Submit">
            <br></br>
            
            <?php
                if(isset($_GET['submit']) && $_GET['deviceTypes']!==""){
                    $type = $_GET['deviceTypes']; 
                    echo '<h3>Devices Filterd By: ',$type,'</h3>';
                    filterByType($type); 
                    echo '<br></br>';
                }
            ?> 
        
        
        Filter Devices By Name: 
            <input type="text" name="textBox" value="">
            <br></br>
            <input type="submit" name="submit" value="Submit">
            <br></br>
        
            <?php
                if(isset($_GET['submit'])&&$_GET['textBox']!==""){
                    $name = $_GET['textBox']; 
                    filterByName($name); 
                }
            ?> 
            
        Filter Devices By Availability: 
            <select name="deviceAvailability">
                <option value="" >Select One</option>
                <option value="y" >Available</option>
                <option value="n" >Not Available</option>
            </select>
            <br></br>
            <input type="submit" name="submit" value="Submit">
            <br></br>
            
            <?php
                if(isset($_GET['submit']) && $_GET['deviceAvailability']!==""){
                    $a = $_GET['deviceAvailability']; 
                    echo '<h3>Devices Filterd By: Availability</h3>';
                    filterByTypeA($a); 
                    echo '<br></br>';
                }
            ?> 
        
            Devices Filtered By Name or Price: 
            <select name="deviceAvailability">
                <option value="" >Select One</option>
                <option value="y" >Available</option>
                <option value="n" >Not Available</option>
            </select>
            <br></br>
            <input type="submit" name="submit" value="Submit">
            <br></br>
            
            <?php
                if(isset($_GET['submit']) && $_GET['deviceAvailability']!==""){
                    $a = $_GET['deviceAvailability']; 
                    echo '<h3>Devices Filterd By: Availability</h3>';
                    filterByTypeA($a); 
                    echo '<br></br>';
                }
            ?> 
        
        </form>
        
        <footer> 
        <hr>
        CST 336, 2017 &copy; Torres <br /> 
        <strong>Disclaimer:</strong> The information on this webpage is fictitous.<br /> 
        Its is used for academic purpose.<br />
        <img src="css/CSUMBLogoBlue.png" alt="CSUMB Logo">
    </footer>
    </body>
</html>