<?php
session_start(); 

function addClass($courseName, $professor, $location, $time) {
    echo 'New Class Added'; 
    $_SESSION['classes'][] = array($courseName,$professor,$location,$time); 
}

function printClasses() {
    echo '<br/>'; 
    if(count($_SESSION['classes'])==0)
        echo 'You do not have any classes this session :('; 
    for ($i = 0; $i < count($_SESSION['classes']); $i++){
        echo "Class ".($i+1).":"; 
        echo '<br/>'; 
        for ($j = 0; $j < 4; $j++){
            if($j==0)
                echo '<u>Course Name</u>: '.$_SESSION['classes'][$i][$j].'<br/>';
            else if($j==1)
                echo '<u>Professor</u>: '.$_SESSION['classes'][$i][$j].'<br/>';
            else if($j==2)
                echo '<u>Location</u>: '.$_SESSION['classes'][$i][$j].'<br/>';
            else if($j==3)
                echo '<u>Time</u>: '.$_SESSION['classes'][$i][$j].'<br/>';
        }
    } 
}

function resetSession(){
    echo 'Your session has been reset'; 
    session_destroy();
}


?>