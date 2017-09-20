<?php 
    include 'inc/functions.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Random Sloths</title>
        <style> 
            @import url("css/styles.css"); 
        </style>
    </head>
    <body>
        <h1>Random Sloths and Facts</h1>
        <div>
            <?php
                randomPicture(); 
            ?>
        </div>
        <br> 
        <form id="randButton" method="link" action="http://alftorres-cst336.herokuapp.com/homework/hw2/randomAnimals.php"> 
            <button name="subject" type="submit" value="randButton">Press for more Sloths!</button>
        </form>
        
        <form id="randButton2"  method="link" action="http://alftorres-cst336.herokuapp.com/homework/hw2/randomFacts.php"> 
            <button name="subject" type="submit" value="randButon2">Press for a Sloth Fact!</button>
        </form>
    
        
        <footer> 
            <hr>
            CST 336, 2017 &copy; Torres <br /> 
            <strong>Disclaimer:</strong> The information on this webpage is fictitous.<br /> 
            Its is used for academic purpose.<br />
            <img src="img/CSUMBLogo.png" alt="CSUMB Logo">
        </footer>
    </body>
</html>