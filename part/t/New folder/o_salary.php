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
        		<META HTTP-EQUIV="REFRESH" CONTENT="15">

		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<h1>Our Staff Salaries for <?php echo date('F Y'); ?>| <A href="printit.php" target="_blank">Print a Copy</A></h1>

    <?php
	$today=date('Y');
	$month=date('m');
	$cust="SELECT * from payslip where month='$month' and year='$today' ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>STAFF'S NAME</td>
    
    <td>POSITION</td>
    <TD>CNPS</TD>
    <td>CRTV</td>
    <td>DCT</td>
    <td>CCF</td>
    <td>Total Tax</td>
    <td>CNPS 8.4%</td>
    <TD>New Salary</TD>
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
    <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['position']; ?></td>

    
    <td><?php echo  number_format($row['cnps']);?></td>
    
    <td><?php echo  number_format($row['crtv']);?></td>
    
   <td><?php echo number_format( $row['dct']);?></td>
   <td><?php echo number_format($row['ccf']);?></td>
   <td><?php echo  number_format($row['cnps']+$row['ccf']);?></td>
   <td><?php echo  number_format($row['cnps2']);?></td>
    
    <td><?php echo  number_format($row['usalary']);?></td>
    
   

    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>