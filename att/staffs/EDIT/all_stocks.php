<?php
$conn = mysql_connect("localhost","nishang","google1234");
mysql_select_db("allstore",$conn);
$result = mysql_query("SELECT * FROM products ");
$ii=1;
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
<style>
body {
font-family:Arial;
margin:0px;
padding:0px;
}
input {
font-family:Arial;
font-size:14px;
}
label{
font-family:Arial;
font-size:14px;
color:#999999;
}
.tblSaveForm {
border-top:2px #999999 solid;
background-color: #f8f8f8;
}
.tableheader {
background-color: #E74B35;
}
.tablerow {
background-color: #A7D6F1;
color:white;
}
.btnSubmit {
background-color:#fd9512;
padding:5px;
border-color:#FF6600;
border-radius:4px;
color:white;
}
.message {
color: #FF0000;
text-align: center;
width: 100%;
}
.txtField {
padding: 5px;
border:#E74B35 1px solid;
border-radius:4px;
}
.evenRow {
background-color: #E2EDF9;
font-size:12px;
color:#101010;
}
.evenRow:hover {
background-color: #088389;
}
.oddRow {
background-color: #B3E8FF;
font-size:12px;
color:#101010;
}
.oddRow:hover {
background-color: #9C9;
}
.tblListForm {
border-top:2px #999999 solid;


}
.listheader {
background-color: #E74B35;
font-size:12px;
font-weight:bold;
}
</style>
</head>
<body>
   
<form name="frmUser" method="post" action="">
<div style="width:100%; float:left;  font-size:18px">
<table border="0" cellpadding="10" cellspacing="1" style="width:100%; margin:auto; font-size:18px" class="tblListForm">
<tr class="listheader" style="BACKGROUND:#088389; color:#FFF; font-size:18px">
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
<td><?php echo $ii++; ?></td>
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