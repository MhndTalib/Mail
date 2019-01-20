<?php include("Block/db.php"); ?>

<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
<?php $TiltePage = "إستلام الطلب"; 
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
        <div class="Title">إعادة كلمة المرور</div>
    </div>
    
    <?php
        @session_start();
        $mail = $_POST['mail1'];
        $name = $_POST['name1'];
        $date = $_POST['date1'];
        $time = $_POST['time1'];
        $phone = $_POST['phone1'];
        $depr = $_POST['depr1'];
        $user = $_POST['user'];
         //echo $mail."  ".$name."  ".$date."  ".$time."  ".$phone."  ".$depr."<br>".$user;

        if(!(empty($user))){
            $sql_mail = "SELECT * FROM users WHERE Mail='$user'";
            $q_mail = mysql_query($sql_mail);
            $num_mail = mysql_num_rows($q_mail);
            if($num_mail>0){
                @$mydate = date("Y-m-d H:i:s");
                $sql_RPass = "INSERT INTO `pass`(`Name1`, `Mail`, `Depr`, `Phone1`, `Date_Last`, `Time_Last`, `Date_Sent`)
                                        VALUES ('$name','$user','$depr','$phone','$date','$time','$mydate')";
                //ECHO "<br>". $sql_RPass;
                $q_RPass = mysql_query($sql_RPass);
                if(!$q_RPass){echo "Error";}else{
                   ?>

                <div class="loginbox3" >
                    <img src="IMG/LoginIconAppl.png" class="avatar">
                    <h1>تم استلام طلب إعادة كلمة المرور</h1>
                    <div>
                        تم اسلام طلبك إستاذ/ست <? echo $name; ?> وسيتم الرد خلال 15 دقائق ، وفي حالة عدم الرد يرجى الإتصال على الرقم <span>07702823051</span> أو الاتصال على قسم <span>تقنية المعلومات</span> على الرقم <span>07702823051</span>
                    </div>
                </div>
                <meta http-equiv="refresh" content="10; URL=login.php" />


                   <?php
                }
                
             }else{
                echo '<script>alert("البريد الذي أدخلته غير موجود!!");</script>';
                echo '<meta http-equiv="refresh" content="0; URL=Reset_Pass.php" />';
            }
        }

    ?>


   	
    <script type="text/javascript" src="JS/showPass.js"></script>
</body>
</html>
