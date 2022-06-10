let i = false;
let teg = document.querySelector("#btn1 p");
let tegimg = document.querySelectorAll("#btn1 img");
function small(){
    if(teg == undefined){
        setTimeout(() => {  
            document.getElementById("btn1").style.width = 3 + "vw";
            document.getElementById("btn1").style.height = 3 + "vw";
            document.querySelector("#btn1").innerHTML += `
                    <img class="triangle" src="/img/triangle.png">	
                `
        }, 10000);       
    }else{
        setTimeout(() => {  
            document.getElementById("btn1").style.width = 3 + "vw";
            document.getElementById("btn1").style.height = 3 + "vw";
            document.querySelector("#btn1 p").remove();
            document.querySelector("#btn1").innerHTML += `
                    <img class="triangle" src="/img/triangle.png">	
                `
        }, 10000); 
    }
}
small();
let test = document.getElementById("btn1");

function clicking(){
    if(i == false){
        if(tegimg != undefined){
            document.querySelector("#btn1 img").remove();
            document.querySelector("#btn1").innerHTML += `
                <img class="triangle" src="/img/grave.png">	
            `
        }else{
            document.querySelector("#btn1").innerHTML += `
                <img class="triangle" src="/img/grave.png">	
            `
        }
            document.querySelector("#close-demo").style.display = "none";
            document.querySelector(".slider").style.display = "none";
            i = true;
    }else{
        if(tegimg != undefined){
            document.querySelector("#btn1 img").remove();
            document.querySelector("#btn1").innerHTML += `
                <img class="triangle" src="/img/triangle.png">	
            `
        }else{
            document.querySelector("#btn1").innerHTML += `
                <img class="triangle" src="/img/triangle.png">	
            `
        }
            document.querySelector("#close-demo").style.display = "block";
            document.querySelector(".slider").style.display = "block";
            i = false;
    }
}
function click3(){
    document.querySelector(".film").style.display = "none";
}
function hover(){
    document.querySelector(".go-film").addEventListener("mouseover", function(){
        document.querySelector(".go-film").style.left = 0;
    })
    document.querySelector(".go-film").addEventListener("mouseout", function(){
        document.querySelector(".go-film").style.left = -11.5 + "vw";
    })
}
hover();