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
	$query = "SELECT  * FROM exp_classes where  name LIKE '".strtoupper($name)."%' and budget>0 ";
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$model=$row['name'];
		$name = $row['name'];
		array_push($data, $name);
	}	
	echo json_encode($data);
}
