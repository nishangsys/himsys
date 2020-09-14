<?php
/*
Site : http:www.smarttutorials.net
Author :muni
*/
require_once 'config.php';
if(!empty($_POST['type'])){
	session_start();
	$type = $_POST['type'];
	
	$name = $_POST['name_startsWith'];
	$query = "SELECT  * FROM finals where  name LIKE '".strtoupper($name)."%' ";
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$model=$row['qty'];
		$name = $row['qty'].'|'.$row['name'].'|'.$row['sp'].'|'.$row['cost'];;
		array_push($data, $name);
	}	
	echo json_encode($data);
}
