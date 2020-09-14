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

<?php
$room=$_GET['room'];
$ids=$_GET['id'];

?>
<h1>Reservations for  <span style="color:#f00; text-decoration:blink">Room <?php echo $room; ?></span></h1>

    <?php
	$today=date('Y');
	$cust="SELECT * from customers,reserves where reserves.room='$room' and reserves.status!='1' and customers.client_id=reserves.cust_id   ";
	$run=mysql_query($cust) or die (mysql_error());
	$rt=mysql_num_rows($run);
	if($rt<=0){
		echo "<div style='background:#f00; color:#ff0; margin:auto; padding:10px 0px; text-align:center'>There are Currently No reservations for this room</div>";
	}
	else {
	$num=1;
	
	
	?>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>Reservn From</td>
    <TD>To</TD>
    
    <td >Days left</td>
    

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
    <td><?php 	  $c=mysql_query("SELECT * FROM reserves where day='".$row['day']."'") or die(mysql_error()) ;
	$nu=mysql_num_rows($c);
	$dates=$row['date'];
	$months=$row['month'];
	$years=$row['year'];
	echo $h=$dates."/".$months."/".$years;
	
	 ?></td>
    <td><?php echo  $row['date1'];?>/<?php echo  $row['month1'];?>/<?php echo  $row['year1'];?></td>
    
   
   <td><?php
    $today=date('d-m-Y'); 	
	 $date1 = date_create($row['day']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today is left</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %m months and %d days")."&nbsp;"."Left"."<br>";
		
		}
		?></td>
        
 
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  }?>