<!DOSTYPE html>
<html>
    <head>
        <!-- ===== Bassics HTML5 ====== -->
        <?php $TiltePage = "إرسال رسالة جديدة";
        include("Block/icon_meta.php"); ?>
        <link type="text/css" href="CSS/MyStyle1.css" rel="stylesheet" />
        <link type="text/css" href="CSS/NAV.css" rel="stylesheet" />
        <link type="text/css" href="CSS/ResetW650.css" rel="stylesheet" />
        <link type="text/css" href="CSS/ResetW550.css" rel="stylesheet" />
        <link type="text/css" href="CSS/ResetH550W530.css" rel="stylesheet" />
        <link type="text/css" href="CSS/ResetH550W650.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            @session_start();
            $mail = $_SESSION['myMail'];
            $Name1 = $_SESSION['myName1'];
            $FullName = $_SESSION['myFullName'];
            $Depr = $_SESSION['myDepr'];
            $Admin = $_SESSION['myAdmin'];
            $Domin =$_SESSION['myDomin'];
        ?>
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
            
            <!--  View  -->
            <div id="View2">
           
                <!-- التفاصيل  -->
                <div id="Minutiae2">
                    <form action="#" method="post" id="frm">
                        <table width="100%">
                            <tr>
                            <td><label>المستلم</label></td>
                            <td> <input type="text" name="" placeholder="المستلم" title="بريد المستلم" id="mail"></td>
                            </tr>
                            <tr>
                            <td><label>الموضوع</label></td>
                            <td><input type="text" name="" placeholder="الموضوع" title="موضوع الرسالة"></td>
                            </tr>
                            <tr>
                            <td><label>نص الرسالة</label></td>
                            <td><textarea rows="12" title="نص الرسالة" placeholder="نص الرسالة"></textarea></td>
                            </tr>
                            <tr>
                            <td><label>المرفقات</label></td>
                            <td><input type="file" name="" placeholder="مرفقات" title="المرفقات"></td>
                            </tr>
                            <tr>
                            <td colspan="2">
                                <input type="submit" name="" value="إرسال" title="إرسال الرسالة" class="btn">
                                <input type="button" name="" value="حفظ كمسودة" title="حفظ كمسودة" class="btn">
                                <input type="reset" name="" value="إفراغ الخانات" title="إفراغ الخانات" class="btn">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>   
            </div>
        </div>
        <!--Footer-->
        <?php include("Block/flooder.php"); ?>
        <div id="Button-Up"><img src="IMG/Up-icon.png"></div>
        <script type="text/javascript" src="JS/myScript.js"></script>
    </body>
</html>
