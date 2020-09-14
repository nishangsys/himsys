<?php $pageTitle = "Pet Shop|Online Tracking"; ?>
<?php include('inc/headersales.php'); ?>

<div style="background: #FFE4C4; height:400px;">
<?php

$db = mysqli_connect('localhost','Carl','Carl','petshop');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*$query = 'SELECT * FROM tracking WHERE Track_number = "01A2016"';*/
$searc=$_POST['tracking_number'];
if(isset($_POST['ok'])){
	$query = $db->query('SELECT * FROM tracking WHERE Track_number = "$searc" limit 1') or die(mysqli_error($db));
while($row=$query->fetch_assoc()){
	echo $petnumber = $row['Pet_id'];
   	$tracknumber = $row['Track_number'];
	$location = $row['Current_location'];
	$timeleft = $row['Time_left'];
	$receivername = $row['Receiver_name'];
	$receiveremail = $row['Receivers_email'];
	$currentdate = $row['Currentdate'];
	$receivertel = $row['Receiver_telephone'];
	$address = $row['Receiver_address'];
	$receivercountry = $row['Country'];
	$pet_status = $row['pet_status'];
	$pet_sex = $row['Pet_sex'];
	$quantity = $row['Quantity'];
	$details = $row['Details'];
	$sendername = $row['Sender_name'];
	$senderaddress = $row['Sender_address'];
	$sendertelephone = $row['Sender_telephone'];
	$senderemail = $row['Sender_email'];
	$currentairport = $row['Current_Airport'];
	$destinationairport = $row['Destination_Airport'];

}
?>

    <script src="js/index.js"></script>
 
 <h1>SENDER INFO:</h1> <br />
 <table border="dotted">
 	<tr>

 		<th>SENDER NAME:</th>
 		<td>
 			<!--<?php echo $sendername; ?>-->
 		</td>
 	</tr>
 	<tr>

 		<th>SENDER ADDRESS:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>

 		<th>SENDER TELEPHONE:</th>
 		<td>
 		
 		</td>
 	</tr>
 </table>
	 <br />
 	<h1>RECEIVER INFO:</h1> <br />
 <table border="dotted">
 	<tr>
 		<th>RECEIVER NAME:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>
 		<th>RECEIVER ADDRESS:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>
 		<th>RECEIVER NAME:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>
 		<th>RECEIVER TELEPHONE:</th>
 		<td>
 		
 		</td>
 	</tr>
 </table>

<h1>PET INFO:</h1> <br />
 <table border="dotted">
 	<tr>
 		<th>PET STATUS:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>
 		<th>CURRENT LOCATION:</th>
 		<td>
 		
 		</td>
 	</tr>
 	<tr>
 		<th>PET SEX:</th>
 		<td>
 		
 		</td>
 	</tr>
 
 </table>
	



<?php include('inc/footer.php');} ?>