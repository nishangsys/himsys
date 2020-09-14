  
    
       
       
         <!----------------------->
         
<script language="JavaScript" src="../content/js/pop-up.js"></script>
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','../content/billing.php?tabs=<?php echo $table=$_GET['id']; ?>&adds=<?php echo $_GET['adds']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $_GET['our_staff']; ?>&dept=<?php echo $_GET['dep']; ?>',true); 
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
		 $qty=$_GET['qty']+1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update basket	 	
	$un1=$con->query("UPDATE 	basket set qty='$qty' ,total='$newtot' where id='$adds' limit 1") or die(mysqli_error($con));
	//////////////////update basket	
	$d1=$con->query("DELETE FROM 	basket WHERE qty<1") or die(mysqli_error($con)); 
	
	 echo '<meta http-equiv="Refresh" content="0; url=add_oservices.php?roll='.$_GET['id'].'&name='.$_GET['name'].'">';
	 


	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $idd=$_GET['reduce'];

		 $qty=$_GET['qty']-1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update basket	
	$d1=$con->query("DELETE FROM 	basket WHERE qty<1") or die(mysqli_error($con)); 	
	$un1=$con->query("UPDATE 	basket set qty='$qty' ,total='$newtot' where id='$idd' limit 1") or die(mysqli_error($con));
	
	
	  echo '<meta http-equiv="Refresh" content="0; url=add_oservices.php?roll='.$_GET['id'].'&name='.$_GET['name'].'">';
	
	
	}
	
	
	
	
	
	
	
	?>
    
    
    <body onLoad="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


  </div>
</div>