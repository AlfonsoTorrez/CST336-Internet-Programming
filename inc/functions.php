<?php

    function displaySymbol($randomValue1,$randomValue2,$randomValue3){
            
            switch($randomValue1){
                case 0: $symbol1 = "seven"; 
                        break; 
                case 1: $symbol1 = "bar"; 
                        break; 
                case 2: $symbol1 = "cherry"; 
                        break;
                case 3: $symbol1 = "grapes"; 
                        break;
                case 4: $symbol1 = "orange"; 
                        break; 
                case 5: $symbol1 = "lemon"; 
                        break; 
                        
            }
            switch($randomValue2){
                case 0: $symbol2 = "seven"; 
                        break; 
                case 1: $symbol2 = "bar"; 
                        break; 
                case 2: $symbol2 = "cherry"; 
                        break;
                case 3: $symbol2 = "grapes"; 
                        break;
                case 4: $symbol2 = "orange"; 
                        break; 
                case 5: $symbol2 = "lemon"; 
                        break; 
                        
            }
            switch($randomValue3){
                case 0: $symbol3 = "seven"; 
                        break; 
                case 1: $symbol3 = "bar"; 
                        break; 
                case 2: $symbol3 = "cherry"; 
                        break;
                case 3: $symbol3 = "grapes"; 
                        break;
                case 4: $symbol3 = "orange"; 
                        break; 
                case 5: $symbol3 = "lemon"; 
                        break; 
                        
            }
                echo "<img id='reel1' src='http://alftorres-cst336.herokuapp.com/labs/lab2/img/$symbol1.png' alt='$symbol1 Image' title='$symbol1' width='70'/>";  
                echo "<img id='reel2' src='http://alftorres-cst336.herokuapp.com/labs/lab2/img/$symbol2.png' alt='$symbol2 Image' title='$symbol2' width='70'/>"; 
                echo "<img id='reel3' src='http://alftorres-cst336.herokuapp.com/labs/lab2/img/$symbol3.png' alt='$symbol3 Image' title='$symbol3' width='70'/>"; 
        }
        
        function displayPoints($randomValue1,$randomValue2,$randomValue3){
            
            echo "<div id='output'>"; 
            
            if($randomValue1==$randomValue2&&$randomValue1==$randomValue3){
                switch($randomValue1){
                    case 0: $totalPoints = 1000; 
                            echo "<h1>Jackpot!</h1>";
                            break; 
                    case 1: $totalPoints = 500; 
                            break; 
                    case 2: $totalPoints = 250; 
                            break;
                    case 3: $totalPoints = 150; 
                            break;
                    case 4: $totalPoints = 75; 
                            break; 
                    case 5: $totalPoints = 25; 
                            break; 
                }
                echo "<h2>You won $totalPoints points!</h2>"; 
            }
            else{
                  echo "<h3>Try again :(</h3>";
            }
            echo "</div>"; 
        }
        
        function play(){
            $randomValue1 = rand(0,5); 
            $randomValue2 = rand(0,5); 
            $randomValue3 = rand(0,5);
            
            displaySymbol($randomValue1,$randomValue2,$randomValue3);
            
            displayPoints($randomValue1,$randomValue2,$randomValue3); 
            
            //echo $randomValue1 . " " . $randomValue2 . " " . $randomValue3;
        }
        
?>