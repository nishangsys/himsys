<?php
$mysql_hostname = "localhost";
$mysql_user = "nishang";
$mysql_password = "google1234";
$mysql_database = "staffs";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die(mysql_error());
mysql_select_db($mysql_database, $bd) or die(mysql_error());

?>