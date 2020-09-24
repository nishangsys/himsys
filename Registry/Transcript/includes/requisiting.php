<script language="JavaScript" src="js/pop-up.js"></script>
  
      
    Validate 
     </A> 

      
    
       <?php $name=$_GET['our_staff'];
	         $dept=$_GET['dep'];
			 $r_id=$_GET['req_id'];
			  $idd=$_GET['id'];
	   ?>
       
         <!----------------------->
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','req_billing.php?tabs=<?php echo $table=$_GET['id']; ?>&adds=<?php echo $_GET['adds']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $name; ?>&dept=<?php echo $dept; ?>&yid=<?php echo $r_id; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    <?php
	/////////////////commmand
	
	 if(isset($_GET['command'])){
		 $adds=$_GET['command'];
	
	//////////////////update requisitions	 	
	$un1=$con->query("UPDATE requisitions set status='3' where tab='$adds' and status='1' ") or die(mysqli_error($con));
	
	$da=mysql_query  ("DELETE FROM requisitions WHERE qty<1") or die(mysql_error());
	 }
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	 if(isset($_GET['adds'])){
		 echo $adds=$_GET['adds'];
		
	$da=mysql_query  ("DELETE FROM requisitions WHERE id='$adds' ") or die(mysql_error());
	 
	
	 echo '<meta http-equiv="Refresh" content="0; url=sales.php?our_staff='.$_GET['our_staff'].'&dep='.$_GET['dep'].'&id='.$_GET['id'].'&name='.$_GET['our_staff'].'">';

	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $adds=$_GET['reduce'];
	
	$da=mysql_query  ("DELETE FROM requisitions WHERE id='$adds' ") or die(mysql_error());
	 
	 echo '<meta http-equiv="Refresh" content="0; url=sales.php?our_staff='.$_GET['our_staff'].'&dep='.$_GET['dep'].'&id='.$_GET['id'].'&name='.$_GET['our_staff'].'">';

	
	}
	
	
	
	
	
	
	
	?>
    
    
    <body onLoad="ajax();">

		<div id="chat"></div>
		</div>
   
  
   


  </div>
</div>