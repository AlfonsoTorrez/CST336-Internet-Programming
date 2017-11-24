<?php
    function getNum($startYear, $endYear){
        $count = 0; 
        $zodiacs = ["rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig"]; 
        
        for($i=$startYear; $i<=$endYear; $i++){
            if($i==1900){
              $count2 = 0; 
                  for($i=1900; $i<=$endYear; $i++){
                      echo " Year: $i"; 
                      echo "<img src='/alftorres/practice/zodiac/$zodiacs[$count2].png'>"; 
                      echo "<hr/>"; 
                      if($count2==11 )
                        $count2=0; 
                    else
                        $count2++; 
                  }

            }
            else if($i%100==0 )
                echo " Year: $i Happy New Century!"; 
            else if($i==1776)
                echo " Year: $i USA INDEPENDENCE!";
            else
                echo " Year: $i"; 
                
            echo "<br>";
            $count = $count + $i; 
        }
        
        return $count;
            
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Zodiac Practice </title>
    </head>
    <body>
        <h1>Chinese Zodiac List</h1>
        
        <?php
            echo "Sum Total: ".getNum(1500,2000); 
        ?> 

    </body>
</html>