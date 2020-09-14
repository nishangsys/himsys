<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>


<?php include 'head.php'; ?>

	<div class="contain">
   <div class="subcontain">
     <div class="subcontain">
       <?php include 'bussersidebar.php'; ?>
       <div class="right">
         <div class="calender">
           <script type="text/javascript">
            calendar();
        </script>
         </div>
         
         
       

    <?php
	$roll=$_GET['assigning'];
	 $cust="SELECT * from customers where client_id='$roll' ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		$namse=$row['client_id'];
	$num=1;
	
	
	?>
    <h2 style="background:#333; color:#fff; text-align:center; padding:10px 0px;
    font-size:19px;">You're Assiging a Room to <span style="color:#FF0">
	<?php echo $row['stu_name'] ?></span> </h2>
   
    <?php } ?>
 
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
	while($row=mysql_fetch_assoc($run)){
		?>
<div class="blocks">
   <h1 style="margin:0px; font-weight:bold; font-size:18px">Block <?php echo $row['nums']; ?> Rooms </h1>
<?php 
   $room=mysql_query("SELECT * from rooms where floor='".$row['nums']."' order by id ") or die(mysql_error());
   while($ro=mysql_fetch_assoc($room)){
   ?>
   <?php
   //Occupied Rooms
	if($ro['status']=='2'){
		echo "<div class='rooms2'>
				<a href=#=".$row['num']."') >

		<h1>".R.".".$ro['num']."</h1>";
	echo "
	<P>Category ".$ro['cateogry']." </p>
	</a>
		
		
		</div>";
	}
	elseif($ro['status']=='3') {
		echo "<div class='rooms'>
		<a href=#?roll=".$row['num']."') >
		<h1>".R.".".$ro['num']."</h1>";
	echo "
	<P>Category ".$ro['cateogry']." </p>
		</a>
		
		</div>";
	}
	else{
   
   ?>

 <a href="gettingrooms.php?roll=<?php echo $namse; ?>&cat=<?php echo $ro['num']; ?>">   

    <?php
	
		echo "<div class='reserve'>
	<h1>".R.".".$ro['num']."</h1>";
	echo "
	<P>Category ".$ro['cateogry']." </p>
		
		
		</div>";
	
   }
   }
	?>
   
 </a>
 

    </div>
    <?php } ?>
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>