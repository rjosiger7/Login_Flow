<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_User_Inforamtion = "localhost";
$database_User_Inforamtion = "user_registration";
$username_User_Inforamtion = "roman";
$password_User_Inforamtion = "roman";
$User_Inforamtion = mysql_pconnect($hostname_User_Inforamtion, $username_User_Inforamtion, $password_User_Inforamtion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>