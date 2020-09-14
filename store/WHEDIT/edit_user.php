<?php
$conn = mysql_connect("localhost","nishang","google1234");
mysql_select_db("hotel",$conn);


if(isset($_POST["submit"]) && $_POST["submit"]!="") {
 $usersCount = count($_POST["product"]);

for($i=0;$i<$usersCount;$i++) {
	$toal[$i]=$_POST["cprice"][$i]*$_POST["qty"][$i];
	$rt=mysql_query("UPDATE stocks set product='" . $_POST["product"][$i] . "', price='" . $_POST["price"][$i] . "',total='" . $toal[$i]. "',
 quatity='" . $_POST["qty"][$i] . "', serial='" . $_POST["cprice"][$i] . "' WHERE pro_id='" . $_POST["pro_id"][$i] . "'") or die(mysql_error());


	
}

echo "<script>alert('Updtae Successfull')</script>";
header("Location:list_user.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:800px; background:#1188aa; margin:auto">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader" style="background:#E74B35; color:#fff">
<td>Edit Data</td>
</tr>
<?php
 $rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM stocks WHERE pro_id='" . $_POST["users"][$i] . "'") or die(mysql_error());
$rt=1;

?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr style="background:#94B911; color:#fff">
<td>SN</td>
<td></td>
<td>Product</td><td>Cost Price</td><td>Selling Price</td><td>Quantity in stock</td>
</tr>
<?php $row[$i]= mysql_fetch_array($result); ?>
<tr>
<td><?PHP  echo $rt++; ?></td>


<td><input type="hidden" name="pro_id[]" class="txtField" value="<?php echo $row[$i]['pro_id']; ?>"></td>
<td><input type="text" name="product[]" class="txtField" readonly value="<?php echo $row[$i]['product']; ?>"></td>
<td><input type="text" name="cprice[]" class="txtField" value="<?php echo $row[$i]['serial']; ?>"></td>
<td><input type="text" name="price[]" class="txtField" value="<?php echo $row[$i]['price']; ?>"></td>
<td><input type="text" name="qty[]" class="txtField"  value="<?php echo $row[$i]['quatity']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>