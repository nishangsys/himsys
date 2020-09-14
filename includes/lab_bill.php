

      
    
       
       
         <!----------------------->
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','lab_billing.php?area=pharmcy&tabs=<?php echo $table=$_GET['id']; ?>&adds=<?php echo $_GET['adds']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $_GET['my_labtec']; ?>&dept=<?php echo $_GET['dep']; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    <?php
	/////////////////commmand
	
	 if(isset($_GET['command'])){
		 $adds=$_GET['command'];
	
	//////////////////update basket	 	
	$un1=$con->query("UPDATE basket set status='3' where tab='$adds' and status='1' ") or die(mysqli_error($con));
	
	$da=mysql_query  ("DELETE FROM basket WHERE qty<1") or die(mysql_error());
	 }
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	 if(isset($_GET['adds'])){
		 echo $adds=$_GET['adds'];
		 $un=$con->query("SELECT SUM(qty),price,qty,total,product FROM basket where id='$adds'") or die(mysqli_error($con));
		 while($df=$un->fetch_assoc()){
			 $prodc=$df['product'];
			 $pri=$df['price'];
			 $qtyt=$df['SUM(qty)'];
			  $tota=$df['total'];
			  $nqty=$qtyt+1;
			 $newtot=($nqty*$df['price']);
			  	
		 }
	//////////////////update basket	 	
	$un1=$con->query("UPDATE 	basket set qty='$nqty' ,total='$newtot' where id='$adds' limit 1") or die(mysqli_error($con));
	
	/*CHECK PRODUCT TABLE	 and update		
	$a=$con->query("SELECT * FROM finals where name='$prodc'") or die(mysqli_error($con));;
		 while($df=$a->fetch_assoc()){
			  $prodc=$df['name'];
			 $pri=$df['price'];
			 $ids=$df['id'];
			 $qtyt=$df['qty'];
			  $nqty=$qtyt-1;
			  	
		 }
		 //update product table
		 $un11=$con->query("UPDATE 	finals set qty='$nqty'   where id='$ids' limit 1") or die(mysqli_error($con));
	*/
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?my_labtec='.$_GET['my_labtec'].'&dep='.$_GET['dep'].'&id='.$_GET['id'].'&name='.$_GET['my_labtec'].'">';

	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $adds=$_GET['reduce'];
		 $un=$con->query("SELECT SUM(qty),price,qty,total,product FROM basket where id='$adds'") or die(mysqli_error($con));
		 while($df=$un->fetch_assoc()){
			 $prodc=$df['product'];
			 $pri=$df['price'];
			 $qtyt=$df['SUM(qty)'];
			 $temp=$df['temp'];
			  $tota=$df['total'];
			  $nqty=$qtyt-1;
			 $newtot=($nqty*$df['price']);
			  	
		 }
		 	

		 
		 
	$un1=$con->query("UPDATE 	basket set qty='$nqty' ,total='$newtot' where id='$adds' limit 1") or die(mysqli_error($con));

	 echo '<meta http-equiv="Refresh" content="0; url=index.php?my_labtec='.$_GET['my_labtec'].'&dep='.$_GET['dep'].'&id='.$_GET['id'].'&name='.$_GET['my_labtec'].'">';

	
	}
	
	
	
	
	
	
	
	?>
    
    
    <body onLoad="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


  </div>
</div>