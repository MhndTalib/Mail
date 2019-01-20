<?php include("Block/db.php"); ?>
<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
        <?php $TiltePage = "تسجيل الدخول"; 
         include("Block/icon_meta.php"); ?>
<link rel="stylesheet" type="text/css" href="CSS/myStyle2.css">
</head>
<body>
    <!--Navbar-->
    <div id="nav">
        <div class="iraq">
            <img src="IMG/iraq.gif"/>
        </div>
        <div class="Title"><?php echo $TiltePage; ?></div>
    </div>
<?php   
@session_start();
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$user = $_POST['user'];
$Domain =$_SESSION['myDomin'];
//  echo $mail.' + ' . $pass .' + ' . $user;
//  echo $Domain;

if(!(empty($mail)) && !(empty($pass))){
    $sql_mail = "SELECT * FROM users WHERE Mail='$user'";
    $q_mail = mysql_query($sql_mail);
    $num_mail = mysql_num_rows($q_mail);
    if($num_mail>0){ 
        $row_mail = mysql_fetch_assoc($q_mail);
	    $pass2 = $row_mail['Passowrd'];
		if($pass != $pass2) {echo '<script>alert("كلمة المرور غير صحيحة!!");</script>';
		}else{
           
            $Domain =$_SESSION['myDomin'];
            // echo $Domain;
            $id = $row_mail['id'];
            $_SESSION['myID']=$row_mail['id'];
            @$mydate = date("Y-m-d");
            $sql_DateL = "UPDATE `users` SET `Date_ L_Seen`='$mydate' WHERE `id`=$id";
            $q_DateL = mysql_query($sql_DateL);
            if(!$q_DateL){}
            $Temp_pass=$row_mail['Pass_Temporary']; 
            $Enable=$row_mail['Enable']; 
            if($Enable=='لا'){
                echo '<meta http-equiv="refresh" content="0; URL=Enable_Mail.php" />';
            }else if($Temp_pass=='نعم'){
                $_SESSION['myMailT']=$user;
                $_SESSION['myName1T']=$row_mail['Name1'];
                $_SESSION['myFullNameT']=$row_mail['FullName'];
                $_SESSION['myDeprT']=$row_mail['Depr'];
                $_SESSION['myAdminT']=$row_mail['Admin'];
                echo '<meta http-equiv="refresh" content="0; URL=ChangePassFLog.php" />';
            }else{
                $_SESSION['myMail']=$user;
                $_SESSION['myName1']=$row_mail['Name1'];
                $_SESSION['myFullName']=$row_mail['FullName'];
                $_SESSION['myDepr']=$row_mail['Depr'];
                $_SESSION['myAdmin']=$row_mail['Admin'];
                echo '<meta http-equiv="refresh" content="0; URL=mail.php" />';
            }
		}
					
    }else{
        echo '<script>alert("البريد الذي أدخلته غير موجود!!");</script>';
    }
}else{
}?>
    <div id='dom' hidden ><? echo $Domain; ?></div>
   	<div class="loginbox2" >
    	<img src="IMG/LoginIconAppl.png" class="avatar">
        <h1>تسجيل الدخول</h1>
        <form method="post" action="#">
        	<img src="IMG/user2.png" class="log">
        	<p>البريد</p>
            <input type="text" id="mail" name="mail" placeholder="إدخل البريد" title="إدخل البريد">
            <img src="IMG/load2.png" class="log">
        	<p>كلمة المرور</p>
            <input type="password" id="pass" name="pass" placeholder="إدخل كلمة المرور" title="إدخل كلمة المرور" id="pass">
            <span id="sho" onClick="myShow()" title="إظهار كلمة المرور" ></span> 
            <input type="submit" name="" value="دخول" title="دخول للبريد" onClick="return myCheck()">
            <input type="hidden" name="user" id="user" value=""/>
            <a href="Reset_Pass.php" title="إرسل رسالة لإعادة كلمة المرور"> هل فقدت كلمة المرور ؟ </a><br>
            <!-- <a href="logging.php" title="تسجيل حساب جديد"> ليس لديك حساب ؟ تسجيل ؟ </a> -->
        </form>
    </div>
    <script type="text/javascript" src="JS/ScriptLog.js"></script>
</body>
</html>
