<?php
include '../dbc.php';
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

    <?php
	$today=date('Y');
	$cust="SELECT * from staffs  order by name  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>STAFF'S NAME</td>
    <td>POSITION</td>
    <TD>TEL</TD>
    <td>MATRICULE</td>
   
    <td>PHOTO</td>
     <td>CHANGE PIC</td>
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
    <td><?php echo  $row['matric'];?></td>
    <td><?php $c="SELECT COUNT(matric) from staffs where matric='".$row['matric']."' order by name  ";
	$ru=mysql_query($c) or die (mysql_error());
	
	while($t=mysql_fetch_assoc($ru)){
		echo $t['COUNT(matric)'];
	}?></td>
    
    <td><?php echo  $row['matric'];?></td>
 

    <td><img src="album/<?php echo  $row['photo'];?>" style="width:50px; height:50px"></td>
      
   <td>    </td>
</td>
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>