var slothPicture = [""];
var slothFact = [""]; 
var number = ""; 
fillUp(); 

function fillUp(){
    for(i=0;i<11;i++){
    slothFact.push("img/fact"+i+".png"); 
    slothPicture.push("img/sloth"+i+".jpg"); 
    }
        
    // console.log(slothPicture);
    // console.log(slothFact);
}

//Get random picture
function randomPicture(){
    var num = Math.floor((Math.random() * 10) + 1);
    return slothPicture[num]; 
}

//Get random fact
function randomFact(){
    var num = Math.floor((Math.random() * 10) + 1);
    return slothFact[num]; 
}

//Print Slothes
function printSloths(num){
    for(i=1;i<=10;i++){
        if(i<=num){
            $('#sloth'+i+'').html("<img src='"+slothPicture[i]+"' alt='Sloth Picture'>").show();
        }else{
             $('#sloth'+i+'').html("<img src='"+slothPicture[i]+"' alt='Sloth Picture'>").hide();
        }
    }
}


//Events
$('#slothPicture').on('click',function(){
    $('#pictureContainer').hide(); 
    $('#slothContent').html("<img src='"+randomPicture()+"' alt='Sloth Picture'>"); 
});

$('#slothFact').on('click',function(){
    $('#pictureContainer').hide(); 
    $('#slothContent').html("<img src='"+randomFact()+"' alt='Sloth Fact'>"); 
});

$('#enter').on('click',function(){
    this.number = document.getElementById('number').value;
    //console.log(this.number); 
    if(this.number>0&&this.number<11){
        $('#alert').hide(); 
        printSloths(this.number); 
    }else{
        $('#alert').html("<div class='alert alert-danger'> Your entry needs to be between 1-10.</div>").show();
    }
});