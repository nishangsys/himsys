<?php
$conn = mysql_connect("localhost","nishang","google1234") or die("Database not connected");
$db=mysql_select_db("hims_finance", $conn) or die("Database not connected");
?>