<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/> 
    </head>
    <body>

        <?php
        $symbol7 = "orange"; 
        
        
        /*
        if ($randomValue == 0){
            $symbol7 = "seven"; 
        }else if( $randomValue == 1){
            $symbol7= "lemon";
        }else if($randomValue == 2) {
            $symbol7 = "grapes"; 
        }
        */ 
        
        //echo $randomValue; 
    
        function displaySymbol($randomValue){
            
            switch($randomValue){
                case 0: $symbol7 = "seven"; 
                        break; 
                case 1: $symbol7 = "grapes"; 
                        break; 
                case 2: $symbol7 = "orange"; 
                        break;
                case 3: $symbol7 = "bar"; 
                        break;
                case 4: $symbol7 = "cherry"; 
                        break; 
                case 5: $symbol7 = "lemon"; 
                        break; 
                        
            }
                    echo "<img src='img/$symbol7.png' alt='$symbol7 Image' title='$symbol7' width='70'/>";  
        }
        
        
        $randomValue1 = rand(0,5); 
        displaySymbol($randomValue1);
        $randomValue2 = rand(0,5); 
        displaySymbol($randomValue2);
        $randomValue3 = rand(0,5); 
        displaySymbol($randomValue3);
        
        echo $randomValue1 . " " . $randomValue2 . " " . $randomValue3; 
        ?>

    </body>
</html>