document.write('<script type="text/javascript" src="JS/up.js"></script>');
var info = document.getElementById("info");
var img = document.querySelector("#nav>#M_Nav1>div")
function showInfo() {
    // debugger;
    if(img.title=="إظهار المعلومات الشخصية"){
//        info.style.top = window.event.clientY;
        info.style.display ='inline';
        img.title="إخفاء المعلومات الشخصية"

    }else{
        info.style.display ='none';
        img.title="إظهار المعلومات الشخصية"
    }

}

function logout() {
    // debugger;
    // sessionStorage.removeItem('myMail');
}


document.onload=function () {
    
}
