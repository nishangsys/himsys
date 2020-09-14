<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();
$_SESSION['table']=$_GET['id'];;
$today=date('d-m-Y');

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
		$roll=$_GET['id'];
		
		
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

<script type="text/javascript">
function doCalc(form) {
		    form.bal.value = (((parseInt(form.totbill.value)- parseInt(form.totpaid.value))));

	    

}
</script>

<body>
<div style="width:90%; background:#eee; margin:auto; border:1px outset#00F; overflow:hidden; ">
    
    
<?PHP
  $r=mysql_query("SELECT * FROM finances where status='1'") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
  ?>

  <Div style="background:#1188AA; border:1PX solid#000; padding:10px 10px;  margin:0PX 0PX; float:left; color:#666; border:1px solid#000"> 
 
 
 <a href="?go=<?php echo $row['room']; ?>&table=<?php echo $_SESSION['table']; ; ?><?php echo $_GET['table']; ; ?>&your=<?php echo $idf=$row['yourid']; ?>&area=<?php echo $_GET['area']; ; ?><?php echo $_GET['sec']; ; ?>" style="color:#fff; font-size:18px; text-decoration:none"> <i class="fa fa-home fa-5x"></i>Room <?php echo $row['room']; ?> </a>
 
 </Div>
 
 <?php } ?>
 <?PHP
 if(isset($_GET['go'])){
	 
	 $r=mysql_query("SELECT * FROM finances where yourid='".$_GET['your']."' ") or die(mysql_error());
  while($rowm=mysql_fetch_assoc($r)){
	  $name=$rowm['name'];
  }
	 
	 $comp=$_GET['go'];
	 $tabl=$_GET['table'];
	 $your=$_GET['your'];
	  $section=$_GET['sec'];
	    $section=$_GET['area'];
	 //bar area
if($section=='15'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	
}

if($section=='9'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	
}
//restau area

else if($section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	
}
//bouaccarou area
else if($section=='2'){

	$a_area='2';
	$page='../bauca/baucapage.php';	
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';

	
}
//VIP Bar or Night Club
else if($section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../restau/restaupage.php';
	
	$db_table='other_tables';
	$serial='Bouccarau';
	$db_basket='other_basket';
	
}
	 $v=mysql_query("SELECT * FROM ".$db_basket." where tab='$tabl' ") or die(mysql_error()); 
	 
	
 ?>
    
    <div class="clear"></div>
    
    <br />
    <h1 class="he" style="margin-top:-10px; text-align:center">Room <?php echo $comp; ?>  Bills Today <span style="color:#Ff0"></span></h1>
    <form method="post" action="">
    
    <?php
	 
	 $ress=mysql_query("SELECT product,category,tab,time,SUM(qty),price,SUM(total),id,section,sub from ".$db_basket." where   tab='$tabl' and status!='2' and date='$today' group by id order by id DESC   ");
$num=1;
	?>
      
       <table style="line-height:1.9; margin-top:-30px">
				<tr style="background:#1188aa; color:#fff; padding:10px 10px"><td>S/N</td><td>Item</td><td>Room Number</td><td>Price</td><td>Qty</td><td>TC</td><td>Time</td><td>Back to Stock</td></tr>
				
        <?php   while ($getres=mysql_fetch_assoc($ress)){ ?>
        <tr>
        	<td style="width:20px"><?php echo $num++; ?></td>
            <td><?php echo $getres['product']; ?></td>
             <td style="color:#F00"><?php echo $_GET['go'];  ?></td>
                  
            <td><?php echo $getres['price']; ?> </td>
             <td><?php echo $getres['SUM(qty)']; ?> </td>              
            <td><?php echo $getres['SUM(total)']; ?> </td>
              <td><?php echo $getres['time']; ?> </td>
            
            
          <td><a href="delall13.php?hist_id=<?php echo $getres['id']; ?>&section=<?php echo $getres['section']; ?> &comp=<?php echo $_GET['go'];  ?>&table=<?php echo $_GET['table'];  ?>" onClick="return confirm('Are you Sure you want to Delete  <?php echo $getres['product']; ?>?');" >
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
          <?PHP $mk=mysql_query("SELECT  SUM(total),sub as totals from ".$db_table." where  tab='$tabl' and   status!='2' group by ids  ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		$discc=$prodh['sub'];
		
	}
	?></td>
    
    
    <table>
   
      <tr><td>Customer's Name</td><td>
    <input type="text" name="company" value="<?php echo $name;  ?>"  onBlur="doCalc(this.form)" readonly="readonly" /></td></tr>
    <tr><td>Room Number</td><td>
    <input type="text" name="company" value="<?php echo $_GET['go'];  ?>"  onBlur="doCalc(this.form)" readonly="readonly" /></td></tr>
    
    <tr><td>Amount Discounted</td><td><input type="text" name="discount" value=" <?php $res1=mysql_query("SELECT * from ".$db_basket." where tab='".$_GET['table']."' and status='3'  GROUP BY tab  ") or die(mysql_error());
while ($rob=mysql_fetch_assoc($res1)){ 
echo $disc=$rob['sub'];
}
?>" class="input" readonly="readonly"  /></td></tr>
                      

    <tr><td>Total Bill</td><td>
    <input type="text" name="totbill" value="<?php $result=mysql_query("SELECT SUM(total) as total,tab from ".$db_basket." where tab='".$_GET['table']."' and status='3'   GROUP BY tab  ");
while ($row=mysql_fetch_assoc($result)){ 
echo $total=$row['total'];
}
?>"  onBlur="doCalc(this.form)" readonly="readonly" /></td></tr>

<tr><td>Amount Paid</td><td>
    <input type="text" name="totpaid"  onBlur="doCalc(this.form)"  /></td></tr>

<tr><td>Balance Due</td><td>
    <input type="text" name="bal"   style="background:#C30; color:#fff" required readonly   /></td></tr>
<tr><td></td><td>
    <button type="submit" name="date">SAVE AND LEAVE</button></td></tr>
    </table>
   </form>

</table>

<?php

if(isset($_POST['date'])){
	$date=date('d-m-Y');
	 $compname=$comp;
	$totbill=$_POST['totbill'];
	$totpaid=$_POST['totpaid'];
	$bal=$_POST['totbill']-$_POST['totpaid'];
	$month=date('m');
	$year=date('Y');
	$time=date('h:i:s');
	$paidto=$_SESSION['user_name'];
	
	if($bal<0){
		echo "<script>alert('ERROR. Negative Balalnce of $bal')</script>";
	}
	else {
	
	$r=mysql_query("SELECT product,category,SUM(qty),SUM(profit),price,SUM(total),id,tab,section from ".$db_basket." where tab='$tabl'   and status!='2'  and date='$today' group by tab ");
	while($bar=mysql_fetch_assoc($r)){
		$prod=$bar['product'];
		 $profi=$bar['SUM(profit)'];
		$totaa=$bar['SUM(total)'];
		$company=$bar['tab'];
		$qtyy=$bar['SUM(qty)'];
	}
				
		
	 $update_split = mysql_query("UPDATE `splits` SET `status`= '2' WHERE sp='$tabl' and area='".$_GET['area']."' ") ;	
	//daily records
	$daily=mysql_query("INSERT INTO daily set cust_id='$your',room='$comp',amt='".$profi."',reason='transfer payments',total='$totbill',			rec='$totpaid',date='$date',month='$month',year='$year',area='".$section."',time='$time',paidto='$paidto',owed='$bal',purpose='".$serial."  bills' ,idds='".$section."',staffname='$name',qty='$qtyy'") or die(mysql_error());
			

		  $update_basket12 =mysql_query  ("UPDATE ".$db_basket." SET `status`= '2',tab='$comp',ids='$your' WHERE tab='$tabl'  and status!='2'   ") or die(mysql_error());
		   $ol=mysql_query("UPDATE ".$db_table." SET status='2' where num='$tabl' and status='3'") or die(mysql_error());
 echo "<script>alert('
 SUCCESS.Transaction Save ')</script>";
 echo '<meta http-equiv="Refresh" content="0; url= ../thank.php">';
	}}}}}

	

?>
</div>