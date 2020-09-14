<?php
require_once '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
		
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipts</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="right">
<div class="clear"></div>
   <iframe src="../libchart/stats/VerticalBarChartstats.php" style="width:1000px; height:1100px; border:none"></iframe>

</div>

  
</body>
</html>
<?php } }?>


