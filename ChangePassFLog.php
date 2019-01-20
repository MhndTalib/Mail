<?php include("Block/db.php");
@session_start();
$id = $_SESSION['myID'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
// echo $id."<br>";
if(!(empty($pass1)) && !(empty($pass2))){
    $sql_Pass = "UPDATE `users` SET `Passowrd`='$pass1',`Pass_Temporary`='لا' WHERE `id`=$id";
    @$q_Pass = mysql_query($sql_Pass);
    // echo $sql_Pass;
    if($q_Pass){
        $_SESSION['myMail']= $_SESSION['myMailT'];
        $_SESSION['myName1']=$_SESSION['myName1T'];
        $_SESSION['myFullName']=$_SESSION['myFullNameT'];
        $_SESSION['myDepr']=$_SESSION['myDeprT'];
        $_SESSION['myAdmin']=$_SESSION['myAdminT'];
        echo '<meta http-equiv="refresh" content="0; URL=mail.php" />';
    }
}
?>
<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
<?php $TiltePage = "تغيير كلمة المرور إجباري"; 
         include("Block/icon_meta.php"); ?>
<link rel="stylesheet" type="text/css" href="CSS/myStyle2.css">
</head>
<body>
    <!--Navbar-->
    <div id="nav">
        <div class="iraq">
            <img src="IMG/iraq.gif"/>
        </div>
        <div class="Title"><? echo $TiltePage; ?></div>
    </div>
    
   	<div class="loginbox2" >
    	<img src="IMG/LoginIconAppl.png" class="avatar">
        <h1 id="chng"><? echo $TiltePage; ?></h1>
        <form method="post" action="#">
        	<p>كلمة المرور</p>
            <input type="password" name="pass1" id="pas1" placeholder="إدخل كلمة المرور" title="إدخل كلمة المرور">
            <span id="sho" onClick="myShow2(1)" title="إظهار كلمة المرور" ></span> 
            <p>تأكيد كلمة المرور</p>
            <input type="password" name="pass2" id="pas2" placeholder="تأكيد كلمة المرور" title="تأكيد كلمة المرور">
            <span id="sho2" onclick="myShow2(2)" title="إظهار كلمة المرور" ></span> 
            <input type="submit" name="submet" value="تغيير" title="تغيير كلمة المرور" onClick="return PassCheck()">
        </form>
    </div>
    <div id="note"> <span> م / ..</span>  يجب تغيير كلمة المرور وذلك لإستخدامه لأول مرة  </div>
    <script type="text/javascript" src="JS/ScriptLog.js"></script>
</body>
</html>
