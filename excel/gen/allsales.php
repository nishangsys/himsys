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

    <?php
	$section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	
}
if($section=='20' or $section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	
}

if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	
}
if($section=='20' or $section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
}
	?>
    

    
    
    
    
    <h1 class="he">Sales Records of Drinks without Tables for <span style="color:#Ff0"><?php echo date('F d-m-Y'); ?> </span></h1>
   
     <?php   	   
$ress=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),id,section from ".$db_basket." where tab='all' and status!='2'  group by id order by id DESC   ");
$num=1;

	   ?>
       
       <table style="line-height:1.9">
				<tr style="background:#1188aa; color:#fff; padding:10px 10px"><td>S/N</td><td>Item</td><td>Price</td><td>Qty</td><td>TC</td><td>Back to Stock</td></tr>
				
        <?php   while ($getres=mysql_fetch_assoc($ress)){ ?>
        <tr>
        	<td style="width:20px"><?php echo $num++; ?></td>
            <td><?php echo $getres['product']; ?></td>
                  
            <td><?php echo $getres['price']; ?> </td>
             <td><?php echo $getres['SUM(qty)']; ?> </td>              
            <td><?php echo $getres['SUM(total)']; ?> </td>
            
            
          <td><a href="delall.php?hist_id=<?php echo $getres['id']; ?>&section=<?php echo $getres['section']; ?>&area=<?php echo $section; ?> " onClick="return confirm('Are you Sure you want to Delete  <?php echo $getres['product']; ?>?');" >
        Back to Stock</a></td>|
        
             
        
        
             
        </tr>
        <?php } ?>
        </tr>
        
         <tr>
        	<td style="width:20px"></td>
            <td>TOTAL</td>
                  
            <td> </td>
             <td> </td>              
            <td></td>
            
            
          <td style="background:#f00; color:#fff">
          <?PHP $mk=mysql_query("SELECT  SUM(total) as totals from ".$db_basket." where tab='all' and status!='2'  group by tab  ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		
	}
	?></td>|
        </table>

</form>


</tr>
         
         <?php 
	} } ?><div class="clear"></div><br />

<a href="<?php $_SEVER['_SELF']; ?>?date=<?php echo date('d-m-Y'); ?>&area=<?php echo $section; ?>" style="background:#1188aa; color:#fff; padding:10px 10px; margin-top:20px">Summarize and Leave</a>

<?php

if(isset($_GET['date'])){
	$date=$_GET['date'];
	$month=date('m');
	$year=date('Y');
	$time=date('h:i:s');
	$paidto=$_SESSION['user_name'];
	
	$section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	
}
if($section=='20' or $section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	
}

if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	
}
if($section=='20' or $section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
}
///////////////////////////
	
	$r=mysql_query("SELECT product,category,SUM(qty),SUM(profit),price,SUM(total),id,section from ".$db_basket." where tab='all' and status!='2'  group by tab  ");
	while($bar=mysql_fetch_assoc($r)){
		$prod=$bar['product'];
		$profi=$bar['SUM(profit)'];
		$totaa=$bar['SUM(total)'];
	}
	
	//daily records
	$daily=mysql_query("INSERT INTO daily set cust_id='".$serial."',room='all',amt='".$profi."',reason='".$prod."',
			rec='".$totaa."',date='$date',month='$month',year='$year',area='".$section."',time='$time',paidto='$paidto',purpose='bar/restau' ,idds='".$section."'") or die(mysql_error()) ;
			
			
		  $update_basket12 =mysql_query  ("UPDATE ".$db_basket." SET `status`= '2' WHERE tab='all' and status!='2' ") or die(mysql_error());

 echo "<script>alert('
 SUCCESS.Transaction Save ')</script>";
 echo '<meta http-equiv="Refresh" content="0; url= ../thank.php">';
			
}

?>