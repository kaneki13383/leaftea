document.getElementById("menu")
let i = true;
function click1(){
    if( i == true){
        document.querySelector(".navigation").style.display = "flex";
        i = false;
    }else{
        document.querySelector(".navigation").style.display = "none";
        i = true;
    }
}