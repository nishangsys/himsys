<?php
session_start();
$_SESSION['user_name'];
$user_id=$_SESSION['id'];
echo $sentby=$_GET['sender'];
$status=$_SESSION['fax'];

include '../dbc.php';
include 'functions.php';
?>
 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-----script---->
   
    <ul>
    <?php
	$byy=mysql_query("SELECT * FROM users where id!='$user_id' order by full_name ") or die(mysql_error());
	
	?>
    
    <?php  while ($tk=mysql_fetch_assoc($byy)){ ?>
     <a href="?id=<?php echo $tk['id']; ?>&name=<?php echo $tk['user_name']; ?>"  style="color:#000">
    <li>
 <?php
  if($tk['fax']==2){
	 echo '<i class="fa fa-circle" aria-hidden="true" style="color:#f00"></i>
';
 }
 else{
	 	 echo '<i class="fa fa-circle" aria-hidden="true" style="color:#ccc"></i>
';
 }


 ?>
<span style="margin-left:5px; font-weight:bold; margin-top:-80px"><i class="fa fa-user " style="color:#1188aa"></i> <?php echo substr($tk['full_name'],0,30); ?></span> 
   
    <?php } ?>
    </li></a>
    
    
    </ul>
    
<!------end script------------->
