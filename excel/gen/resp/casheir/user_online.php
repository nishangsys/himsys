

    <style>
	a{
		text-decoration:none;
	}
	</style>

<?php
include '../dbc.php';
@session_start();
 $id=$_SESSION['id'];

$query1 = $con->query("SELECT * FROM users where id='$id'") or die(mysqli_error($con));
		   while($rows = $query1->fetch_assoc()) {
			    $branch=$rows['country'];
		   }
$query = $con->query("SELECT * FROM users where country!='$branch'") or die(mysqli_error($con));
		   while($row = $query->fetch_assoc()) {
			   
		   

?>
<ul style="list-style:none; margin:0px; padding:0px; line-height:1.8">
<li><?php
  if($row['fax']==2){
	 echo '<i class="fa fa-circle" aria-hidden="true" style="color:#f00"></i>
';
 }
 else{
	 	 echo '<i class="fa fa-circle" aria-hidden="true" style="color:#ccc"></i>
';
 }


 ?><a href="?chat&branch=<?php echo $branch; ?>&id=<?php echo $row['country']; ?>&ids=<?php echo $row['id']; ?>"><?php echo $row['country']; ?></a></li>
</ul>
<?php } ?>