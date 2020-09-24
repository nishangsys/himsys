<?php
include_once("../includes/dbc.php");

$sql = "UPDATE students_register set ".$_REQUEST["column"]."='".$_REQUEST["value"]."' WHERE  id='".$_REQUEST["id"]."'";
mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
echo "saved";
?>