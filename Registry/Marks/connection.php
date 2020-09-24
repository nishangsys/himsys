<?php

$conn = new mysqli("localhost", "root", "", "biakahc_online") or die(mysqli_error());
	//$conn = new mysqli("localhost", "biakahc_ekombes", "cpadmin@bhco", "biakahc_online") or die(mysqli_error());
	if(!$conn){
		die("Connection Failed!");
	}
?>