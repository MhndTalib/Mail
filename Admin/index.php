<html dir="rtl">
<head>

<!-- ===== Bassics HTML5 ====== -->
        <?php $TiltePage = "الصفحة الرئيسية"; ?>
        <?php include("Block/icon_meta.php"); ?>
        <link rel="stylesheet" type="text/css" href="CSS/myStyle2.css">
    </head>
<body>
   
    <!--Navbar-->
    <div id="nav">
        <div class="iraq">
            <img src="IMG/iraq.gif"/>
        </div>
        <div class="Title">أهلاً وسهلاً</div>
    </div>
    <?php
        @session_start();
        $_SESSION['myDomin']="Pro-Mhnd.ml";
        if(isset($_SESSION['myMail'])){
            echo '<meta http-equiv="refresh" content="2; URL=mail.php" />';
        }else{ echo '<meta http-equiv="refresh" content="2; URL=login.php" />';}
        // if(empty($mail)){
        //     
        // }else{
        //    
        // }
    ?>
	   
</body>
</html>
