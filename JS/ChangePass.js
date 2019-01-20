function PassCheck(){
    // alert("muhannad");
    try {
// debugger;
        var pass1 = document.getElementById("pas1").value;
        var pass2 = document.getElementById("pas2").value;
        if(pass1.length==0){
            alert("يرجى إدخال كلمة المرورأولاً");
            pass1.focus;
            return false;

        }else if(pass1.length<8){
            alert("يجب أن لا يقل طول كلمة المرور عن 8 أحرف");
            pass1.focus;
            return false;
        }else if(pass2.length==0){
            alert("يرجى تأكيد كلمة المرور أولاً");
            pass2.focus;
            return false;
            // break;
       }else if(pass1 != pass2){
        alert("كلمتي المرور غير متطابقتينً");
        pass1.focus;
        return false;
        // break;
        
       }

    } catch (err) {
        alert(err.message);
    }
}
