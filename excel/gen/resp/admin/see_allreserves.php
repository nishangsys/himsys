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

		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	$today=date('Y');
	$cust="SELECT * from customers,reserves where  customers.client_id=reserves.cust_id and reserves.status='0'  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>Reservn From</td>
    <TD>To</TD>
    <td >Room Choosen</td>
    <td >Days left</td>
    <td >Report?</td>
        <td >Change Room</td>

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
    <td>
   <?php echo  $row['room'];?> of Block <?php echo  $row['block'];?></td>
   
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
        
        <td><?php
    	$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(day, '%m/%d/%Y')) AS DAYS
FROM reserves where cust_id='".$row['cust_id']."'");
while($rows=mysql_fetch_assoc($rusn)){
	    $not=($rows['DAYS']);
		
}
if($not<0){
	echo "Yet to ";
}
else if($not==0){
	$today=date('m/d/Y');
	$run12=mysql_query("SELECT * from reserves,rooms where reserves.day='$today' and reserves.cust_id='".$row['cust_id']."' 
	and reserves.room=rooms.num and rooms.status!='1' and rooms.who!='".$row['cust_id']."' and rooms.num='".$row['room']."' and rooms.cateogry='".$row['category']."' ") or die (mysql_error());
 if(mysql_num_rows($run12)>0){
 while($r=mysql_fetch_assoc($run12)){
	 $room=$r['num'];
	 $block=$r['id'];
	 echo "<a href='adminpage.php?report=".$block."' style='color:#C06; text-decoration:blink' target='_blank'>Report</a>";
	 
 }
  }
  else {
	  	$today=date('m/d/Y');
 $run12=mysql_query("SELECT * from reserves where day='$today'") or die (mysql_error());
 if(mysql_num_rows($run12)>0){
 while($r=mysql_fetch_assoc($run12)){
	$rooms=$r['room'];
	 $blocks=$r['block'];
	 $cust=mysql_query("UPDATE rooms set status='3' , who='".$row['cust_id']."' where num='$rooms'  and floor='$blocks' and status='1'") or die(mysql_error());

 }
 }
  }
	//echo "Today";
}
else {
	   
		  $cust=mysql_query("DELETE from customers where client_id='".$row['cust_id']."'") or die (mysql_error()) ;
			//historique 
		  $histo=mysql_query("DELETE from reserves where cust_id='".$row['cust_id']."'") or die (mysql_error());
		  
		   $updaterooms=mysql_query("UPDATE rooms set status='1' where who='".$row['cust_id']."' ") or die (mysql_error()) ;

	
}?></td>
<td>
<a href="adminpage.php?changedate=<?php echo $row['client_id'] ?>" style="color:#f00" onclick="return confirm('Are you Sure you want to change <?php echo $row['stu_name']; ?> date')">Change Dates !</a></td>
   


 
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>