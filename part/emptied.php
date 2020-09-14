<?php
//include '../dbc.php';
$month=date('m');

$d=$month-1;

$om="0".$d;
$m1=mysql_query("UPDATE payslips set leaves='0',trans='0',research='0',others='0',rents='0',overtime='0',senior='0' where month='$d' or month='$om' ") or die(mysql_error());
$m2=mysql_query("UPDATE staffs set leaves='0',trans='0',research='0',others='0',rents='0',overtime='0',senior='0'  ") or die(mysql_error());
$m3=mysql_query("UPDATE voucher set leaves='0',trans='0',research='0',others='0',overtime='0',senior='0' where month='$d' or month='$om' ") or die(mysql_error());
echo "<script>alert('SUCCESS. You have successfully sent all Bonuses to the Bin')</script>"; 
echo '<meta http-equiv="Refresh" content="1; url=?voucher">';
?>