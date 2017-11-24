<?php
    function getRandomColor(){
        return "rgba(" .rand(0,255).",".rand(0,255). "," .rand(0,255)."," .(rand(0,100)/100). ");"; 
    }
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8"/>
        <title>Random Background Color</title>
        
        <style>
            body{
               /* background-color: rgba(15,20,250,.5); Red, green, blue, aplha */ 
                <?php
                
                    $red = rand(0,255);
                    $green = rand(0,255);
                    $blue = rand(0,255);
                    $a = rand(0,100)/100;
                    
                    echo "background-color: rgba(" .rand(0,255).",".rand(0,255). "," .rand(0,255)."," .(rand(0,100)/100). ");"
                ?> 
            }
            
             h1{
            
                <?php
                      echo "color:" .getRandomColor(); 
                    echo "background-color:" .getRandomColor(); 
                ?> 
            
            }
            
             h2{
                 background-color: <?=getRandomColor()?>
                 color: <?=getRandomColor()?>
             }
            
        } 
        
        </style>
    </head>
    
    <body>
        <h1>Welcome!</h1>
        
        <h2>Hola!</h2>

    </body>
</html>