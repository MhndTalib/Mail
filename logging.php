<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
<?php $TiltePage = "تسجيل حساب جديد"; 
         include("Block/icon_meta.php"); ?>
        <link rel="stylesheet" type="text/css" href="CSS/myStyle2.css">
    <link type="text/css" href="CSS/ResetW550.css" rel="stylesheet" />
    </head>
<body>
    <!--Navbar-->
        <div id="nav">
            <div class="iraq">
                <img src="IMG/iraq.gif"/>
            </div>
            <div class="Title">تسجيل حساب</div>
        </div>
	<div class="loginbox">
    	<img src="IMG/LoginIconAppl.png" class="avatar">
        <h1>تسجيل</h1>
        <form action="login.php">
        	<input type="text" name="" placeholder="* الأسم الأول" class="input50" title="الأسم الأول">
            <input type="text" name="" placeholder="* الأسم الأخير" class="input50" title="الأسم الأخير">
            <input type="text" name="" placeholder="الأسم الكامل" class="input100" title="الأسم الكامل">
            <label id="domin"  name="" dir="ltr">
                @basrah.iq
            </label>
            <input type="text" name="" placeholder="* عنوان البريد" class="input70" title="عنوان البريد">
            <input type="password" name="" placeholder="* كلمة المرور" class ="input50" title="كلمة المرور (يجب أن لا تقل عن 8 رموز)">
            <input type="password" name="" placeholder="* تأكيد كلمة المرور" class="input50" title="تأكيد كلمة المرور"><br>
            <input type="checkbox" name="" checked class="inputCh" title="كلمة المرور مؤقتة">كلمة المرور مؤقتة
            <input type="checkbox" name="" class="inputCh" title="حساب فعال">حساب فعال
            <input type="text" name="" placeholder="الهاتف1" class="input50" title="الهاتف1">
            <input type="text" name="" placeholder="الهاتف2" class="input50" title="الهاتف2">
             <input type="text" name="" placeholder="القسم" class="input100" title="القسم">
            <input type="checkbox" name="" class="inputCh" title="مسؤول البريد؟؟">مسؤول البريد
            <br><input type="submit" name="" value="تسجيل" class="input100" title="تسجيل حساب جديد">
        </form>
    </div>
</body>
</html>
