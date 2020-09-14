<?php

require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	echo 11111;
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
        <style>
		.oc1{
			background:#ff0;
			width:30px;
			height:30px;
			float:left;
			border-radius:5px 5px 5px 5px;
			border:1px solid#000;
			
		}
		
		.oct{
			
			width:200px;
			font-weight:bold;
			margin-top:5px;
			height:auto;
			margin-left:20px;
			float:left;
			
			
		}
		
		</style>
</head>




<body>
<?php
	$today=date('Y');
	$cust="SELECT * from rooms order by id  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;	
	?>

<div class="right" >
<h1>Key of Rooms</h1>
<div class="flo">

<div class="oct" style="width:40px; color:#F00; text-decoration:blink"> Key:</div>


<div class="oc1" style="margin-left:30px; background:#F00"></div>
<div class="oct">Occupied Rooms</div>

<div class="oc1" style="background:#99FF99"></div>
<div class="oct">Vacant Rooms</div>



<div class="oc1" style="background:#ff0"></div>
<div class="oct"> Rooms on Reservation</div>





</div>
<div style="clear:both"></div>
 <?php while($row=mysql_fetch_assoc($run)){
	
		?>

    <?php
	//Occupied Rooms
	if($row['status']=='2'){
		echo "<div class='rooms2'>
				<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."') >

		<h1>".R.".".$row['num']."</h1>";
	echo "
	<P>Category ".$row['cateogry']." </p>
	</a>
		
		
		</div>";
	}
	//Unoccupied Rooms----------
	elseif($row['status']=='3') {
		
		echo "<div class='rooms'>
				<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."') >

	<h1>".R.".".$row['num']."</h1>";
	echo "
	<P>Category ".$row['cateogry']." </p>
		</a>
		
		</div>";
	}
	//reserve Rooms-----------
	else {
		echo "<div class='reserve'>
		<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."') >
		<h1>".R.".".$row['num']."</h1>";
	echo "
	<P>Category ".$row['cateogry']." </p>
		</a>
		
		</div>";
	}
	
	?>
    <?php } ?>
   
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>