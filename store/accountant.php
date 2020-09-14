

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='100'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANG SOFTWARES PRODUCTS</title>
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="../style.css" rel="stylesheet" type="text/css" />
        <style>
		th{
			background:#1188aa;
			color:#fff;
			text-align:center;
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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>


<body>


<?php include 'restauhead.php'; ?>

	<div class="contain" style="width:95%;">
   <div class="subcontain">
  
    <div class="restau_box" style="width:95%">
   
   
 <div class="tables" style="width:700px; height:330px">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1"><?php echo $clients ?> Bar/Snack</a></li>
            <li><a href="#view2"><?php echo $clients ?> Restaurant</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
                   <form method="post" action="" name="my_form">
        <table>
       <div class="name"><a href=javascript:popcontact('pricelist.php') style="color:#1188aa; text-align:center">Click here to see all product prices</a></div>
       
 
<table >
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" /></td><TD><button name="search" type="submit">Search</button></TD>
</tr>
<?php
if(isset($_POST['search'])){
//require_once('dbconnect.php');
$txtbarcode=$_POST['barcode'];



$result=mysql_query("SELECT * from products where barcode='".$txtbarcode."' or serial='".$txtbarcode."'");
//check if produc exits
if(mysql_num_rows($result)<1){
		 	echo "<script>alert('Error . ".$txtbarcode." is not Found. Make sure your spelling is correct ')</script>";	
}
else{
while($row=mysql_fetch_array($result))
{

?>
</table>
</form>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border="1" style="width:100%; margin:auto">

<tr><th></th><th></th><th></th><th></th><th></th><th>ITEM:</th><th>Avail. Qrt</th><th>CP</th><th>Qty bought</th><th>Stocks</th><th>Table<th>Sell</th></th>

    <tr>

<td ><input type="hidden" name="id"  value="2" ></td>
<td ><input type="hidden" name="cate"  value="<?php echo  $row['category']; ?>" ></td>
<td align=center><input type="hidden" name="dbtot"  value="<?php echo  $row['total']; ?>" readonly></td>
<td align=center><input type="hidden" name="serial"  value="<?php echo  $row['serial']; ?>" readonly></td>
<td ><input type="hidden" name="total" onBlur="doCalc(this.form)" style="background:#f00;text-align:center; color:#ff0"></td>



<td align=center><input type="text" name="product"  value="<?php echo  $row['product']; ?>" style="width:110px" readonly></td>

<td align=center><input type="text" name="qty" onBlur="doCalc(this.form)"  value="<?php echo  $row['quatity'] ?>" readonly></td>
<td align=center><input type="text" name="priz" onBlur="doCalc(this.form)"  value="<?php echo  $row['price'] ?>" style="width:60px" readonly></td>

<td >


<input type="text" name="bought" onBlur="doCalc(this.form)" style="background:#000; text-align:center; color:#fff"></td>



<td ><input type="text" name="left" onBlur="doCalc(this.form)" style="background:#f00;text-align:center; color:#ff0"></td>
 <?php
			   $amou="SELECT * from our_tables order by num ";
	$run=mysql_query($amou) or die (mysql_error());					 
		 ?>        
<td><select name="table" style="width:100px" />
               
               <?php				
					while ($row=mysql_fetch_array($run)){
						
						$tab_id=$row['id'];	
							$table=$row['num'];														
							echo "<option value='$table'>Tab $table</option>";
							
					}
                   
				

			   ?>
               </select></td>

<td><button type="submit" name="sell">Sell</button></td>

</form>



</tr>
<?php }
}








 }?>

</table>

<?php
if(isset($_POST['sell'])){
	
$youid=$_POST['id'];
 $priz=$_POST['priz'];
$cate=$_POST['cate'];
 $avail=$_POST['qty'];
 $product=$_POST['product'];
 $qty=$_POST['bought'];
 $table=$_POST['table'];
 $salesman=$_SESSION['user_name'];
 $remstocks=$avail-$qty;
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
	
  $ol=mysql_query("SELECT * from our_tables where num='$table' and status='1'") or die(mysql_error());	
  if(mysql_num_rows($ol)<1){
	  
	   echo "<script>alert('ERROR. TABLE $table has NOT being given out')</script>";
	   echo '<meta http-equiv="Refresh" content="0; url= restaupage.php">';
  }
  else {
	 //echo $remstocks;
	   $update=mysql_query("update products set quatity='$remstocks', agent='$salesman', total='$new_total' 
	  where product='$product' and category='$cate' LIMIT 1")or die(mysql_error());
	  
	   
	  //add to basket
	  
   $query = mysql_query("insert into basket set product='$product',category='$cate',price='$priz',
	total='$total',qty='$qty',status='1',tab='$table',ids='$youid' ") or die(mysql_error());
	echo "<script>alert('Success. You have sold ".$qty." units of ".$product." to table ".$table."')</script>";
	
   // echo "Form Submitted succesfully";
}
}
}
?>
</form>
        
        </table>
        </form>
            </div>
            
            
            
            
            
            <!-------------------------------second ---------->
            <div id="view2">
            
                  <form method="post" action="" name="my_form">
        <table>
       
 
<table >
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" /></td><TD><button name="search" type="submit">Search</button></TD>
</tr>
<?php
if(isset($_POST['search'])){
//require_once('dbconnect.php');
$txtbarcode=$_POST['barcode'];



$result=mysql_query("SELECT * from foods where barcode='".$txtbarcode."' or serial='".$txtbarcode."'");
//check if produc exits

while($row=mysql_fetch_array($result))
{

?>
</table>
</form>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border="1" style="width:100%; margin:auto">

<tr><th></th><th></th><th></th><th></th><th>ITEM:</th><th>Category</th><th>Price</th><th>Qty bought</th><th>Table<th>Sell</th></th>

    <tr>

<td ><input type="hidden" name="id"  value="3" ></td>
<td align=center><input type="hidden" name="dbtot"  value="0" ></td>
<td align=center><input type="hidden" name="serial"  value="<?php echo  $row['serial']; ?>" readonly></td>
<td ><input type="hidden" name="total" onBlur="doCalc(this.form)" style="background:#f00;text-align:center; color:#ff0"></td>



<td align=center><input type="text" name="product"  value="<?php echo  $row['product']; ?>" style="width:90px" readonly></td>

<td align=center><input type="text" name="cate"   value="<?php echo  $row['category'] ?>" style="width:90px" readonly></td>
<td align=center><input type="text" name="priz" onBlur="doCalc(this.form)"  value="<?php echo  $row['price'] ?>" style="width:60px" ></td>

<td ><input type="text" name="bought" onBlur="doCalc(this.form)" style=" text-align:center; "></td>



 <?php
			   $amou="SELECT * from our_tables order by num ";
	$run=mysql_query($amou) or die (mysql_error());					 
		 ?>        
<td><select name="table" style="width:100px" />
               
               <?php				
					while ($row=mysql_fetch_array($run)){
						
						$tab_id=$row['id'];	
							$table=$row['num'];														
							echo "<option value='$table'>Tab $table</option>";
							
					}
                   
				

			   ?>
               </select></td>

<td><button type="submit" name="sellplate">Sell</button></td>

</form>



</tr>
<?php }









 }?>

</table>

<?php
if(isset($_POST['sellplate'])){
	
$youid=$_POST['id'];
 $priz=$_POST['priz'];
$cate=$_POST['cate'];
 $avail=$_POST['qty'];
 $product=$_POST['product'];
 $qty=$_POST['bought'];
 $table=$_POST['table'];
 $salesman=$_SESSION['user_name'];

   $total=$priz*$qty;

	
  $ol=mysql_query("SELECT * from our_tables where num='$table' and status='1'") or die(mysql_error());	
  if(mysql_num_rows($ol)<1){
	  
	   echo "<script>alert('ERROR. TABLE $table has NOT being given out')</script>";
	   echo '<meta http-equiv="Refresh" content="0; url= restaupage.php">';
  }
  else {	   
	  //add to basket
	  
   $query = mysql_query("insert into basket set product='$product',category='$cate',price='$priz',
	total='$total',qty='$qty',status='1',tab='$table',ids='$youid'") or die(mysql_error());
	echo "<script>alert('Success. You have sold ".$qty." units of ".$product." to table ".$table."')</script>";
	
   // echo "Form Submitted succesfully";
}

}
?>
</form>
        
        </table>
        </form>            
            </div>
           
        </div>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
       
       
       
       
       
       
       
       
       
       
        <?php
		$c=mysql_query("SELECT * from our_tables order by id") or die(mysql_error());
		 while($rooms=mysql_fetch_assoc($c)){
			 $status=$rooms['status'];
			 $num=$rooms['num'];
        ?>
       	<div class="tables">
        
        <span class="im"><?php if($status=='1'){
			 echo "<h1 class='occ'>Table $num is Occupied</h1>";
			 
		 }else {
			  echo "<h1 class='unocc'>Table $num is UnOccupied</h1>";
		 }?></span>
       
           <!----------hyper link------------->
         
         
         <a href="giveouthistab.php?roll=<?php echo $num; ?>">
         <table border="1">
         
         
         
       <form method="post" action="out.php">
       <?php
	   
$result=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),id from basket where tab='".$rooms['num']."' and status='1' group by category   ");
$num=1;

	   ?>
       
				<tr><td>S/N</td><td>Item</td><td>Price</td><td>Qty</td><td>TC</td><td>Delete</td></tr>
				
        <?php   while ($getres=mysql_fetch_assoc($result)){ ?>
        <tr>
        	<td style="width:20px"><input type="text" style="width:20px" value="<?php echo $num++; ?>" /></td>
            <td><input type="text" name="product" style="width:90px" value="<?php echo $getres['product']; ?>" /></td>
                  
            <td><input type="text" name="product" style="width:60px" value="<?php echo $getres['price']; ?> " /></td>
             <td><input type="text" name="product" style="width:20px" value="<?php echo $getres['SUM(qty)']; ?> "  /></td>              
            <td><input type="text" name="product" style="width:60px" value="<?php echo $getres['SUM(total)']; ?> " /></td>
            
            
          <td><a href="delfood.php?hist_id=<?php echo $getres['id']; ?> " onClick="return confirm('Are you Sure you want to Delete  <?php echo $getres['product']; ?>?');" >
        <i class="fa fa-trash-o"></i></a></td>|
        
             
        </tr>
          <?php  }
			  
		
		?>
        <tr>
        	
     
        
         
      </table>
      <table>
        <td>Grand Total</td>
            <td></td>
            <td></td>
            <td></td>
            <td style="background:#f00; color:#fff; text-decoration:blink">
            <?php
			
			
$result=mysql_query("SELECT SUM(total) as total,tab from basket where tab='".$rooms['num']."' and status='1'  ");
while ($row=mysql_fetch_assoc($result)){ 
echo number_format($row['total']) ."&nbsp;&nbsp;Frs";
$is= $row['ids'];

?>
            
            </td>
            
        </tr>
         <TR>
          <td> &nbsp; &nbsp; 
 <a href=javascript:popcontact('validate.php?roll=<?php echo $row['tab'] ?>') style="color:#f00; text-decoration:blink">Check me Out </a> | 
 <a href="print.php?roll=<?php echo $row['tab']; ?>" target="_blank">Print Receipt</a></td> 
  
      
        </td>
         </TR>
          
          
          
        
         </table>
         </a>
         </form>
         <?php } ?>
        
        </div>
        <?php } ?>
        
        </div>
     </div>
   </div>
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php } } ?>