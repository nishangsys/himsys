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
		
        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>
<div class="right">




<form method="post" action="">
	<table style="width:100%">
    	<tr style="background:#CC3">
        
            
	
        <td>Clients Names </td><td><input type="text" name="yourname"></td>
               
               <td><button type="submit" name="seen" >Search Records</button></td>
        
        </tr>
    
    </table>    
   

</form>


<?php
if(isset($_POST['seen'])){
	$names=$_POST['yourname'];
	$year=$_POST['year'];
 $sele="SELECT * from finances where name like '%$names%' order by date";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table style="width:100%">

<h1>Historique of <?php echo $names; ?> Lodging with Us</h1>
 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
 
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Room Occupied</td>
    <td>Name</td>
    <td>Check In</td>
    <TD>For How Long</TD>
    <TD>Days Left</TD>
    <TD>Checked Out</TD>
    <td>Detailed Info</td>
    
   
        
     <?php while($row=mysql_fetch_assoc($runs)){
		 
	
		
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
    <td><?php echo  $row['date'];?></td>
    <td><?php echo  $row['howlong'];?> Days</td>
    <td> <?php
		
		$today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
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
	
        echo $diff->format("%d days")."&nbsp;"."Left"."<br>";
		
		}
		
		
		 ?></td>
         
             <td><?php   if(empty($row['level'])){
				 echo "Not Checkedout/ Uncertain";
			 }
			 else {
				 echo $row['level'];
			 };?> </td>

   
   <td>    <a href=javascript:popcontact('../reception/yourinfo.php?roll=<?php echo $row['yourid'] ?>') style="color:#1188AA">View </a></td>
    
    </tr>
    
    <?php } ?>
    
  </table>		
		 		
</body>
</html>
<?php } } ?>