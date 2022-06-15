let i = true;
function click10(){
    if(i == true){
        document.querySelector(".signup").style.display = "none";
        document.querySelector(".login").style.display = "block";
        i = false;
    }else{
        document.querySelector(".signup").style.display = "block";
        document.querySelector(".login").style.display = "none";
        i = true;
    }
}