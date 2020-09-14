 <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">
    	        <META HTTP-EQUIV="REFRESH" CONTENT="5">
              
  
		                                <div class="col-md-8">

<?php
include '../dbc.php';
include '../function/functions.php';

@session_start();
 $id=$_SESSION['id'];
  $r=$_GET['id'];
$sentby=$_GET['ids'];
$query1 = $con->query("SELECT * FROM users where id='$id'") or die(mysqli_error($con));
		   while($rows = $query1->fetch_assoc()) {
			    $branch=$rows['country'];
		   }
 $bgy=mysql_query("SELECT * FROM chat where  sentto='".$id."' and yourid='".$sentby."' or yourid='".$id."'and sentto='".$sentby."'  order by id DESC  ") or die(mysql_error());
while($ro=mysql_fetch_assoc($bgy)){
	
	
?>

<div class="callout" style="background:<?php if($ro['sentto']==$id){
	echo "#0F6";
	echo ";color:#000; text-shadow:none;";
}
else{
	echo "#F99; color:#000; text-shadow:none;";
	
}?>; line-height:1.5; height:auto; "><span style="width:70%">


<span style="font-size:12px; color:#000; position:absolute; top:10px; left:10px; clear:both"> Message sent by:<span style="color:#fff; font-weight:bold"> <?php echo $ro['sentby'];
 $der=$ro['date2'];
 if( date('YmdGis')==$der){
 echo '<script type="text/javascript">play_sound();</script>';
	}
if($ro['date2']==date('YmdGis')){
echo ' <audio id="myAudio" autoplay="autoplay">
  <source src="notify.ogg" type="audio/ogg">
  <source src="notify.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
}
else {
}


 ?></span>

</span>
<!--close span for sender--->


<span style="font-size:12px; color:#999; position:absolute; top:10px; right:10px; clear:both"><?php	
		$curenttime=$ro['date'];
  $time_ago =strtotime($curenttime);
  echo timeAgo($time_ago); ?><span style="margin:5px 5px">
  
  


</span></span><br>

<?php if($ro['yourid']!=$user_id){
	echo $ro['message'];	
}
else{
		echo "<a href='messages.php?id=".$ro['id']."' class='links' target='_blank'> ".$ro['message']."</a>";

}?>
</span>


</div>

<?php } ?>