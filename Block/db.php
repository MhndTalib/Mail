<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = 'root1985';
$database = 'mail';
// echo "ok";
$db = mysql_connect ($hostname,$username,$password);
if (!$db){
   die('ERROR :  ').mysql_errno().' ; '.mysql_error();
}
mysql_select_db($database,$db);
mysql_query("SET NAMES utf8;"); 
?>