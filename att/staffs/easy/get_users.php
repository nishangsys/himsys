<?php

include '../dbc.php';
$rs = mysql_query('select * from staffs order by name');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>