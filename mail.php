<?php include("Block/db.php"); ?>
<?php 
if (isset($_GET['box'])) {$box = $_GET['box']; }
if (!isset($_GET['box'])) {$box = "Inbox"; }
if($box == "Inbox") {$TiltePage = "البريد الوارد";}
if($box == "Send") {$TiltePage = "البريد المرسل";}
if($box == "Trash") {$TiltePage = "المهملات";}
if($box == "Draft") {$TiltePage = "المسودات";}
if($box == "Archive") {$TiltePage = "الأرشيف";}
@session_start();
$mail = $_SESSION['myMail'];
$Name1 = $_SESSION['myName1'];
$FullName = $_SESSION['myFullName'];
$Depr = $_SESSION['myDepr'];
$Admin = $_SESSION['myAdmin'];
$Domin =$_SESSION['myDomin'];
if ((!isset($mail))){
    echo '<meta http-equiv="refresh" content="0; URL=login.php"/>';
}

?>
<!DOSTYPE html>
<html>
    <head>
        <!-- ===== Bassics HTML5 ====== -->
        <?php include("Block/icon_meta.php"); ?>
        
        <link type="text/css" rel="stylesheet" href="CSS/MyStyle1.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/NAV.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/Menu.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/ResetW650.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/ResetW550.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/ResetH550W530.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/ResetH550W650.css"/>
    </head>
    <body>
        <!--Navbar-->
        <?php include("Block/nav.php"); ?>

        <div id="info">
           <div id="img">
                <img src="IMG/user.jpg" draggable="false" title="عرض المعلومات الشخصية" /><a href="#" title="تغيير الصورة الشخصية">تغيير الصورة</a>
           </div>
            <div id="inf">
                <div class="m1" title="الاسم"><? echo $FullName; ?></div>
                <div class="m1" title="البريد"><? echo $mail."@".$Domin; ?></div>
                <div class="m1" title="القسم"><? echo $Depr; ?></div>
                <div class="m1"><form method="post" action="logout.php"> <button type="submet" title="تسخيل الخروج" onclick="logout()">تسجيل الخروج</button></form>
                <!-- <div class="m1"><form method="post" action="logout.php"> <button type="submet" title="تسخيل الخروج" onclick="logout()">Log Out</button></form> -->
                </div>   
            </div>   
        </div>
        
        <!-- Body -->
        <div id="Body">
            <!-- Mune -->
        <?php include("Block/menu.php"); ?>
            <!--  View  -->
            <div id="View">
                <!---    ---->
                <div id="news">
                    <marquee dir="ltr">
                        المبرمج مهند طالب القريني
                    </marquee>
                </div>
                <!-- التفاصيل  -->
                <div id="Minutiae">

                    التفاصيل
                    <br/><BR/>
                    kj fgajsdlfk lksjf lsjf lksj f<br/><BR/>lksjdf lksjf klkdsjfh aklsjdhfk fh askjdfhd kfjh kldsfh lkasjdfh klajsdf halksdjfhl akdsfh kljsadhfads lkfjhaksdjfh kjdh sfh dskjhfads ffffkjhdslfkj hdasfkj dslfjhd fjkdh ksjafh kljdfhjkasdh jkh fkjashlkj a ahskldjfh wjkehrkjweh hsdkjh9u kja<br/><BR/>ioeuw ru oiueroi eeiour iwiu eriou <br/><BR/><br/><BR/>ou qoiuroi qoiweuro iuoiru ropiwqu roiuqweori oiweu roiuewopr io r oiuoiewur oiew ru oiewur uoiu roiu erioewru iouerio<br/><BR/>oiu oreiwut oiweutioeruio oerwut ioerutiowe urtioreu toiru toiwuroiu oiwrut oiperut oiu <br/><BR/>iuer iueryt iueryt uiery t reiuo tty <br/><BR/>uriewrt iwerit ioweru 
                    oiu oreiwut oiweutioeruio oerwut ioerutiowe urtioreu toiru toiwuroiu oiwrut oiperut oiu <br/><BR/>iuer iueryt iueryt uiery t reiuo tty <br/><BR/>uriewrt iwerit ioweru <br/><BR/><br/><BR/>
                    Muhannad Talib AL-Quraini
                </div>   
            </div>
        </div>
        <!--Footer-->
        <?php include("Block/flooder.php"); ?>
        <div id="Button-Up"><img src="IMG/Up-icon.png"></div>
        <script type="text/javascript" src="JS/myScript.js"></script>
    </body>
</html>
