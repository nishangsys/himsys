<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';;
}

else {
			 $today=date('d-m-Y');
$cvv=mysql_query("SELECT * from to_boss where date='$today'  and dept='reception'  ") or die(mysql_error());
if(mysql_num_rows($cvv)>0){
		echo "<div style='background:#f00; color:#fff; width:400px; text-align:center; padding:10px 10px; margin:auto; margin-top:120px'>Sorry Today has been closed. Carry foward Tommorow</div>";
	}
	else {
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  
}
</script>


<body>

    
    

    
    
    
    
    <h1 class="he">free drinks Distributed Products<span style="color:#Ff0"><?php echo date('F d-m-Y'); ?> </span></h1>
    
     <iframe src="whobar/BARFREE/tableedit.php" style="width:900px; height:1000px; border:NONE" ></iframe> 
   
     <?php   	   
$ress=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),id,section from basket where tab='free' and status='2' and date='$today' and authorize='' group by id order by id DESC   ");
$num=1;

	   ?>
     
            
            
        
         
         <?php 
	} } ?><div class="clear"></div><br />


</form>
</tr>

<?php

if(isset($_POST['update'])){
	$date=date('d-m-Y');
	$month=date('m');
	echo $by=$_POST['hname'];exit;
	$time=date('h:i:s');
	$paidto=$_SESSION['user_name'];
	
	
			
			
		  $update_basket12 =mysql_query  ("UPDATE `basket` SET `authorize`= '$by' WHERE tab='free' and status='2' AND area='15'  ") or die(mysql_error());

 echo "<script>alert('
 SUCCESS.Transaction Save ')</script>";
 echo '<meta http-equiv="Refresh" content="0; url= ../thank.php">';
			
}

?>