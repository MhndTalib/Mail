function myShow(){
     debugger;
    var inpt = document.getElementById("pass");
    var sho = document.getElementById("sho");
    if(inpt.type == 'text'){
        inpt.type = 'password';
        sho.style.backgroundImage = "url(IMG/show.png)";
        sho.title = "إظهار كلمة المرور";
    }else{
        inpt.type = 'text';
        sho.style.backgroundImage = "url(IMG/hide.png)";
        sho.title = "إخفاء كلمة المرور";
    }
}

function myShow2(i){
    // debugger;
    var inpt1 = document.getElementById("pas1");
    var sho1 = document.getElementById("sho");
    var inpt2 = document.getElementById("pas2");
    var sho2 = document.getElementById("sho2");
    if(i==1){
        if(inpt1.type == 'text'){
        inpt1.type = 'password';
        sho1.style.backgroundImage = "url(IMG/show.png)";
        sho1.title = "إظهار كلمة المرور";
    }else{
        inpt1.type = 'text';
        sho1.style.backgroundImage = "url(IMG/hide.png)";
        sho1.title = "إخفاء كلمة المرور";
    }
    }else{
        if(inpt2.type == 'text'){
            inpt2.type = 'password';
            sho2.style.backgroundImage = "url(IMG/show.png)";
            sho2.ذtitle = "إظهار كلمة المرور";
        }else{
            inpt2.type = 'text';
            sho2.style.backgroundImage = "url(IMG/hide.png)";
            sho2.title = "إخفاء كلمة المرور";
        }
    }
    

    
    
}
