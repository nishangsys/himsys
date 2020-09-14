<?php

include '../dbc.php';
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NSIAHNG SOFTWARES</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>





    <?php
	$id=$_GET['id'];
	 $cust="SELECT * from visitors where id='$id'  order by today ASC  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    

    <table style="line-height:1.5; width:100%">
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td> NAME</td>
    <td> ID No</td>
    <td>DATE OF VISIT</td>
    <td>TIME OF VISIT</td>
    <TD>CONTACTS</TD>
     <td>VISIT CATEGORY</td>
    <td>TOPIC</td>
    
    <?php while($row=mysql_fetch_assoc($run)){
	
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
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo  $row['date'];?></td>
    <td><?php echo  $row['today'];?></td>    
   <td><?php echo  $row['tel'];?></td>
   <td><?php echo  $row['purpose'];?></td>
   <td><?php echo  $row['why'];?></td>
  
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
