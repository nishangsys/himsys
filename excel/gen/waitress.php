

<?PHP


@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}
$level=$_SESSION['banned'];

$section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	$folder="bar";
	
}
else if($section==20 or $section==10){
		 $dashbd;
		$section;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	$folder="restau";
	
}

else if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	$folder="bauca";
	
}
else if($section=='20' or $section=='18'){
		 echo $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
	
}

 $area=$_GET['area'];
?>
<!DOCTYPE html>
<html>
<script type = "text/javascript" >
function disableBackButton()
{
window.history.forward();
}
setTimeout("disableBackButton()", 0);
</script>	
<head>
	<title>NISHANG SOFTWARES PRODUCTS</title>
		<meta charset="utf-8">
        <!---
	        <META HTTP-EQUIV="REFRESH" CONTENT="15">
-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="../style.css" rel="stylesheet" type="text/css" />
          <link href="styless.css" rel="stylesheet" type="text/css" />
        <style>
		.subcontain{
			

background-image:url(vg.jpg);
background-position: center bottom, left top;
background-repeat: no-repeat;
}
		
		th{
			background:#1188aa;
			color:#fff;
			text-align:center;
		}
			
#chat_box {
	width:100%; 
	height:auto;
	overflow:hidden;
}
#chat_data {
	width:100%; 
	padding:5px; 
	margin-bottom:5px;
	border-bottom:1px solid silver;
	font-weight:bold;
}

.bo1{
	float:left;
	width:300px;
	height:300px;
	border:1px solid#000;
}
.bo2{
	float:left;
	width:95%;
	height:300px;
	border:1px solid#000;
	background:#eee;
	z-index:3;
}
#chat{
	border:1px dashed#000;
	padding:15px 15px;
	height:auto;
	float:right;
	margin-left:0px;
	background:#999;	
	overflow:hidden;
	width:50%;
	
}
.hea{
	width:100%;
	height:auto;
	padding:10px 0px;
	background:#333;
	overflow:hidden;
}
		</style>
       
<script type="text/javascript">
function doCalc(form) {
form.left.value = ((parseInt(form.qty.value)-parseInt(form.bought.value)));

  form.total.value = ((parseInt(form.priz.value)*parseInt(form.bought.value)));

}
</script>
        
		<!--//webfonts-->
</head>
    <script src="tabcontent.js" type="text/javascript"></script>

<script type="text/javascript" src="../calendar.js"></script>

<body >


<?php include 'restauhead.php'; ?>

	<div class="contain" style="width:95%; height:auto; overflow:hidden ">
   <div class="subcontain" style="background:<?php 
   
   if($section=='20' or $section=='15'){
	    echo "url(../img/vg.jpg)";
}
if($section=='20' or $section=='10'){		
 echo "url(../img/bgg.JPG)";	
}
if($section=='20' or $section=='2'){
 echo "url(../img/vg.jpg)";		
}
if($section=='20' or $section=='18'){		
 echo "url(../img/vg.jpg)";		
}      ?>">
  
    <div class="restau_box"  >
    
     <h1 style="background:#000; color:#fff; font-family:Georgia, 'Times New Roman', Times, serif; font-size:25px;height:auto; overflow:hidden"><?php echo $namess; ?> Dashboard</h1>
   
 <div class="tables" style="width:43%; height:330px;background:#000; height:auto; overflow:hidden">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1" style="background:#f00; color:#fff; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/drink.png">  Drinks </a></li>
            
            <li><a href="#view2" style="background:#1188aa; color:#fff; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/apple.png"> Restau Food </a></li>
            
                        <li><a href="#view3" style="background:#ff0; color:#009; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/coins1.png"> Ind. Sales </a></li>
         
                  

        </ul>
        <div class="tabcontents" >
            <div id="view1" style="overflow:hidden">
               <div style="background:#fff; color:#f00; border-radius:10px 10px 0px 0px; border:1px solid#000; padding:10px 10px;"><a href=javascript:popcontact('pricelist.php?area=<?php echo $a_area; ?>') style="color:#f00; font-size:16px; text-align:center">Click here to see all product prices</a></div>
            
         <?php
			 $dfh=mysql_query("SELECT * FROM stocks where quatity>0 and product!='product' group by category") or die(mysql_error()) ;
			 while($cv=mysql_fetch_assoc($dfh)){
			 
             
             ?>
             
        
             <div class="foods" style="background:#000; border-right:1px dashed#fff"><a href="?tables=<?php echo $thistab=$_GET['tables']; ?>&area=<?php echo $thisarea=$_GET['area']; ?>&type=<?php echo $cv['category']; ?>" style="color:#fff"><?php echo $cv['category']; ?></div>
             
            
             <?php } ?>
  
  
  <div class="clear"></div>           
<?php
/*
//echo "<script>alert('Yes')";
		echo $typs=$_GET['type'];
	$se=$con->query("SELECT * FROM foods where category='".$typs."' ");
	while($gh=$se->fetch_assoc()){
*/

	if(isset($_GET['type'])){
	 $typs=$_GET['type'];

	$se=mysql_query("SELECT * FROM products where category='".$typs."' and quatity>0") or die(mysql_error());
	while($gh=mysql_fetch_assoc($se)){
	?>
    
    
    <a href="<?php $_SERVER['_SELF']; ?>?barcode1=<?php  echo $gh['product'] ?>&tables=<?php echo $table=$_GET['tables']; ?>&type=<?php echo $types=$_GET['type']; ?>&db_table=<?php echo $db_table; ?>&db_basket=<?php echo $db_basket; ?>&area=<?php echo $area; ?>" style="color:#fff; font-weight:bold">
    <div style="background:#088389; border:1px solid#000; margin:10px 10px; float:left; padding:10px 10px">
    <?php echo $gh['product']; ?>
    </div>
    
    </a> 
       
    <?php } } ?>  
        




<?php
if(isset($_GET['barcode1'])){
	
	
 $code=$_GET['barcode1'];

  $pk=mysql_query("SELECT * FROM products where quatity>0  and  product='$code' and serial='".$serial."' ");
 while($ac=mysql_fetch_assoc($pk)){
			 $thepro=$ac['product'];
			$aviail=$ac['quatity'];
			$tabs=$_GET['tables'];
			$cp=$ac['month'];
			$dbprice=$ac['price'];
			$oserial=$ac['serial'];
			$profit=$ac['price']-$ac['month'];
			$newqty=$ac['quatity']-1;
			$category=$ac['category'];
			$le;
			
			
		}
 $date=date('d-m-Y');
  $day=date('d');
   $month=date('m');
    $year=date('Y');
 
 //db total
  $db_tot=$_POST['dbtot'];
   $total=$priz*$qty;
   //new total===>dbtotal-totalnow
  $new_total=$db_tot-$total;
 //check if the total is positive that is if stocks are left
 if($qty>$avail){
	 	echo "<script>alert('Error .You have run out of stocks so you cannot sell more ".$avail." now ')</script>";
			

 }
 
 else {

 $sesth=mysql_query("UPDATE products SET quatity='$newqty' where product='".$thepro."' and serial='".$serial."' LIMIT 1 ");
		   
		     	$update=mysql_query("insert into ".$db_basket." set product='$thepro',category='$category',price='$dbprice',
	total='$dbprice',qty='1',cp='$cp',status='1',tab='$tabs',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='bar'") or die(mysql_error()) ;


  
  

	/*echo "<script>alert('Success. You have sold ".$qty." units of ".$product." to table ".$table."')</script>";*/
	echo "<div class='clear'></div>";
	echo "<h1 style='background:#000; color:#fff; padding:10px 10px; text-align:center'>Success. You have sold ".$qty." units of ".$product." to table ".$table."</h1>";
	
   // echo "Form Submitted succesfully";
}
}

?>
</form>
        
        </table>
        </form>
            </div>
            
        
            
            
            
            <!------------------------------------------------------------------------------------------------------------------------------------INDIVIDAUL SLAES---------------------->
            
            
            
            <div id="view3">
                  <div style="background:#63C; color:#fff; border-radius:10px 10px 0px 0px; padding:10px 10px; float:left"><a href=javascript:popcontact('pricelist.php?area=<?php echo $a_area; ?>') style="color:#fff; font-size:16px; text-align:center">Click here to see all prices</a>| <div class="name" style="float:right; margin-top:-1px">
       <a href=javascript:popcontact('allsales.php?area=<?php echo $a_area; ?>') style="color:#f00; background:#FF0; padding:5px 25px; text-align:center;">View Sales for today and close</a></div><br></div>
      
                   <form method="post" action="" name="my_form">
        <table>
       
       <div class="clear"></div>
       
       <?php
			 $dfh=mysql_query("SELECT * FROM stocks where quatity>0 and product!='product' group by category") or die(mysql_error()) ;
			 while($cv=mysql_fetch_assoc($dfh)){
			 
             
             ?>
             
        
             <div class="foods"><a href="?table=<?php echo $thistab=$_GET['table']; ?>&area=<?php echo $thisarea=$_GET['area']; ?>&type=<?php echo $cv['category']; ?>" style="color:#fff"><?php echo $cv['category']; ?></div>
             
            
             <?php } ?>
  
  
  <div class="clear"></div>           
<?php
/*
//echo "<script>alert('Yes')";
		echo $typs=$_GET['type'];
	$se=$con->query("SELECT * FROM foods where category='".$typs."' ");
	while($gh=$se->fetch_assoc()){
*/

	if(isset($_GET['type'])){
	 $typs=$_GET['type'];

	$se=mysql_query("SELECT * FROM products where category='".$typs."' ") or die(mysql_error());
	while($gh=mysql_fetch_assoc($se)){
	?>
    
    
    <a href="<?php $_SERVER['_SELF']; ?>?look=<?php  echo $gh['product'] ?>&table=<?php echo $table=$_GET['tables']; ?>&type=<?php echo $types=$_GET['type']; ?>&db_table=<?php echo $db_table; ?>&db_basket=<?php echo $db_basket; ?>&area=<?php echo $area; ?>" style="color:#fff; font-weight:bold">
    <div style="background:#C00; border:1px solid#000; margin:10px 10px; float:left; padding:10px 10px">
    <?php echo $gh['product']; ?>
    </div>
    
    </a> 
       
    <?php } } ?>  
        




<?php

if(isset($_GET['look'])){

 $txtbarcode=$_GET['look'];



$o=mysql_query("SELECT * from products where product='".$txtbarcode."'  and products.serial='$serial' and quatity>0 ");
//chproductseck if produc exits
if(mysql_num_rows($o)<1){
		 	echo "<script>alert('Product Out of Stock')</script>";	
			
}

else{
	
while($row=mysql_fetch_array($o))


{ 
 $priz=$row['price'];
 $avails=$_POST['quatity']; 
$products=$row['product'];

$rem=mysql_query("SELECT * from stocks where product = '".$products."' ");
while($pr=mysql_fetch_assoc($rem)){
	$cp=$pr['month'];
}

 
 $qty=1;
 $total=$priz*$qty;
 $salesman=$_SESSION['user_name'];
 $profit=($priz-$cp)*$qty;
 $remstocks=$avail-$qty;
 $date=date('d-m-Y');
  $day=date('d');
   $month=date('m');
    $year=date('Y');

?>
</table>
</form>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<table border="1" style="width:100%; margin:auto">
<td><?php  $product=$row['product']; ?></td>
    <td><?php $avail=$row['quatity']; ?></td>
    <td><?php  $cp; ?></td>
    <td><?php $bought='1'; ?></td>
    <td><?php $stocks=$avail-$bought; ?></td>


    
   
    </tr>
    <?PHP
echo "<span style='color:#fff; background:#000; font-size:19px; padding:10px 10px; font-weight:bold'>You have successfully Sold 1 Units of <span style='color:#ff0;'>$product</span></span>";
?>
    
    <?php
	
	$updates=mysql_query("UPDATE products set quatity='$stocks' where product='$product' and serial='".$serial."'") or die(mysql_error());
	
       $query = mysql_query("insert into ".$db_basket." set product='$product',price='$priz',
	total='$total',qty='$qty',cp='$cp',status='1',tab='all',ids='all',section='Bar',closing_stocks='$stocks',area='15',profit='$profit',
date='$date',day='$day',month='$month',year='$year',opening_stocks='$avail'") ;

	?>
    

<?php 
}



}




 }?>

</table>








</form>
        
        </table>
        </form>
            </div>
            
                      <!----------------------------------------------------------------------------------------END INDIVIDUAL SA;\LES HERE ---->
  
            
            
            
            
            
            
            
            <!-------------------------------------------------------------------------BAR FREE  STARTS HERE ----------------------------------------------------------------------------->
            
            
           
       
       
       
       
       
       
       
       
       
       
       
       
       
       
            
            
             
 

            
            
            
            <!-------------------------------------------------------------------------RESTAU STARTS HERE ----------------------------------------------------------------------------->
            <div id="view2">
            
             
 
<table >

             <div class="name"><a href=javascript:popcontact('fpricelist.php?area=<?php echo $a_area; ?>') style="color:#1188aa; text-align:center">Click here to see all foods prices</a></div>
             <?php
			 $dfh=mysql_query("SELECT * FROM foods where product!='product' group by serial") or die(mysql_error()) ;
			 while($cv=mysql_fetch_assoc($dfh)){
			 
             
             ?>
             
        
             <div class="foods"><a href="?tables=<?php echo $thistab=$_GET['tables']; ?>&area=<?php echo $thisarea=$_GET['area']; ?>&type=<?php echo $cv['serial']; ?>" style="color:#fff"><?php echo $cv['serial']; ?></div>
             
            
             <?php } ?>
  
  
  <div class="clear"></div>           
<?php
/*
//echo "<script>alert('Yes')";
		echo $typs=$_GET['type'];
	$se=$con->query("SELECT * FROM foods where category='".$typs."' ");
	while($gh=$se->fetch_assoc()){
*/

	if(isset($_GET['type'])){
		echo $typs=$_GET['type'];

	$se=mysql_query("SELECT * FROM foods where serial='".$typs."' order by product") or die(mysql_error());
	while($gh=mysql_fetch_assoc($se)){
	?>
    
    
    <a href="<?php $_SERVER['_SELF']; ?>?product=<?php  echo $gh['pro_id'] ?>&tables=<?php echo $table=$_GET['tables']; ?>&type=<?php echo $types=$_GET['type']; ?>&db_table=<?php echo $db_table; ?>&db_basket=<?php echo $db_basket; ?>&area=<?php echo $area; ?>" style="color:#fff; font-weight:bold">
    <div style="background:#C00; border:1px solid#000; margin:10px 10px; float:left; padding:10px 10px">
    <?php echo $gh['product']; ?>
    </div>
    
    </a> 
       
    <?php } } ?>  
        
 
 
  <?php
	//select thta product from the db
	if(isset($_GET['product'])){
		$product=$_GET['product'];
		$from=$_GET['sections'];
		$table=$_GET['tables'];
		$db_bask=$_GET['db_basket'];
		$db_tab=$_GET['db_table'];
		$t_type=$_GET['type'];
		$yarea=$_GET['area'];
		$pk=$con->query("SELECT * FROM foods where pro_id='$product'");
		while($ac=$pk->fetch_assoc()){
		 $thepro=$ac['product'];
			$pro_ids=$ac['pro_id'];
			
			$dbprice=$ac['price'];
			
			
		}
	
		 $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   
		   //update my products
		   
		  
		   
		   	 $updateg=mysql_query("insert into ".$db_bask." set product='$thepro',category='restau',price='$dbprice',
	total='$dbprice',qty='1',cp='0',status='1',tab='$table',ids='',section='".$serial."',opening_stocks='$avail',closing_stocks='$remproducts',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='restau'") or die(mysql_error());


		echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?tables='.$table.'&area='.$area.'&type='.$t_type.'">';
	}
	
?>

        </table>
                   
            </div>
         
        
      
   </div>
         </div>
       
       
     
   <!----------------------->
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','boro.php?table=<?php echo $table=$_GET['tables']; ?>&area=<?php echo $section; ?>&db_basket=<?php echo $db_basket; ?>&db_table=<?php echo $db_table; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    
    
    
    
    <body onload="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


    
        </div>
     </div>
   </div>
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php   ?>