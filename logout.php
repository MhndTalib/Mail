<html dir="rtl">
<head>
<!-- ===== Bassics HTML5 ====== -->
        <?php $TiltePage = "تسجيل الخروج"; ?>
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
        if(isset($_SESSION['myMail'])){
            @session_unset();
           
        } echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
        // if(empty($mail)){
        //     
        // }else{
        //    
        // }
    ?>
	   
</body>
</html>
