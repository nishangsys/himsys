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
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<h1>Today's Clients</h1>
    <?php
	$today=date('d-m-Y');
	$year=date('Y');
	$cust="SELECT * from reports where year='$year' and reason='checkout' order by id DESC";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    
   
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Room </td>
    <td>Room Occupied by</td>
    <td>Check In</td>
    <TD>For How Long</TD>
    <TD>Checked Out</TD>
    
    <td>Amt Paid to u</td>
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
    
    
     
     </td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo  $row['checkin'];?></td>
    <td><?php echo  $row['days_uesd'];?> Days</td>
    <td><?php echo  $row['cout'];?> </td>
   
   <td style="color:#f00">   <?php   $sql="select SUM(howmuch) as total from reports where reason='payback' and yourid='".$row['yourid']."'  ";
		$rres=mysql_query($sql) or die(mysql_error());
	 while($rows=mysql_fetch_assoc($rres)){
		 $lp=$seen=$rows['total'];
		echo  number_format($seen=$rows['total']);
	 }?> </td>
    
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