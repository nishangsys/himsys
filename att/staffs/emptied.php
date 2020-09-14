<?php
//include '../dbc.php';
$m=mysql_query("UPDATE staffs set leaves='0',trans='0',research='0',others='0',rents='0',overtime='0',senior='0' ") or die(mysql_error());
echo "<script>alert('SUCCESS. You have successfully sent all Bonuses to the Bin')</script>"; 
echo '<meta http-equiv="Refresh" content="1; url=staffpage.php?voucher">';
?>