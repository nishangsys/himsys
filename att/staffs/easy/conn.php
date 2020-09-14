<?php

$conn = @mysql_connect('localhost','nishang','google1234');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('aaa', $conn);

?>