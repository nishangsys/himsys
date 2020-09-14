<?php
$query=$con->query("select * from student where matricule='$user'") or die(mysqli_error($con));

		 while ($row = $query->fetch_assoc()) {
		 
?>
<?php 
$fname=$row['firstname'];
$mname=$row['middlename'];
$lnames=$row['lastname'];
$contact=$row['password'];
$address=$row['address'];
$nationality=$row['nationality'];
$country=$row['country'];
$city=$row['city'];$region=$row['region'];
?>
<?php } ?>

<div class="panel-body">
                        <table class="table table-bordered">
						<tr>
							<th>First Name:</th>
							<td><?php echo $fname;?></td>
						</tr>
						<tr>
							<th>Middle Name:</th>
							<td><?php echo $mname;?></td>
						</tr>
						<tr>
							<th>Last Name:</th>
							<td><?php echo $lname;?></td>
						</tr>
						<tr>
							<th>Tel:</th>
							<td><?php echo $contact;?></td>
						</tr>
						<tr>
							<th>Address:</th>
							<td><?php echo $address;?></td>
						</tr>
						<tr>
							<th>City</th>
							<td><?php echo $city;?></td>
						</tr>
						<tr>
							<th>Region/State</th>
							<td><?php echo $region;?></td>
						</tr>
						<tr>
							<th>Country</th>
							<td><?php echo $country;?></td>
						</tr>
						<tr>
							<th>Nationality</th>
							<td><?php echo $nationality;?></td>
						</tr>
						<tr>
							<th>Picture:</th>
							<td><?php 
				 $mxx=$notes;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="411px" height="392px"></td>
						</tr>
						<tr>
							<th></th>
						<a href="edit.php">	<td><input type="button" value="Edit Profile" /></td></a>
						</tr>
					</table></div>