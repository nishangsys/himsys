<?php
include("db.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$firstname=mysql_escape_String($_POST['firstname']);
$lastname=mysql_escape_String($_POST['lastname']);
$pob=mysql_escape_String($_POST['pob']);
$sql = "update gen_info set names='".$firstname."',dob='".$lastname."',pob='".$pob."' where id='$id'";
mysql_query($sql) or die(mysql_error());
}
?>