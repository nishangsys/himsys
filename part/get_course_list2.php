<?php
require_once "../dbc.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT name as name, id from finances where name LIKE '%$q%' and status='1'";
$rsd = mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($rsd)>0){
while($rs = mysql_fetch_array($rsd)) {
	$cid = $rs['id'];
	$cname = $rs['name'];
	echo "$cname|$cid\n";
}
}//close if 

else{
	echo "<p style='color:#f00'>No Records Found with that name</p>";
}

?>
