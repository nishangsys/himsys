  <link href="../style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="../js/pop-up.js"></script>

<script type="text/javascript">
function doCalc(form) {
		    form.qtyleft.value = (((parseInt(form.curqty.value) - parseInt(form.newqty.value))));

	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.totdisc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<?php
include '../../includes/dbc.php';
echo $pro=$_GET['pro'];

$df=$con->query("select * from basket where id='$pro'");
while($b=$df->fetch_assoc()){
	  $prod=$b['product'];
	  $pice=$b['price'];
	  $qty=$b['qty'];
	  $areas=$b['category'];
}

$df1=$con->query("select * from finals where name='$prod'  ");
while($b1=$df1->fetch_assoc()){
	 $prod1=$b1['name'];
	 $avqty=$b1['qty'];
}

?>
<form method="post" action="">
<table>
<tr>
<td>Product</td><td><input type="text" name="product"  onBlur="doCalc(this.form)" value="<?php echo $prod; ?>"></td></tr>

<td>Current Stock</td><td><input type="text" name="curqty"  onBlur="doCalc(this.form)" value="<?php echo $avqty; ?>" readonly="readonly"></td></tr>



<td>New Qty</td><td><input type="number" name="newqty"  onBlur="doCalc(this.form)"></td></tr>



<td>Stock Left</td><td><input type="text" name="qtyleft"  onBlur="doCalc(this.form)" style="background:#f00; color:#fff" readonly="readonly"></td></tr>

 <tr><td></td><td><button type="submit" name="add" class="myButton"   >update</button></td></tr>



</table>



</form>

<?php
if(isset($_POST['add'])){

$newqty=$_POST['newqty'];
$curqty=$_POST['curqty'];
$newtotal=$newqty*$pice;

$qtyleft=($_POST['curqty']-$_POST['newqty']);

	if($qtyleft<0  ){
		echo "<script>alert('ERROR. A maximum of $avqty can be sold now. Requisit please')</script>";
}
		else{
			 
	
	 $sest12=$con->query("UPDATE basket SET qty='$newqty',total='$newtotal' where id='".$pro."' ");
	 
	 echo "<script>alert('SUCCESS in Updating qty sold from 1 to ".$newqty."')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=thank.php">';
	
			}

}
?>