<?php
$conn = mysql_connect("localhost","nishang","google1234");
mysql_select_db("hotel",$conn);
echo $rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM products WHERE pro_id='" . $_POST["users"][$i] . "'") or die(mysql_error());
}
header("Location:list_user.php");
?>