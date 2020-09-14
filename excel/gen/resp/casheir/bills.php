 <?php
 $section=$_GET['area'];
 $table=$_GET['tabs'];
 //bar area
if($section=='15'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$back='15';
	
}
//weitrees
if($section=='9'){

	$a_area='15';
	$page='../sales/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$ybasket='basket';
	$back='9';
	
}
//restau area
if($section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	
	$back='10';
}
//bouaccarou area
if($section=='2'){

	$a_area='2';
	$page='../bauca/baucapage.php';	
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
$back='2';
	
}
//VIP Bar or Night Club
if($section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$back='18';
	
	
}
 ?>
        <div class="col-sm-4" >
        
      
      
      
          <div class="well">
           
       
    
       
       
         <!----------------------->
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','billing.php?area=<?php echo $section; ?>&tabs=<?php echo $table=$_GET['tabs']; ?>&db_basket=<?php echo $db_basket; ?>&db_table=<?php echo $_GET['dbtables']=$db_table; ?>&add=<?php echo $_GET['add']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $serial; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    <?php
	/////////////////commmand
	
	 if(isset($_GET['command'])){
		 $add=$_GET['command'];
	
	//////////////////update basket	 	
	$un1=$con->query("UPDATE 	$db_basket set status='3' where tab='$add' ") or die(mysqli_error($con));
	 }
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	 if(isset($_GET['add'])){
		 $add=$_GET['add'];
		 $un=$con->query("SELECT SUM(qty),price,qty,total,product FROM $db_basket where id='$add'") or die(mysqli_error($con));
		 while($df=$un->fetch_assoc()){
			 $prodc=$df['product'];
			 $pri=$df['price'];
			 $qtyt=$df['SUM(qty)'];
			  $tota=$df['total'];
			  $nqty=$qtyt+1;
			 $newtot=($nqty*$df['price']);
			  	
		 }
	//////////////////update basket	 	
	$un1=$con->query("UPDATE 	$db_basket set qty='$nqty' ,total='$newtot' where id='$add' limit 1") or die(mysqli_error($con));
	
	//CHECK PRODUCT TABLE	 and update		
	$a=$con->query("SELECT * FROM products where product='$prodc' and serial='$serial'") or die(mysqli_error($con));;
		 while($df=$a->fetch_assoc()){
			  $prodc=$df['product'];
			 $pri=$df['price'];
			 $ids=$df['pro_id'];
			 $qtyt=$df['quatity'];
			  $nqty=$qtyt-1;
			  	
		 }
		 //update product table
		 $un11=$con->query("UPDATE 	products set quatity='$nqty'   where pro_id='$ids' limit 1") or die(mysqli_error($con));
	
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?what=drink&area='.$_GET['area'].'&temp='.$_GET['temp'].'&tabs='.$_GET['tabs'].'">';
	 


	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $add=$_GET['reduce'];
		 $un=$con->query("SELECT SUM(qty),price,qty,total,product FROM $db_basket where id='$add'") or die(mysqli_error($con));
		 while($df=$un->fetch_assoc()){
			 $prodc=$df['product'];
			 $pri=$df['price'];
			 $qtyt=$df['SUM(qty)'];
			 $temp=$df['temp'];
			  $tota=$df['total'];
			  $nqty=$qtyt-1;
			 $newtot=($nqty*$df['price']);
			  	
		 }
		 	

		 
		 
	$un1=$con->query("UPDATE 	$db_basket set qty='$nqty' ,total='$newtot' where id='$add' limit 1") or die(mysqli_error($con));
	
	
//CHECK PRODUCT TABLE	 and update		
	$a=$con->query("SELECT * FROM products where product='$prodc' and serial='$serial'") or die(mysqli_error($con));;
		 while($df=$a->fetch_assoc()){
			  $prodc=$df['product'];
			 $pri=$df['price'];
			 $ids=$df['pro_id'];
			 $qtyt=$df['quatity'];
			  $nqty=$qtyt+1;
			  	
		 }
		 //update product table
		 $un11=$con->query("UPDATE 	products set quatity='$nqty'   where pro_id='$ids' limit 1") or die(mysqli_error($con));
	
	  echo '<meta http-equiv="Refresh" content="0; url=index.php?what=drink&area='.$_GET['area'].'&temp='.$_GET['temp'].'&tabs='.$_GET['tabs'].'">';
	 

	
	}
	
	
	
	
	
	
	
	?>
    
    
    <body onLoad="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


  </div>
</div>