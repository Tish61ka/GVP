let i = false;
function hovering(){
    document.querySelector(".left-panel").addEventListener('mouseover', function(){
        setTimeout(() => {
            document.querySelector(".left-panel li a p").style.display = "block";
            document.querySelector(".li p").style.display = "block";
            document.querySelector(".comment p").style.display = "block";
            document.querySelector(".first-p-admin").style.display = "block";
            document.querySelector(".last-p-admin").style.display = "block";
        }, 200);
    });
    document.querySelector(".left-panel").addEventListener('mouseout', function(){
        setTimeout(() => {
            document.querySelector(".left-panel li a p").style.display = "none";
            document.querySelector(".li p").style.display = "none";
            document.querySelector(".comment p").style.display = "none";
            document.querySelector(".first-p-admin").style.display = "none";
            document.querySelector(".last-p-admin").style.display = "none";
        }, 200);
    });
}
hovering();
function OpenContent(){
    if(i == false){
        document.querySelector(".content li").style.display = "none";
        document.querySelector(".last-li-admin").style.display = "block";
        i = true;
    }else{
        document.querySelector(".content li").style.display = "block";
        document.querySelector(".last-li-admin").style.display = "none";
        i = false;
    }
}