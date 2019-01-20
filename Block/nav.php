<!--Navbar-->
<div id="nav">
    <div class="iraq"><img src="IMG/iraq.gif"/></div>
    <div id="M_Nav1">
        <div draggable="false" title="إظهار المعلومات الشخصية"
   onClick="showInfo()"><span class="img"><img src="IMG/user.jpg" class="user"/></span><span class="Name"><? echo $Name1; ?></span>
</div>

    </div>
    <a href="#" title="تسجيل الخروج"><div class="logout">خروج
    </div></a>
    <div id="N">
        <div class="Title"><?php echo $TiltePage; ?></div>

    </div>
    <? if($Admin=='نعم'){ ?>
    <a href="Admin" title="دخول لإدارة البريد"><div id="N_Admin">الإدارة</div></a><? } ?>
</div>