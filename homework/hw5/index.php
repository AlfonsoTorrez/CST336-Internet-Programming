<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Homework 5</title>
        <script>
            function getCity() {
                //alert($("#textbox").val());
            $.ajax({
                type: "GET",
                url: "http://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php",
                dataType: "json", //Need to specify the format
                data: { "zip": $("#textbox").val()},
                success: function(data,status) {
                    //alert(data.city);
                    $("#state").html(data.state);
                    $("#city").html(data.city);
                    $("#county").html(data.county);
                    if(data.city==undefined){
                        $("#zipAlert").html("Zip code not found");
                        $("#city").html("");
                        $("#state").html("");
                        $("#county").html("");
                    }
                    else {
                        $("#zipAlert").html("");
                    }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
                });//ajax
                
            $("#history2").html("");
            $.ajax({
                type: "GET",
                url: "zipAPI.php",
                dataType: "json", //Need to specify the format
                data: {"zip": $("#textbox").val()},
                success: function(data,status) {
                    var count = 0; 
                    //alert(data.length);
                    for(var i=0;i<data.length;i++){
                        $("#history2").append('<span>'+"Zip Code ->"+data[i].zipCode+" "+"Timestamp ->"+data[i].timestamp+'</span><br>');
                        if($("#textbox").val()==data[i].zipCode){
                            count = count + 1; 
                        }
                    }
                    $("#zipcode").html($("#textbox").val());
                    $("#count").html(count);
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
                });//ajax
                
         }//Function
        </script>
    </head>
    <body id="main">
        <h1 id="title"> Searching my Zip Code</h1>
        <form>
            <label id="enter">Enter your favorite zip code below:</label>
            <br>
            <input id ="textbox" type="text"><text id="zipAlert"></text>
            <br><br>
        </form> 
        <button class="btn btn-primary" onclick="getCity()"> Enter </button>
        <div id = "info">
            <b><u>State</u>:</b> <span id="state"></span>
            <br>
            <b><u>City</u>:</b> <span id="city"></span>
            <br>
            <b><u>County</u>:</b> <span id="county"></span>
            <br></br>
        </div>
        <div id = "history1">
            <b><u>Zip Code Entered</u>:</b> <span id="zipcode"></span>
            <br>
            <b><u>Times The Zipcode Was Used</u>:</b> 
            <span id="count"></span>
            <br></br>
        </div>
        <b><u>History</u>:</b>
        <div id = "history2">
            
        </div>
    </body>
</html>