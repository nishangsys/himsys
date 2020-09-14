<div class="chat_box">
    <?php
	include '../dbc.php';
require_once '../functions/functions.php';
@session_start();
	$usn=$_SESSION['user_name'];
	$ids= $_SESSION['id'];
	$ol=mysql_query("SELECT * from chat where yourid='$ids' or sentto='$ids'  order by id DESC") or die(mysql_error());
	$i=1;
	while($row=mysql_fetch_assoc($ol)){
	 
	?>
    
    	<div class="chat_data">
    
      
        <p style="margin-top:10PX;
">
        <span>
      

        
        <span style="color:#333">Sent by<span style="color:#906; font-weight:bold">  <?php
		$sender=$row['sentby'];
		if($sender==$usn){
		echo "Me";
		}
		else {
		echo "$sender";
		}
		 ?></span></span>
         <?php
		 if($sender==$usn){
			 echo "
        <span style='color:#666; background:#6F6; width:100%; padding:10PX 30PX'>".$row['message']."</span>";
		//echo "<embed loop='false' src='../alarm.mp3' hidden='true' autoplay='true' ";
        }
		else {
			 echo "
        <span style='color:#666; background:#1188aa; width:100%; margin-left:50px; color:#fff; padding:10PX 30PX'>".$row['message']."</span>";
		
				

		}
		?>
        <span style="color:#09C; float:right"><?php 
		
		
		$curenttime=$row['date'];
  $time_ago =strtotime($curenttime);
  echo timeAgo($time_ago); ?></span>
  <span></span>
  <hr />
  
 
         <?php } ?>
         
         <?php
		 
		 ?>
         
         </p>
        </div>
       