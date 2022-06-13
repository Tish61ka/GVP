let i = false;
let a = false;
let select = document.getElementById("raz1");
let getValue = 0;

function click1(){
    if(i == false){
        document.querySelector(".first-img-video").style.transform = "rotate(" + 180 + "deg" + ")";
        i = true;
    }else{
        document.querySelector(".first-img-video").style.transform = "rotate(" + 0 + "deg" + ")";
        i = false;
    }
    document.getElementById("raz").addEventListener("blur", function(){
        document.querySelector(".first-img-video").style.transform = "rotate(" + 0 + "deg" + ")";
        i = false;
    });
}
function click2(){
    if(a == false){
        document.querySelector(".second-img-video").style.transform = "rotate(" + 180 + "deg" + ")";
        a = true;
    }else{
        document.querySelector(".second-img-video").style.transform = "rotate(" + 0 + "deg" + ")";
        a = false;
    }
    document.getElementById("raz1").addEventListener("blur", function(){
        document.querySelector(".second-img-video").style.transform = "rotate(" + 0 + "deg" + ")";
        a = false;
    });
}
function click3(){
        getValue = select.value;
        if(getValue == 2){
            document.getElementById("video1").style.display = "none"; 
            document.getElementById("h1").style.display = "none"; 
            document.getElementById("p1").style.display = "none"; 
            document.getElementById("video2").style.display = "block";
            document.getElementById("h2").style.display = "block";  
            document.getElementById("p2").style.display = "block";
            console.log(getValue);
          }else if(getValue == 1){
            document.getElementById("video1").style.display = "block"; 
            document.getElementById("h1").style.display = "block"; 
            document.getElementById("p1").style.display = "block"; 
            document.getElementById("video2").style.display = "none";
            document.getElementById("h2").style.display = "none";  
            document.getElementById("p2").style.display = "none";  
          }
}
click3();
