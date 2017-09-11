<?php 
    include '/home/ubuntu/workspace/alftorres/inc/functions.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/>
        <style> 
            @import url("/alftorres/labs/lab2/css/styles.css"); 
        </style>
    </head>
    
    <body>
        <header>
        <p class="rules"> <u>Rules</u>:<br>
            <u>Set of 7's</u>: 1000 points <br>
            <u>Set of Bar's</u>: 500 points <br>
            <u>Set of Cherries</u>: 250 points <br>
            <u>Set of Grapes</u>: 150 points <br>
            <u>Set of Oranges</u>: 75 points <br>
            <u>Set of Lemons</u>: 25 points <br>
        </p>
        </header>
        <div id="main"> 
            <?php
                play(); 
            ?> 
            
            <form id="spinButton"> 
                <button name="subject" type="submit" value="Spin!">Spin!</button>
            </form>
        </div>
        
    </body>
</html>