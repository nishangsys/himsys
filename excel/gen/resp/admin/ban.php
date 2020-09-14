<?php

require_once '../functions/functions.php';
session_start();


	
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		echo "<script>window.open('index.php?names','_self')</script>";
		
			
	}
	else {
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipts</title>
<link href="../reception/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="right">
    <h1>All Users</h1>
  <table>
    <?php
	
   $user="select * from users where approved='2' order by id DESC ";   	
	$run=mysql_query ($user) or die ('could not updated:'.mysql_error());	
  	$num=1;
	
   ?>
    <tr style="background:#CCC">
    <td>S/N</td>
    <td>User Name</td>
    <td>Ban</td>
    
    </tr>
    <?php 
   while($see=mysql_fetch_assoc($run)){
		
	?>
   <tr>
   <td><?php echo $num++; ?></td>
    <td><?php echo $see['user_name']; ?></td>    
    
    <td><a href="deleteuser.php?user=<?php echo $see['user_name']; ?>" onclick="return confirm('Are you Sure you want to Ban this user?');"> <i class="fa fa-user-times"></i> Ban User</a></td>  
    </tr>
    
    <?php } ?>
    </table>
    <h1>Banned Users</h1>
    <table>
    <?php 
	$banned="select * from users where approved='0'";
	$run = mysql_query($banned) or die(mysql_error());
	$i=1;
	?>
   <tr style="background:#CCC">
    <td>S/N</td>
    <td>User Name</td>
    <td>Status</td>
    
    </tr>
    <?php  while ($all=mysql_fetch_array($run)) {?></td>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $all['user_name']; ?></td>
    <td>Banned</td>
    </tr>
    <?php } ?>
    </table>
    
  <?php }  ?></div>
</body>
</html>



