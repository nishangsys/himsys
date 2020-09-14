 <link href="../style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function doCalc(form) {
		    form.qtyleft.value = (((parseInt(form.curqty.value) + parseInt(form.newqty.value))));


   form.cqtyleft.value = (((parseInt(form.curqtysols.value) - parseInt(form.newqty.value))));

	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.totdisc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<?php
include '../dbc.php';
 $pro=$_GET['pro'];
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

if($section=='20' or $section=='9'){
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

$df=$con->query("select * from ".$db_basket." where id='$pro'");
while($b=$df->fetch_assoc()){
	  $prod=$b['product'];
	  $pice=$b['price'];
	  $qty=$b['qty'];
}

$df1=$con->query("select * from products where product='$prod' and serial='".$serial."'");
while($b1=$df1->fetch_assoc()){
	 $prod1=$b1['product'];
	 $avqty=$b1['quatity'];
}

?>
<form method="post" action="">
<table>
<tr>
<td>Product</td><td><input type="text" name="product"  onBlur="doCalc(this.form)" value="<?php echo $prod; ?>"></td></tr>

<td>Current Stock</td><td><input type="text" name="curqty"  onBlur="doCalc(this.form)" value="<?php echo $avqty; ?>" readonly="readonly"></td></tr>

<td>Current Qty Sold</td><td><input type="text" name="curqtysols"  onBlur="doCalc(this.form)" value="<?php echo $qty; ?>" readonly="readonly"></td></tr>



<td> Qty Return</td><td><input type="number" name="newqty"  onBlur="doCalc(this.form)"></td></tr>



<td>Qty Left for client</td><td><input type="text" name="cqtyleft"  onBlur="doCalc(this.form)" style="background:#FF9; color:#000" readonly="readonly"></td></tr>



<td>Stock Left</td><td><input type="text" name="qtyleft"  onBlur="doCalc(this.form)" style="background:#f00; color:#fff"></td></tr>

 <tr><td></td><td><button type="submit" name="add" class="myButton"   >update</button></td></tr>



</table>



</form>

<?php
if(isset($_POST['add'])){

$qtyreturn=$_POST['newqty'];
$curstock=$_POST['curqty'];
$qtysold=$_POST['curqtysols'];


$qtyleftcl=$_POST['curqtysols']-$_POST['newqty'];
$newtotal=($_POST['curqtysols']-$_POST['newqty'])*$pice;
$qtyleft=$_POST['curqty']+$_POST['newqty'];
	if($qtysold<$qtyreturn){
		echo "<script>alert('ERROR. Returning more than you bought')</script>";
		
}

		else{
			 $sest=$con->query("UPDATE products SET quatity='$qtyleft' where product='".$prod."' and serial='".$serial."' ");
	
	 $sest12=$con->query("UPDATE ".$db_basket." SET qty='$qtyleftcl',total='$newtotal' where id='".$pro."' ");
	 
	 echo "<script>alert('SUCCESS in Updating qty sold from ".$qtysold." to ".$qtyleftcl."')</script>";
	  echo "<script>window.open('../restau/thank.php','_self')</script>";
	
			}

}
?>