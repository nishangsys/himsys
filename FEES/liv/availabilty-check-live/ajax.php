<?php

include('db.php');


if(isset($_POST['username']))
{
$username = $_POST['username'];
$sql = mysql_query("select roll from debors where student_name='$username'");
if(mysql_num_rows($sql))
{
echo '<STRONG>'.$username.'</STRONG> is already in use.';
}
else
{
echo 'OK';
}
}

?>