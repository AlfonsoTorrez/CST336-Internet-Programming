<?php
    include 'myFunctions.php'
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Printing Classes</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body id=print>
        <header>
            <h1> My Course Schedule</h1>
        </header>
        <?php
            printClasses(); 
        ?>
        
        <script>
            function printPage() {
                window.print();
            }
        </script>
        
        <button onclick="printPage()">Print this page</button>
        <button onclick="window.location.href='index.php'">Back to Main Page</button>
    </body>
</html>