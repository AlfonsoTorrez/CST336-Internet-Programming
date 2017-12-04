<!--
1) There is image size validation (images should be smaller than 1MB)   (15 pts)
5) There are at least 10 CSS rules to improve the look and feel               (15 pts)
6) There is a clickable link to the lab                                                          (10 pts)
--> 
<?php
    //function 
    function fileDownload(){
        if($_FILES['myFile']['size'] > 1000000){
            echo "File too big"; 
        }else{
             move_uploaded_file($_FILES["myFile"]["tmp_name"], "gallery/" . $_FILES['myFile']['name'] );
        }
    }
    //Displaying the animal pictures function
    function displayG(){
        $files = scandir("gallery/",1);
        for ($i = 0; $i < count($files)-2; $i++) {
            echo "<a href='gallery/" .   $files[$i] . "' ><img src='gallery/" .   $files[$i] . "' width ='50'></a>";
        }
    }
    //SIZES need to change when you click and when you click on another animal the animal that was previously clicked should go back to normal
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 10: Photo Gallery</title>
    </head>
    <body>
    <h2>Photo Gallery</h2>
    <form method="POST" enctype="multipart/form-data">
        
        <input type="file" name="myFile"/>
        
        <input type="submit" name="upload File!"/>
        
    </form>
    <?=displayG()?>
    </body>
</html>