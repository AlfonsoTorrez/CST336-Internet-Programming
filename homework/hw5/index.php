<!--
Homework 5: AJAX / API

Use any existing API and display data using AJAX and jQuery.
Store and display the values used as a parameters when using the API
Optionally, you can create your own API.

Rubric:

1.*****Web page includes an HTML form with at least two form elements  (10 points)*****
2.*****Web page uses an API and sends at least one value typed by the user  (10 points)*****
3.*****Web page displays at least three values returned by the API, below the HTML form(15 point
4.*****At least one value typed by the user is stored in a database using AJAX (15 points)*****
5. The value typed by the user and the number of times the same value has been typed are displayed right below the HTML form (15 points)
6. The history of the value typed by the user is displayed below the form too. 
    The history includes the date and time the value was typed. Hint:  Use a "timestamp" field type in the database table. 
    Its value is automatically updated when a record is inserted. (15 points)
7. Web page has a nice design (uses Bootstrap or at least 20 CSS rules) (10 points)
8.*****There is a clickable link to the assignment in Heroku (10 points)*****

Example: if using the Walmart API and searching for "wii"  for the first time on Nov 18, upon clicking on a "Search" button, an AJAX call should return something like:

The keyword "wii" has been searched 1 time(s)
Search History:
Nov 18, 2017  10:30am

If searching for the same value (wii) once every day for the following two days, the last search should display something like:

The keyword "wii" has been searched 4 time(s) 
Search History:
Nov 18, 2017  10:30am
Nov 19, 2017  12:27pm
Nov 20, 2017  11:13am

In other words, you'll need to insert the value into a database table and then retrieve and display the number of times it's being used and the time stamps when the values where added to the database.
-->
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