<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'nishang';
$db_pass		= 'google1234';
$db_database	= 'a1'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>