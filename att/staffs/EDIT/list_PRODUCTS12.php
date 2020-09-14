<?php
$conn = mysql_connect("localhost","nishang","google1234");
mysql_select_db("allstore",$conn);
$result = mysql_query("SELECT * FROM products ");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>

<form name="frmUser" method="post" action="">
<div style="width:95%; margin:auto;  font-size:18px">
<table border="0" cellpadding="10" cellspacing="1" style="width:95%; margin:auto; font-size:18px" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Product</td>
<td>Selling Price</td>
<td>Quantity</td>
<td>Cost Price</td>
<td>Total Cost</td>

</tr>
<?php
$i=1;

while($row = mysql_fetch_array($result)) {
	
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["pro_id"]; ?>" ></td>
<td><?php echo $row["product"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["quatity"]; ?></td>
<td><?php echo $row["serial"]; ?></td>
<td><?php echo $row["total"]; ?></td>
</tr>
<?php
$i++;
}
?>

</table>
</div>
</form>
</div>
</body></html>