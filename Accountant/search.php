<?php
include('../includes/dbc.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=$conn->query("select * from staffs where name like '%$q%'  order by id LIMIT 5") or die(mysqli_error($conn));
while($row=$sql_res->fetch_assoc())
{
$username=$row['name'];
$email=$row['age'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<img src="../img/logo.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>
