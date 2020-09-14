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
      <script type="text/javascript" src="jquery.js"></script>
<script type='text/javascript' src='jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />

<script type="text/javascript">
$().ready(function() {
	
	$("#name").autocomplete("get_course_list2.php", {
		width: 260,
		matchContains: true,
		mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	$("#name").result(function(event, data, formatted) {
		$("#pro_id").val(data[1]);
	});
});
</script>
       
  <h1>Search Results</h1>
             <div class="search_box" style="background:#9CF">
    <form method="post" action="">
    <table>
    <tr>
    <td><input type="text" name="name" style="background:#fff; margin-left:30px; border:1px solid#ccc" placeholder="search a member's matricule......"/></td>
    <td><button type="submit" name="search" />Search Matricule</button></td>
    </tr>
    </table>
    </form>
   
    
      <table >
    <tr style=" font-weight:bold; color:#666;">
   <td>S/N</td>
    <td>Room </td>
    <td>Room Occupied by</td>
    <td>Check In</td>
    <TD>For How Long</TD>
    <TD>Days Left</TD>
    <td>Check out</td>
    <td>Detailed Info</td></tr>
      <?php
	if(isset($_POST['search'])){
		 $name=$_POST['name'];
		 
		$se=mysql_query("SELECT * from finances where name like '%".$name."%' and status='1'") or die(mysql_error());
		$i=1;
	}
	?>
	
    <tr >
     <?PHP
	if($i%2==0){
		echo "<tr style='background:#fff;height:30px'>";		
	}
	else {
		echo "<tr style='background:#fff; height:30px'>";
	}
	?>
    <?php
	while($ro=mysql_fetch_assoc($se)){
	?>
    <td>
    <?php echo $i++; ?></td>
    <td>Room <?php echo $ro['room']; ?></td>
    <td><?php echo $ro['name']; ?></td>
     <td><?php echo  $ro['date'];?></td>
    <td><?php echo  $ro['howlong'];?> Days</td>
    <td><?php
    $today=date('d-m-Y'); 	
	 $date1 = date_create($ro['duedate']);
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
    <td ><?php echo  $ro['duedate'];?> </td>
   
   <td>    <a href=javascript:popcontact('../reception/yourinfo.php?roll=<?php echo $ro['yourid'] ?>') style="color:#1188AA">View </a></td>
    
    </tr>
    <?php
	} ?>
    
   
    
    
    </table>
    
     </div>
    
    
    
    
<h1>All Occupied Rooms Details</h1>    
    
    
    
    
    
    
    
    
    <?php
	$today=date('Y');
	$cust="SELECT * from finances where status='1' order by name ";
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
    <TD>Days Left</TD>
    <td>Check out</td>
    <td>Detailed Info</td>
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
         <td ><?php echo  $row['duedate'];?> </td>
   
   <td>    <a href=javascript:popcontact('../reception/yourinfo.php?roll=<?php echo $row['yourid'] ?>') style="color:#1188AA">View </a>|
   
   <a href=javascript:popcontact('../reception/add_services.php?roll=<?php echo $row['yourid'] ?>') style="color:#f00">Add Service </a>
   
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