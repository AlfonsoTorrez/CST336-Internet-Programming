<?php
    
    function displaySymbol($symbol){
        echo "<img src='../labs/lab2/img/$symbol.png' alt='$symbol' width='70' />"; 
    }
    
    //Creating an array
    $symbols = array("lemon","orange","cherry"); 

    //print_r($symbols); //displays array contents, only for the debugging purposes
    
    //echo $symbols[0]; 
    //displaySymbol($symbols[2]); 
    
    $symbols[] = "grapes"; //adds element at the end of the array
    
   //$symbols[2] = "seven"; //Replaces value
   
   //array_push($symbols,"seven"); //adds an element at the end of the array
   
   //displaySymbol($symbols[4]); 
   
   for ($i=0; $i<count($symbols); $i++){// count() will obtain the length of your array
       displaySymbol($symbols[$i]); 
   }
   
   sort($symbols); // sorts elements in ascending order
   print_r($symbols); 
   
   shuffle($symbols);
   echo "<hr>";
   print_r($symbols);
   echo "<hr>"; 
    
   $lastSymbol = array_pop($symbols); // Gets last element and removes it
   displaySymbol($lastSymbol); 
   echo "<hr>";
   print_r($symbols); 
   
   foreach($symbols as $symbol){//another way of going through the array
       displaySymbol($symbol);
   }
   
   unset($symbols[2]); //Deletes element in the array
   
   echo "<hr>"; 
   //Displaying random symbol
   displaySymbol($symbols[rand(0,count($symbols)-1)]); 
   
   displaySymbol($symbols[ array_rand($symbols) ]); 
   
?> 

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        

    </body>
</html>