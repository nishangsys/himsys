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
			<META HTTP-EQUIV="REFRESH" CONTENT="15">

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

 <?php
	
	//tot num or rooms	
	$cust="SELECT * from blocks order by id   ";
	$run=mysql_query($cust) or die (mysql_error());
	while($rowS=mysql_fetch_assoc($run)){
		?>
<div class="blocks" style="width:430PX; margin:20px 15px;">
   <h1 style="margin:0px; font-weight:bold; font-size:18px">Block <?php echo $rowS['nums']; ?> Rooms </h1>
<?php 
   $room=mysql_query("SELECT * from rooms where floor='".$rowS['nums']."' order by id ") or die(mysql_error());
   while($row=mysql_fetch_assoc($room)){
   ?>
   <?php
	//Occupied Rooms
	if($row['status']=='2'){
		echo "<div class='rooms2'>
				<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."&floor=".$row['floor']."') >

		<h1>".$row['num']."</h1>";
	echo "
	<P>".$row['cateogry']." </p>
	</a>
		
		
		</div>";
	}
	//Unoccupied Rooms----------
	elseif($row['status']=='3') {
		
		echo "<div class='rooms'>
				<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."&floor=".$row['floor']."') >

	<h1>".$row['num']."</h1>";
	echo "
	<P>".$row['cateogry']." </p>
		</a>
		
		</div>";
	}
	//reserve Rooms-----------
	else {
		echo "<div class='reserve'>
		<a href=javascript:popcontact('../reception/thisroom.php?roll=".$row['num']."&floor=".$row['floor']."') >
		<h1>".$row['num']."</h1>";
	echo "
	<P> ".$row['cateogry']." </p>
		</a>
		
		</div>";
	}
	
	?>
    <?php } ?>
   
 

    </div>
    <?php } ?>
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>