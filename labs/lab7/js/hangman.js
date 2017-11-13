var selectedWord = "";
var selectedHint = "";
var board = "";
var remainingGuesses = 6;
var words = [{word:"snake", hint: "It's a reptile."},
             {word: "monkey", hint: "It's a mammal."},
             {word: "beetle", hint: "It's an insect."},
             {word: "octopus", hint: "It has eight arms and has a beak."},
             {word:"horse", hint: "It has four legs."}];
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

//This will begin the game when the window is fully loaded
window.onload = startGame();


function updateImage() {
    
    //document.getElementById("man").innerHTML = "<img src='img/stick_5.png' >";
    $("img").attr("src","img/stick_3.png");
}


function startGame() {
    pickWord();
    initBoard();
    updateBoard();
    createLetters();
}

function pickWord() {
    var randomInt = Math.floor( Math.random() * words.length );
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint; 
}

function updateBoard() {
    $("#word").empty(); 
    
    for (var letter of board) {
        document.getElementById("word").innerHTML += letter + " ";
    }
    
    $("#word").append("<br />");
    $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>")
}

function initBoard() {
    
    for (var letter in selectedWord) {
        
        board += '_';
    }
    
    console.log(board);
    
}

function createLetters(){
    
    for (var letter of alphabet) {
        
        $("#letters").append("<button class='letter' id='"+letter+"'>" + letter + "</button>");
    }
    
}

//Checks if the letter exists in the selectedWord
function checkLetter(letter) {
    var positions = new Array();
    
    //Put all the the positions the letter exists in the array
    for (var i=0; i < selectedWord.length; i++) {
        console.log(selectedWord);
        if (letter == selectedWord[i]) {
            positions.push(i);
        }
        
    }
    
    if (positions.length > 0) {
        updateWord(positions, letter);
        
        //Check to see if this is a winning guess
        if(!board.includes('_')){
            endGame(true); 
        }
        
    } else {
        remainingGuesses -= 1;
        updateMan();
    }
    if(remainingGuesses <= 0){
        endGame(false);
    }
    
    
}

//Updates the current word and calls to updateBoard as well
function updateWord(positions,letter){
    for(var pos of positions){
        board = replaceAt(board, pos, letter); 
    }
    updateBoard(); 
}

//Helper function for replacing specific indexes in a string 
function replaceAt(str, index, value){
    return str.substr(0,index) + value + str.substr(index + value.length); 
}

//Calculates and updates the image for our stick man
function updateMan(){
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

//Ends the game by hiding game divs and displaying the win or loss divs
function endGame(win){
    $("#letters").hide();
    
    if(win){
        $('#won').show();
    }else{
        $('#lost').show(); 
    }
}

//Disables the button and changes the style to tell the user it's disabled
function disableButton(btn){
    btn.prop("disabled",true);
    btn.attr("class","btn btn-danger")
}

//events
$("#letterBtn").click( function(){ 
   //updateImage();
   
   var boxVal = $("#letterBox").val();
   alert(boxVal);
   
});

$(".letter").click(function(){
   checkLetter($(this).attr("id"));
   disableButton($(this)); 
});

$(".replayBtn").on("click",function() {
    location.reload(); 
});

