var colors = ['#d50000','#1b5e20','#0d47a1','#ffd600'];
var choice = Math.floor(Math.random() * 4);
window.onload = function colorchoose(){
    var numberColor = document.getElementById("number");
    numberColor.style.color = colors[choice];
}
function red(){
    if(choice == 0){
        document.getElementById("answer").innerHTML = "CORRECT";
    }
    else{
        document.getElementById("answer").innerHTML = "WRONG";
    }
}

function green(){
    if(choice == 1){
        document.getElementById("answer").innerHTML = "CORRECT";
    }
    else{
        document.getElementById("answer").innerHTML = "WRONG";
    }
}

function blue(){
    if(choice == 2){
        document.getElementById("answer").innerHTML = "CORRECT";
    }
    else{
        document.getElementById("answer").innerHTML = "WRONG";
    }
}
function yellow(){
    if(choice == 3){
        document.getElementById("answer").innerHTML = "CORRECT";
    }
    else{
        document.getElementById("answer").innerHTML = "WRONG";
    }
}
