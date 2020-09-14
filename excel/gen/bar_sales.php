

<?PHP


@session_start();

if(!isset($_SESSION['user_name'])){
	$user=$_SESSION['user_name'];
echo '<meta http-equiv="Refresh" content="1; url=../../login.php">';

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
if($section=='20' or $section=='9'){
 $section;
	$a_area='9';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar Waitress';
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
if($section==9){
	$sta=1;
}
else {
$sta=3;
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
         <link href="../reception/style.css" rel="stylesheet" type="text/css" />
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

	<div class="contain" style="width:95%; height:1200px; overflow:hidden ">
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
   
 <div class="tables" style="width:43%; height:330px;background:#000; height:auto; overflow:hidden">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1" style="background:#f00; color:#fff; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/drink.png">  Drinks </a></li>
            
            <li><a href="#view2" style="background:#1188aa; color:#fff; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/apple.png"> Restau Food </a></li>
         
                        <li><a href="#view3" style="background:#ff0; color:#009; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><img src="../img/coins1.png"> Fridge </a></li>
         
           

        </ul>
        <div class="tabcontents" >
            <div id="view1" style="overflow:hidden">
               <div style="background:#f00; color:#fFF; border-radius:10px 10px 0px 0px; border:1px solid#000; padding:10px 5px;"><a href=javascript:popcontact('pricelist.php?area=<?php echo $a_area; ?>') style="color:#fFF; font-size:16px; text-align:center">Click here to see all product prices | | HOT DRINKS <IMG src="../img/drink.png"></a></div>
            
         <?php
			 $dfh=mysql_query("SELECT * FROM stocks where quatity>0 and product!='product' group by category") or die(mysql_error()) ;
			 while($cv=mysql_fetch_assoc($dfh)){
			 
             
             ?>
             
        
             <div class="foods" style="background:#000; border-right:1px dashed#fff; "><a href="?tables=<?php echo $thistab=$_GET['tables']; ?>&area=<?php echo $thisarea=$_GET['area']; ?>&type=<?php echo $cv['category']; ?>&serial=<?php echo $folder; ?>" style="color:#fff"><?php echo $cv['category']; ?></div>
             
            
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

	$se=mysql_query("SELECT * FROM products where category='".$typs."' and quatity>0 and serial='".$folder."'  ") or die(mysql_error());
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
  
    $time1=date('Gi');		   
		   $see=date('d-m-Y');
		   
		   
$C=mysql_query("SELECT * FROM overtime where id!='1' order by id DESC LIMIT 1") or die(mysql_error());
		    while($r=mysql_fetch_assoc($C)){
				echo $TY=$r['time'];
				
			}	
		  
		      
		   if($time1>=0001 and $time1<=$TY){
 $date=date("d-m-Y", strtotime( '-1 days' ) ); 
		   }
		   else {
		   $date=date('d-m-Y');	  
		   }
		 
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
		   
		     	$update=mysql_query("insert into ".$db_basket." set product='$thepro',category='hot',price='$dbprice',
	total='$dbprice',qty='1',cp='$cp',status='$sta',tab='$tabs',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',agent='$user',
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
            
        
            
            
            
            <!------------------------------------------------------------------------------------------------------------------------------------FRIDGE SLAES---------------------->
            
            
            
            <div id="view3">
                 <div style="background:#ff0; color:#000; border-radius:10px 10px 0px 0px; border:1px solid#000; padding:10px 10px;"><a href=javascript:popcontact('pricelist.php?area=<?php echo $a_area; ?>') style="color:#000; font-size:16px; text-align:center">Click here to see all product prices || COLD DRINKS <IMG src="../img/remote.png"></a></div>
            
         <?php
			 $dfh=mysql_query("SELECT * FROM stocks where quatity>0 and product!='product' group by category") or die(mysql_error()) ;
			 while($cv=mysql_fetch_assoc($dfh)){
			 
             
             ?>
             
        
             <div class="foods" style="background:#000; border-right:1px dashed#fff; padding:10px 15px"><a href="?tables=<?php echo $thistab=$_GET['tables']; ?>&area=<?php echo $thisarea=$_GET['area']; ?>&type=<?php echo $cv['category']; ?>" style="color:#fff"><?php echo $cv['category']; ?></div>
             
            
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

	$se=mysql_query("SELECT * FROM products where category='".$typs."' and quatity>0 and serial='".$folder."'") or die(mysql_error());
	while($gh=mysql_fetch_assoc($se)){
	?>
    
    
    <a href="<?php $_SERVER['_SELF']; ?>?barcode2=<?php  echo $gh['product'] ?>&tables=<?php echo $table=$_GET['tables']; ?>&type=<?php echo $types=$_GET['type']; ?>&db_table=<?php echo $db_table; ?>&db_basket=<?php echo $db_basket; ?>&area=<?php echo $area; ?>" style="color:#fff; font-weight:bold">
    <div style="background:#088389; border:1px solid#000; margin:10px 10px; float:left; padding:10px 10px">
    <?php echo $gh['product']; ?>
    </div>
    
    </a> 
       
    <?php } } ?>  
        




<?php
if(isset($_GET['barcode2'])){
	
	
 $code=$_GET['barcode2'];

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
  
    $time1=date('Gi');		   
		   $see=date('d-m-Y');
		   
		   
$C=mysql_query("SELECT * FROM overtime where id!='1' order by id DESC LIMIT 1") or die(mysql_error());
		    while($r=mysql_fetch_assoc($C)){
				echo $TY=$r['time'];
				
			}	
		  
		      
		   if($time1>=100 and $time1<=$TY){
 $date=date("d-m-Y", strtotime( '-1 days' ) ); 
		   }
		   else {
		   $date=date('d-m-Y');	  
		   }
		 
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
		   
		     	$update=mysql_query("insert into ".$db_basket." set product='$thepro',category='cold',price='$dbprice',
	total='$dbprice',qty='1',cp='$cp',status='$sta',tab='$tabs',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',agent='$user',
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
            
                      <!----------------------------------------------------------------------------------------END INDIVIDUAL SA;\LES HERE ---->
  
            
            
            
            
            
            
       
       
       
       
       
       
       
       
       
       
       
       
            
            
             
 

            
            
            
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
	
		 
    $time1=date('Gi');		   
		   $see=date('d-m-Y');
		   
		   
$C=mysql_query("SELECT * FROM overtime where id!='1' order by id DESC LIMIT 1") or die(mysql_error());
		    while($r=mysql_fetch_assoc($C)){
				echo $TY=$r['time'];
				
			}	
		  
		      
		   if($time1>=100 and $time1<=$TY){
 $date=date("d-m-Y", strtotime( '-1 days' ) ); 
		   }
		   else {
		   $date=date('d-m-Y');	  
		   }
		 
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   
		   //update my products
		   
		  
		   
		   	 $updateg=mysql_query("insert into ".$db_bask." set product='$thepro',category='restau',price='$dbprice',
	total='$dbprice',qty='1',cp='0',status='$sta',tab='$table',ids='',section='".$serial."',opening_stocks='$avail',closing_stocks='$remproducts',area='".$a_area."',profit='$profit',time='$time',agent='$user',
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
		req.open('GET','boro.php?table=<?php echo $table=$_GET['tables']; ?>&area=<?php echo $section; ?>&db_basket=<?php echo $db_basket; ?>&db_table=<?php echo $_GET['dbtables']=$db_table; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    
    
    
    
    <body onload="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


    
        </div>
        
        
   
   
	 <?php include 'footer.php'; ?>	
     </div>
   </div>
   
  	
		 		
</body>
</html>

<?php   ?>