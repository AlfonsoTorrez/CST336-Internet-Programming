<?php
    $size = 11; 
    $size2 = 11; 
    $e = 11; 
    
    function randomPicture(){
        $random = rand(0,11); 
        if($size==$e){
            for ($i = 0; $i < 11; $i++){
                $slothArr[$i] = "<img id='sloth' src=img/sloth$i.jpg alt='Sloth Picture' >"; 
            } 
            echo $slothArr[$random];
            array_splice($slothArr,$random,1); 
            --$size;
        }
        else if($size<11 && $size>0){
            echo $slothArr[$random];
            array_splice($slothArr, $random, 1); 
            --$size;
        }
        else{
            echo $slothArr[$random];
            $size=11; 
        }
        
        
    }
    
    function randomFact(){
        
        $random = rand(0,11); 

        if($size2==$e){
            for ($i = 0; $i < 11; $i++){
                $slothFact[$i] = "<img id='sloth' src=img/fact$i.png alt='Sloth Facts' >"; 
            }  
            echo $slothFact[$random];
            array_splice($slothFact, $random, 1); 
            --$size2; 
        }
        //Removes picture that was posted
        else if($size2<11 && $size2>0){
            echo $slothFact[$random];
            array_splice($slothFact, $random, 1); 
            --$size2;  
        }
        //Resets array
        else {
            echo $slothFact[$random];
            $size2=11; 
        }
        
    }
?>