<!DOCTYPE html>
<html>
    <head>
        <title>CSUMB Library</title>
         <!--jquery goes first and then bootsrap files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <style>
            h1{
                text-align: center;
            }
            footer{
                text-align: center;
            }
            h3{
                text-align: center;
            }
            #delete{
                display: none; 
            }

        </style>
        <script>
            $(window).on('load',function(){
                $('#loginInfoModal').modal('show');
            });
            function checkUser(email,password){
                $.ajax({
                    type: "POST",
                    url: "api/checkUser.php",//USE checkUser 
                    dataType: "json", //Need to specify the format
                    data: {"userEmail":email, "userPassword":password},
                    success: function(data,status) {
                    if(data===false){
                        alert("Incorrect Email or Password!");
                    }else{
                        userLibrary(data.userId); 
                    }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                }
                
                });//ajax
            }//function 
            function userLibrary(userId){
                $.ajax({
                type: "POST",
                url: "api/userLibraryAPI.php",//USE CSUMBLibrary 
                dataType: "json", //Need to specify the format
                data: {"userId":userId},
                success: function(data,status) {
                    
                    for(var i=0; i<data.length; i=i+1){
                        $("tbody").append("<tr><th scope='row'>"+data[i].bookId+"</th><td>"+data[i].bName+"</td><td>"+data[i].bGenre+"</td><td>"+data[i].bAuthor+"</td><td><button type='button' class='btn btn-danger btn-xs' onclick='removeBook("+data[i].bookId+","+userId+")' >Remove</button></td></tr>");
                    }
                    $('#loginInfoModal').modal('hide');
                },
                complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                }
                
                });//ajax
            }//funciton 
            function removeBook(bookId,userId){
                //alert(bookId);
                $.ajax({
                type: "POST",
                url: "api/removeBookUL.php",//USE CSUMBLibrary 
                dataType: "json", //Need to specify the format
                data: {"bookId":bookId},
                success: function(data,status) {
                 alert("Book Removed");
                 $("tbody").html("");
                 userLibrary(userId);
                },
                complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                }
                
                });//ajax
            }
            function addBook(bookId){
                //alert("bruh");
                $.ajax({
                type: "POST",
                url: "api/addBookUL.php",//USE CSUMBLibrary 
                dataType: "", //Need to specify the format
                data: {"bookId":bookId, "userId":11},
                success: function(data,status) {
                    alert("A book was added to your library."); 
                },
                complete: function(data,status) { //optional, used for debugging purposes
                    alert(status);
                }
                
                });//ajax
            }//function
            
            function csumbLibrary() {
                //alert("hey");
            $.ajax({
                type: "GET",
                url: "api/libraryDB.php",//USE CSUMBLibrary 
                dataType: "json", //Need to specify the format
                data: {},
                success: function(data,status) {
                    for(var i=0; i<data.length; i=i+1){
                        $("tbody").append("<tr><th scope='row'>"+data[i].bookId+"</th><td>"+data[i].bName+"</td><td>"+data[i].bGenre+"</td><td>"+data[i].bAuthor+"</td><td><button type='button' class='btn btn-primary btn-xs' onclick='addBook("+data[i].bookId+","+data[i].bookId+")'>Add To Library</button></td><td><button id='delete' type='button' class='btn btn-danger btn-xs' onclick=''>Delete</button></td></tr>");
                    }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                }
                
                });//ajax
                
         }//Function

        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="https://csumb.edu">CSUMB</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="csumbLibrary.php">Home</a>
              <a class="nav-item nav-link" href="userLibrary.php" href="#loginInfoModal">Your Library</a>
            </div>
          </div>
        </nav>
        
