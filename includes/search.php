<?php
include('../includes/dbc.php');
if(isset($_POST))
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from finals where name like '%$q%'  order by name ");
while($row=mysql_fetch_array($sql_res))
{
	
$username=$row['name'];
$email=$row['sp'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><span style="color:#f00"><?php echo $final_email; ?></span>
</div>
<?php
}
}
?>
