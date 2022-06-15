let b = false;
function OpenProfileClick(){
        if(b == false){
            document.getElementById("header-ul").style.right = 0 + "%";
            b = true;
        }else{
            document.getElementById("header-ul").style.right = -50 + "%";
            b = false;
        }
    }