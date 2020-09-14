<?php
//include '../dbc.php';
$m=mysql_query("UPDATE payslips set pre_paid='0',others_exp='0'") or die(mysql_error());
echo "<script>alert('SUCCESS. You have successfully sent all Deductions to the Bin')</script>"; 
echo '<meta http-equiv="Refresh" content="1; url=staffpage.php?voucher">';
?>