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
		        		<META HTTP-EQUIV="REFRESH" CONTENT="15">

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
</div>
<body>
<div class="right">
    
    
    
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
    <td>Detailed Info</td>
    <td>Action</td>
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
						echo "<span class='error'>Zero</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format("%d days")."&nbsp;"."Left"."<br>";
		
		}
		
		
		 ?></td>
   
   <td>    <a href="print.php?roll=<?php echo $row['yourid'] ?> " style="color:#1188AA" target="_blank">My Receipt </a>|
   
   <a href=javascript:popcontact('checkingout123.php?out=<?php echo $row['yourid'] ?>') style="color:#f00">Checkout </a>
   
   </td>
   <td>
   <?php  $user=$_SESSION['banned'];
   $sem=mysql_query("SELECT * from finances WHERE yourid=".$row['yourid']." and allow='2' and status='1'") or die (mysql_error());
   $count=mysql_num_rows($sem);
  // echo $count;
   
   if($count>0 && $user==20){
	   echo "<span style='color:#f00'>Allowed</span>";
   }
   else if($count<1 && $user==20){
	   echo "<A href=adminpage.php?allow=".$row['yourid'].">Allow</a>";
   }
   else {
	   echo "NOT ALLOWED";
   }
  
   
    ?>
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