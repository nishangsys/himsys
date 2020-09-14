<?php
$conn = mysql_connect("localhost","nishang","google1234");
mysql_select_db("hotel",$conn);
$result = mysql_query("SELECT * FROM rooms_products ");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>

<form name="frmUser" method="post" action="">
<div style="width:600px; margin:auto;  font-size:18px">
<table border="0" cellpadding="10" cellspacing="1" style="width:800px; margin:auto; font-size:18px" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Product</td>
<td>Selling Price</td>
<td>Qunatity</td>
<td>Room</td>
<td>Total</td>
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
<td>Room <?php echo $row["room"]; ?></td>
<td><?php echo $row["total"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader" style="position:absolute; right:100px; top:50%">
<td colspan="4"><input type="button" style=" position: fixed;
    bottom: 0; background:#9F3;
    right: 0; top:20px; " name="update" value="Update Selected" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</div>
</form>
</div>
</body></html>