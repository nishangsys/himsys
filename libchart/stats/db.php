<?php

/*
 $exp_date = "2012-04-31";
$todays_date = date("Y-m-d");
$today = strtotime($todays_date);
$expiration_date = strtotime($exp_date);
if ($expiration_date <= $today)
  {
 echo "<script>alert('Sorry Software has Expired ')</script>";
 exit;


}

else {
	*/
/*************** PHP LOGIN SCRIPT V 2.3*********************
(c) Balakrishnan 2010. All Rights Reserved

Usage: This script can be used FREE of charge for any commercial or personal projects. Enjoy!

Limitations:
- This script cannot be sold.
- This script should have copyright notice intact. Dont remove it please...
- This script may not be provided for download except from its original site.

For further usage, please contact me.

/******************** MAIN SETTINGS - PHP LOGIN SCRIPT V2.1 **********************
Please complete wherever marked xxxxxxxxx

/************* MYSQL DATABASE SETTINGS *****************
1. Specify Database name in $dbname
2. MySQL host (localhost or remotehost)
3. MySQL user name with ALL previleges assigned.
4. MySQL password

Note: If you use cpanel, the name will be like account_database
*************************************************************/

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","allstore"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");





?>
<?php


	session_start();
 $notes=$_SESSION['username'];
$query="select * from user  where `username` ='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

  $school=$row['level'];
$school2=$row['username'];

$school3='active';

 } 
$tm=date('H:i:s');
$idff=$_SESSION['user_id'];
$ip_value=date('d/m/y');
$ref=($_SERVER['SERVER_NAME']);
$notess=($_SESSION['full_name']);
$ref2=($_SERVER['PHP_SELF']);
$agent=($_SERVER['HTTP_USER_AGENT']);
$ip=@$_SERVER['REMOTE_ADDR'];
$strSQL="insert into track set  tm='$tm'
,ref='$ref',agent='$agent',ip='$ip',ip_value='$ip_value',
full_name='$school',statusonline='$school3',
domain='$school2',extra='$statusfbio',


tracking_page_name='$ref2'
";
$TEST=mysql_query($strSQL);

?>