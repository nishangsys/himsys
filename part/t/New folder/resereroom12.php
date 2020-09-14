<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	$today=date('Y');
	$cust="SELECT * from customers,reserves where customers.client_id=reserves.cust_id  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>DATE OF RESERVATIONS</td>
    <TD>ROOM </TD>
    <td style="text-transform:uppercase">Activate Reservation</td>
    <td style="text-transform:uppercase">Cancel Reservation</td>
    <?php while($row=mysql_fetch_assoc($run)){
	
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['stu_name']; ?></td>
    <td><?php echo  $row['reg_date'];?></td>
    <td><?php echo  $row['room'];?></td>
    <td>
   <a href="frontpage.php?enter=<?php echo $row['client_id'] ?>" style="color:#1188AA">Enter Room !</a></td>


 <td>
   <a href="frontpage.php?cancel=<?php echo $row['client_id'] ?>" style="color:#f00">Cancel !</a></td>

    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>