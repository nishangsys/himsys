<?php
/*
Site : http:www.smarttutorials.net
Author :muni
*/
require_once 'config.php';
if(!empty($_POST['type'])){
	$type = $_POST['type'];
	$name = $_POST['name_startsWith'];
	$query = "SELECT   qty,product,model,id FROM fixed_products where product LIKE '".strtoupper($name)."%'AND qty>0  ";
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$model=$row['model'];
		$name = $row['qty'].'|'.$row['product'].'|'.$row['model'].'|'.$row['id'];;
		array_push($data, $name);
	}	
	echo json_encode($data);
}
