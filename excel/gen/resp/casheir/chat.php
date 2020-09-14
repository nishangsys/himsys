<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	       
<title></title>
<script language="javascript">
function playIt()
{
   document.getElementById("embed").innerHTML="<embed src='notify.mp3' autostart=true loop=false volume=300 hidden=true>";
   return true;
}
</script>

</head>
<link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-----script---->

<body>
<?PHP
@session_start();
$user=$_SESSION['id'];
	$a = $con->query("SELECT * FROM users where id='".$user."'") or die(mysqli_error($con));
		while($rows = $a->fetch_assoc()) {
			$branche=$rows['country'];
			$img=$rows['image']; 
			$namse=$rows['full_name']; 
			}
?>
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['send'])){
	
	
	$_POST = array_map("ucwords", $_POST);
	$date=date('Y-m-d G:i:s');
	$date2=date('YmdGis');
	
	$namef=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$name);
  @session_start();
  $user_id=$_SESSION['id'];
  $name=$namse;
  $branch=$branche;
 echo $sento=$_POST['sentto'];
 

	
	$mess=$_POST['comment'];
	$by=$con->query("INSERT INTO chat set name='$name',date='$date',message='$mess',sentby=' $branch',yourid='".$user_id."',sentto='".$_GET['ids']."',date2='$date2',file='$namef',receiver='".$_GET['id']."'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success' style='background:#FF9'>Message Sent</div>";

}

?>

 
              <div class="row" >
              
  
		                                <div class="col-md-8">
                                        <h2>Chatting with <?php echo $_GET['id']; ?> Branch</h2>
       
               <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="messages.php?id=<?php echo $_GET['id']; ?>&ids=<?php echo $_GET['ids']; ?>" style="height:300px; "></iframe>
</div>
 
 
 
 <?php
											   echo $message;

										?>

 <div class="form-group">
  <input type="hidden"  class="form-control" id="pwd" value="<?php echo $_GET['id']; ?>" name="sentto"  >
 <form method="post" action="">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
</div>


      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">File:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="pwd"  name="photo" value="0">
      </div>
    </div>
   
 
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success"  name="send" onclick="playAudio()" >Submit</button>
      </div>
    </div>
  </form>
  </div>
                           
         
     


 <div class="col-sm-4">
    <div class="well">
      <h3>Online Users</h3>
      
                 
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat_box').innerHTML = req.responseText;
		} 
		}
		req.open('GET','user_online.php?id=<?php echo $_GET['branch']; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    
    
    
    
    
    
    <body onload="ajax();">



		<div id="chat_box"  >
		<div id="chat"></div>
		</div>
<!---------------------emd  ajax here -------------->
    <audio id="myAudio">
  <source src="notify.ogg" type="audio/ogg">
  <source src="notify.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<script>
var x = document.getElementById("myAudio");

function playAudio() {
    x.play();
}

function pauseAudio() {
    x.pause();
}
</script>
  
             
     </div>  
    
 </div>
 </div>
 