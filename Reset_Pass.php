<?php include("Block/db.php"); ?>
<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
<?php $TiltePage = "إعادة كلمة المرور"; 
include("Block/icon_meta.php"); ?>
        <link rel="stylesheet" type="text/css" href="CSS/myStyle2.css">
        <link type="text/css" href="CSS/ResetW550.css" rel="stylesheet" />
    </head>
<body>
<?php   
@session_start();
$Domain =$_SESSION['myDomin'];
?>
    <!--Navbar-->
        <div id="nav">
            <div class="iraq">
                <img src="IMG/iraq.gif"/>
            </div>
            <div class="Title">طلب إعادة كلمة مرور</div>
        </div>
        <div id='dom' ><? echo $Domain; ?></div>
	<div class="loginbox">
    	<img src="IMG/LoginIconAppl.png" class="avatar">
        <h1>إدخال معلومات</h1>
        <form method="POST" action="Receipt_Reset_Pass.php">
        	<input type="text" id="name1" name="name1" placeholder="* الأسم الكامل" class="input100" title="الأسم الكامل">
            <input type="text" id="mail1" name="mail1" placeholder="* عنوان البريد" class="input100" title="عنوان البريد" Style="direction: ltr;">
            <input type="date" id="date1" name="date1" title="تاريخ آخر دخول عن طريق كلمة المرور المفقودة" placeholder="آخر دخول" class="input100" ><br>
            <input type="time" id="time1" name="time1" title="وقت آخر دخول عن طريق كلمة المرور المفقودة" placeholder="آخر دخول" class="input100" ><br>
            <input type="tel" id="phone1" name="phone1" placeholder="* الهاتف" class="input100" title="الهاتف">
            <input type="text" id="depr1" name="depr1" placeholder="* القسم" class="input100" title="القسم">
            <br><input type="reset" name="" value="تفريغ البيانات" class="input50" id="res_pass" title="تفريغ البيانات">
            <input type="submit" name="" value="إرسال الطلب" onClick="return myCheck2()" class="input50" id="res_pass" title="إرسال طلب لإعادة كلمة المرور">
            <input type="hidden" name="user" id="user" value=""/>
            </form>
    </div>
    <script type="text/javascript" src="JS/ScriptLog.js"></script>
</body>
</html>
