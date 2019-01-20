document.write('<script type="text/javascript" src="JS/showPass.js"></script>');
document.write('<script type="text/javascript" src="JS/ChangePass.js"></script>');

function myCheck(){
     debugger;
    // alert("muhannad");
    try {

        var mail1 = document.getElementById("mail").value;
        var pass1 = document.getElementById("pass").value;
        var user1 = document.getElementById("user");
        var domain1 = document.getElementById("dom").textContent;
        var mail2="",domain2="";
        var n1 = mail1.indexOf("@");
        // mail2 =
        if(mail1.length==0){
            alert("يرجى ادخال البريدأولاً");
            mail1.focus;
            return false;

        }else if(pass1.length==0){
            alert("يرجى ادخال كلمة المرور أولاً");
            pass1.focus;
            return false;
            // break;
       }else{
        if(n1>0){
            domain2=mail1.slice(n1+1);
            if(domain1.toLocaleLowerCase()==domain2.toLocaleLowerCase()){
                mail2=mail1.slice(0,n1).toLocaleLowerCase();
            }else{
                alert("البريد الذي أدخلته غير صحيح");
                mail1.focus;
                return false;
            }
        }else{
            mail2 = mail1;
        }
       }
       user1.value = mail2;

    } catch (err) {
        alert(err.message);
    }
}
function myCheck2(){
    // debugger;
    // alert("muhannad");
    try {

        var name1 = document.getElementById("name1");
        var mail1 = document.getElementById("mail1");
        var phone = document.getElementById("phone1");
        var depr = document.getElementById("depr1");
        var user1 = document.getElementById("user");
        var domain1 = document.getElementById("dom");
        var mail2="",domain2="";
        var n1 = mail1.value.indexOf("@");
        // mail2 =
        if(name1.value.length==0){
            alert("يرجى ادخال الاسم أولاً");
            name1.focus;
            return false;
            // break;
        }else if(mail1.value.length==0){
            alert("يرجى ادخال البريدأولاً");
            mail1.focus;
            return false;
            
        }else if(phone.value.length==0){
            alert("يرجى ادخال الهاتف أولاً");
            phone.focus;
            return false;
            // break;
        }else if(depr.value.length==0){
            alert("يرجى ادخال القسم أولاً");
            depr.focus;
            return false;
            // break;
        }else{
        if(n1>0){
            domain2=mail1.value.slice(n1+1);
            if(domain1.textContent.toLocaleLowerCase()==domain2.toLocaleLowerCase()){
                mail2=mail1.value.slice(0,n1).toLocaleLowerCase();
            }else{
                alert("البريد الذي أدخلته غير صحيح");
                mail1.focus;
                return false;
            }
        }else{
            mail2 = mail1.value;
        }
       }
       user1.value = mail2;

    } catch (err) {
        alert(err.message);
        return false;
    }
}




