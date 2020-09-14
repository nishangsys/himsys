<style>
div.callout {
	height: 60px;
	width: 200px;
	float: left;
}

div.callout {
	background-color: #444;
	background-image: -moz-linear-gradient(top, #444, #444);
	position: relative;
	color: #ccc;
	padding: 10px;
	border-radius: 3px;
	box-shadow: 0px 0px 20px #999;
	margin: 25px;
	min-height: 50px;
	border: 1px solid #333;
	text-shadow: 0 0 1px #000;
	
	/*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

.callout::before {
	content: "";
	width: 0px;
	height: 0px;
	border: 0.8em solid transparent;
	position: absolute;
}

.callout.top::before {
	left: 45%;
	bottom: -20px;
	border-top: 10px solid #444;
}

.callout.bottom::before {
	left: 45%;
	top: -20px;
	border-bottom: 10px solid #444;
}

.callout.left::before {
	right: -20px;
	top: 40%;
	border-left: 10px solid #444;
}

.callout.right::before {
	left: -20px;
	top: 40%;
	border-right: 10px solid #444;
}

.callout.top-left::before {
	left: 7px;
	bottom: -20px;
	border-top: 10px solid #444;
}

.callout.top-right::before {
	right: 7px;
	bottom: -20px;
	border-top: 10px solid #444;
}

</style>


<script>
document
	.querySelectorAll('body')[0]
	.style
	.backgroundColor = 'whiteSmoke';

</script>

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
        }
		else {
			 echo "
        <span style='color:#666; background:#1188aa; width:100%; margin-left:50px; color:#fff; padding:10PX 30PX'>".$row['message']."</span>";
		
				//echo "<embed loop='false' src='../alarm.mp3' hidden='true' autoplay='true' ";

		}
		
		
		
		 
		?>
        <span style="color:#09C; float:right"><?php 
		
		
		 $curenttime=$row['date'];
  $time_ago =strtotime($curenttime);
  echo timeAgo($time_ago); ?></span>
  <?php
   $dats=date('d-m-Y');
		$HOUR=date('h');
		$sec=date('i');
			$mminsec=date('s');
		 
		 $om=("SELECT * from chat where name='".$_SESSION['user_name']."'  and date2='$dats' and hour='$HOUR' and sec='$sec'  order by id DESC  ") ;
		 $r=mysql_query($om) or die(mysql_error());
		if(mysql_num_rows($r)>0){
			
						 echo "<embed loop='false' src='../img/mail.ogg' hidden='true' autoplay='true'  ";

		}
		else {
			echo "";
		}
  
  ?>
  
  <hr />
  
 
         <?php } ?>
         
         <?php
		 
		 ?>
         
         </p>
        </div>
       