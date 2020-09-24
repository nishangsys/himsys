  
    
       
       
         <!----------------------->
         
<script language="JavaScript" src="../js/pop-up.js"></script>
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','../laundry/billing.php?tabs=<?php echo $table=$_GET['roll']; ?>&adds=<?php echo $_GET['adds']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $_GET['our_staff']; ?>&dept=<?php echo $_GET['dep']; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    <?php
	/////////////////commmand
	
	 if(isset($_GET['command'])){
		 $adds=$_GET['command'];
	
	//////////////////update laundry	 	
	$un1=$con->query("UPDATE laundry set status='3' where tab='$adds' and status='1' ") or die(mysqli_error($con));
	
	$da=mysql_query  ("DELETE FROM laundry WHERE qty<1") or die(mysql_error());
	 }
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	 if(isset($_GET['adds'])){
		 echo $adds=$_GET['adds'];
		 $qty=$_GET['qty']+1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update laundry	 	
	$un1=$con->query("UPDATE 	laundry set qty='$qty' ,total='$newtot' where id='$adds' limit 1") or die(mysqli_error($con));
	//////////////////update laundry	
	$d1=$con->query("DELETE FROM 	laundry WHERE qty<1") or die(mysqli_error($con)); 
	
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?go_ahead&link='.$_GET['link'].'&roll='.$_GET['id'].'">';
	 


	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $idd=$_GET['reduce'];
	 echo
		 $qty=$_GET['qty']-1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update laundry	
	$d1=$con->query("DELETE FROM 	laundry WHERE qty<1") or die(mysqli_error($con)); 	
	$un1=$con->query("UPDATE 	laundry set qty='$qty' ,total='$newtot' where id='$idd' limit 1") or die(mysqli_error($con));
	
	
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?go_ahead&link='.$_GET['link'].'&roll='.$_GET['id'].'">';
	
	}
	
	
	
	
	
	
	
	?>
    
    
    <body onLoad="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


  </div>
</div>