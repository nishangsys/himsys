<?php

require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISAHNG</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<h1>Reserved Rooms</h1>

    <?php
	$today=date('Y');
	$cust="SELECT * from reserves,rooms,customers where rooms.status='3' 
	and customers.client_id=reserves.cust_id  and rooms.num=reserves.room order by customers.stu_name ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    
   
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Room </td>
    <td>Reserved by</td>
    
    <TD>Reservation Date</TD>
    <td>Confirm Resv.</td> 
    <td>Cancel Resv.</td>
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
    <td>Room <?php echo $row['room']; ?>
    
    <?php $se=mysql_query("SELECT floor as floors from rooms where num='" .$row['num']."'") or die (mysql_error);
	 while($r=mysql_fetch_assoc($se)){
		 //echo $r['floors'];
	 }?>
     
     
     </td>
    <td><?php echo $row['stu_name']; ?></td>
    <td><?php echo  $row['date'];?></td>
    <td>
   <a href="frontpage.php?cancel=<?php echo $row['client_id'] ?>" style="color:#f00" onclick="return confirm('Are you Sure you want to cancel <?php echo $row['stu_name']; ?> reservation')">Cancel !</a></td>
<td>   <a href="frontpage.php?change=<?php echo $row['client_id'] ?>" style="color:#f00" onclick="return confirm('Are you Sure you want to change <?php echo $row['stu_name']; ?> room')">Change now !</a></td>
</td>
   
    
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   </tr>
	<div class="clear"></div>		
		 		
</body>
</html>
<?php }  ?>