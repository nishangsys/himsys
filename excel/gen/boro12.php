<script type="text/javascript">
function doCalc(form) {
		

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<style>
.boxd{
	background:#1188aa;
	 padding:10px 5px; 
	 border-radius:10px 10px 10px 10px;
	 float:left; 
	 margin:10px 0px;
	  color:#fff;
	   border:1px solid#fff
}
</style>

<div class="chat_box">
<?php

 $yarea= $_GET['area']; 
      $ytable= $_GET['db_table'];
	 $ybasket= $_GET['db_basket'];
 $section=$_GET['area'];
 //bar area
if($section=='15'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	
}
//restau area
if($section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	
}
//bouaccarou area
if($section=='2'){

	$a_area='2';
	$page='../bauca/baucapage.php';	
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';

	
}
//VIP Bar or Night Club
if($section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	
	
}

?>
    

    <?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$con = mysqli_connect('localhost','nishang','google1234','hotels');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hotels"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//////////////////////////////////////////////////////////////////////////////////////////////////////
 $table=$_GET['table'];

@session_start();
	$usn=$_SESSION['user_name'];
	$ids= $_SESSION['id'];
	$ol=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),id from ". $_GET['db_basket']." where tab='$table' and status='1' and qty>0  group by id") or die(mysql_error());
	$num=1;
	
	 
	?>
    
    	<div class="chat_data">
        
        
        
       
        <table style="line-height:0.7">
  

    <table style="width:95%; background:#eee; color:#000;" border="1">
    <?PHP
	
	$xc=$con->query("SELECT * FROM ".$ybasket." where tab='$table' and status='1' and status='1'") ;
	$i=1;
	?>
    
    
    <tr style="padding:5px 0px; line-height:1.8; text-align:center; padding:5px 5px"><td>S/N</td><td>Product</td><td>Price</td><td style="width:50px">Qty</td><td style="width:50px">Add</td><td>Red.</td><td>Total</td></tr> 
    <?php
	while($fg=$xc->fetch_assoc()){
		$iddds=$fg['id']
	?>
    
    <tr style="padding:5px 0px; line-height:2; text-align:center; padding:5px 5px">
    
    <td><?php echo $i++; ?></td>
    
    <td> <a href="boro.php?delete=<?php echo $fg['product'];?>&id=<?php echo $fg['id']; ?>&tab=<?php echo $table; ?>&qty=<?php echo $fg['qty']; ?>&from=<?php echo $fg['froms']; ?>&db_basket=<?php echo $ybasket; ?>&dbtables=<?php echo $ytable; ?>&area=<?php echo $yarea; ?>" style="text-decoration:none; background:#1188aa; color:#fff; padding:3px 6px"><?php echo $thatpro=$fg['product']; ?></a></td>
    
    <td><?php echo $fg['price']; ?></td>
    
     <td><?php echo $fg['qty']; ?></td>
    
     <td><a href=javascript:popcontact('updatepro.php?pro=<?php echo $fg['id']; ?>&area=<?php echo $section; ?>') style="color:#fff; text-decoration:blink"><img src="../img/ad.png"></a></td>
     
     <td><a href=javascript:popcontact('updatepro2.php?pro=<?php echo $fg['id']; ?>&area=<?php echo $section; ?>') style="color:#fff; text-decoration:blink"><img src="../img/delete.png"></a></td>
    
    
    <td style="text-align:center"><?php echo $fg['total']; ?></td></tr>
    
   
    
      <?php } ?>
      
      <form method="post" action="" enctype="multipart/form-data" >
  
      
       <tr style="line-height:2"><td></td><td >Total Bill</td><td></td><td></td><td></td><td>
       </td><td>
       <input type="text" style="width:90px;  padding:10px 0px;" name="expamt"  onBlur="doCalc(this.form)" value="
       <?php		
			
$ren=$con->query("SELECT SUM(total) as total,tab from ".$ybasket." where tab='".$table."' and status='1'  ");
while ($rol=$ren->fetch_assoc()){ 
$tol=($rol['total']);
echo number_format($rol['total']) ."&nbsp;&nbsp;Frs";
}

?>  ">   
       </td></tr> 
     
     
     
     
      <tr style=" line-height:0.8; color:#000"><td></td><td >Discoount</td><td></td><td></td><td></td><td>
       </td><td>
       <input type="text" style="width:90px;  padding:10px 0px;" name="expamt"  onBlur="doCalc(this.form)" value="
       <?php
			 $a=$con->query("SELECT sub from ".$db_basket." where tab='".$table."' and status='1' and sub>0 GROUP BY tab") or die(mysqli_error($con));
			 while($b=$a->fetch_assoc()){
				 if(empty($b['sub'])){				 echo 0;
				 }
				 else {
				 echo $discc=$b['sub'];
				 }		 
			 }
			 ?> ">   
       </td></tr> 
       
       
          <tr style=""><td></td><td >Balance</td><td></td><td></td><td></td><td>
       </td><td >
       <input type="text" style="width:90px;  padding:10px 0px;background:#f00; color:#fff; font-weight:bold" name="expamt"  onBlur="doCalc(this.form)" value="
       <?php
			echo number_format($tol-$discc);
			 ?> ">   
       </td></tr> 
     
    </table>
      </form>
      
          <div class="boxd" style="background:#900">  <a href=javascript:popcontact('disc.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Discount.</div></a>
          
          
          
     <div class="boxd" style="background:#088389">  <a href=javascript:popcontact('rec.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Cash B4 .</div></a>
     
      <div class="boxd" style="background:#fff; border:1px solid#000">  <a href=javascript:popcontact('print.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#000; text-decoration:blink">Cash A4.</div></a>
     
      
     
     <div class="boxd" style="background:#000">  <a href=javascript:popcontact('validate.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Cash Vali. </div></a>
      
      
        
     <div class="boxd" style="background:#088389">  <a href=javascript:popcontact('crec.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Company B4 .</div></a>
      
      
     <div class="boxd" style="background:#fff; border:1px solid#000">  <a href=javascript:popcontact('comp_print.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#000; text-decoration:blink">Company A4 .</div></a>
     
     <div class="boxd" style="background:#000">  <a href=javascript:popcontact('allcomsales.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Comp Vali. </div></a>
      
      
        <div class="boxd" style="background:#088389; ">  <a href=javascript:popcontact('rrec.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Room B4 .</div></a>
        
        
      <div class="boxd" style="background:#Fff; border:1px solid#000">  <a href=javascript:popcontact('room_print.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#000; text-decoration:blink">Room A4 .</div></a>
     
     <div class="boxd" style="background:#000">  <a href=javascript:popcontact('allroomsales.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Room Vali. </div></a>
      
      
      
      
      
      
      
      
      
        <div class="boxd" style="background:#088389">  <a href=javascript:popcontact('freerec.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">DRAWINGS B4 .</div></a>
      <div class="boxd" style="background:#fff; border:1px solid#000">  <a href=javascript:popcontact('drawings.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#000; text-decoration:blink">Drawings A4 .</div></a>
     
     <div class="boxd" style="background:#000">  <a href=javascript:popcontact('free.php?roll=<?php echo $table; ?>&area=<?php echo $a_area; ?>') style="color:#fff; text-decoration:blink">Freesales Vali. </div></a>
      
      
      
      
    
     
         </a>
         </form>
        
        
        
       <?php
	   if(isset($_GET['delete'])){
	 $delete=$_GET['delete'];
		$idv=$_GET['id'];
		$tab=$_GET['tab'];
		$dqty=$_GET['qty'];
		$areast=$_GET['from'];
		
		$mbasket=$_GET['db_basket'];
		$mytable=$_GET['dbtables'];
	 $aarea=$_GET['area'];
		
		
		if($aarea=='15'){
			$serial='Bar';
		}
			
	  else if($aarea=='10'){
			$serial='Restau';
		}
			
			
		 else if($aarea=='2'){
			$serial='Bouccarau';
		}
		
		  else if($aarea=='18'){
			$serial='VIP';
		}

	
		
		
	$ses=$con->query("SELECT * FROM products where product='".$delete."' and serial='".$serial."' ");
	while($ghs=$ses->fetch_assoc()){
	$oldqty=$ghs['quatity']+$dqty;
	
		
	}
	
	 $sest=$con->query("UPDATE products SET quatity='$oldqty' where product='".$delete."' AND serial='".$serial."'  ");
	$erh=$con->query("DELETE FROM ".$ybasket." where id='".$idv."' ");

	
echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?table='.$tab.'&area='.$a_area.'&basket='.$db_basket.'&dbtables='.$db_table.'">';
	   }
	   
	   
	?>
       