<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	$today=date('Y');
	$cust="SELECT * from customers,reserves where customers.client_id=reserves.cust_id and reserves.status!=1  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td> NAME</td>
    <td>Reservation From</td>
    <TD>To </TD>
    <td > Room</td>  
    <td >Change Date</td>
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
    <td><?php echo  $row['day'];?></td>
    <td><?php echo  $row['day1'];?></td>
    <td><?php echo  $row['room'];?>(<?php echo  $row['category'];?>)</td>
  
 <td>   <a href="adminpage.php?changedate=<?php echo $row['client_id'] ?>" style="color:#f00" onclick="return confirm('Are you Sure you want to change <?php echo $row['stu_name']; ?> date')">Change now !</a></td>
</td>
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>