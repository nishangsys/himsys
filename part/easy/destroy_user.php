<?php

$id = intval($_REQUEST['id']);

include '../dbc.php';

$sql = "delete from staffs where id=$id";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>