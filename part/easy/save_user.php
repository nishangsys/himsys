<?php


$id = intval($_REQUEST['id']);
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$idcard = $_REQUEST['idcard'];
$tel = $_REQUEST['tel'];

$adress = $_REQUEST['adress'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];


include '../dbc.php';

$sql = "update staffs set name='$name',age='$age',idcard='$idcard',tel='$tel',email='$email',adress='$adress',email='$email',dob='$dob' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'name' => $name,
	'age' => $age,
	'idcard' => $idcard,
	'email' => $email,
	'tel' => $tel,
	'adress' => $adress,
	'dob' => $dob
));
?>