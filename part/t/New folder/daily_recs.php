<?PHP


session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
<!DOCTYPE html>
<html>
	
<head>
	<title>New Client</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<div class="BOXC">

<i class="fa fa-print fa-2x "></i>

<a href="../staffs/dailyprint.php" target="_blank" >Click here To print Today's Report</a> 

</div>

    
    
    <!---------------------------------------------------------------------------------------->
    
    
    <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from  staff_reg where date='$today' order by id";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
  
    <td>Employee</td>
    <td>Checked In</td>
      <td>Date</td>
     <TD>Checked Out</TD>
     <TD>Hours</TD>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		$agen=$row['agent'];
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td> <?php echo $row['name']; ?></td>
     <td> <?php echo $row['date']; ?></td>
        <td><?php echo $row['checkin']; ?> </td>
    <td> <?php echo $row['checkout']; ?> </td>
      <td><?php echo $row['used']; ?> Hours </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
    <hr>
  
 
  </div>
    </div>
    
			
		 		
</body>
</html>
<?php } ?>