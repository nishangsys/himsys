<?php
date_default_timezone_set('Africa/Douala');
require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISAHNG</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
       
		<!--//webfonts-->
</head>
<script type="text/javascript">
    function play_sound() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'w.ogg');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.load();
        audioElement.play();
    }
</script>




<script language="JavaScript" type="text/javascript">
var seconds =5;
var url="<?php echo $_SERVER['SELF']; ?>?check_in";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("pageInfo").innerHTML = "redirecting in "+seconds+" seconds."
  setTimeout("redirect()", 1000)
 }
}
</script>


<body>

<div class="right">
<h1>Staff Attendance</h1>

    <div style="width:98%; height:auto; overflow:hidden; border:1px solid#088389; padding-bottom:30px" > 
  
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border=0 align=center style="background:#088389; color:#fff">
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" style="padding:10px 10px; width:300px" autofocus /></td>
</tr>

</form>
</table>

   
  
    <?php
$txtbarcode=$_POST['barcode'];
$today=date('d-m-Y');

 $result=mysql_query("SELECT * from staffs where matric='".$txtbarcode."' and matric!='' and banned='0' ") ;
$count=mysql_num_rows($result);
while ($row=mysql_fetch_assoc($result)){
	 $ban=$row['banned'];
	 $dd=$row['again'];
	 $mat=$row['matric'];
	 date_default_timezone_set('Africa/Douala');
		$date=date('d-m-Y');
		$month=date('m');
		$year=date('Y');
		$names=$row['name'];
		$shift=$row['shift'];
		$mat=$row['matric'];
	 $tz=date('Y-m-d G:i:s');
		 $time=date('G:i:s');
}
if(mysql_num_rows($result)<1){
	echo ' <audio id="myAudio" autoplay="autoplay">
  <source src="try.ogg" type="audio/ogg">
  <source src="try.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
	
}
else {
	 
	 $c=mysql_query("SELECT * FROM staff_reg where   matric='$mat' and date='$date' AND checkout=''  order by id DESC LIMIT 1    ") or die(mysql_error());
		if(mysql_num_rows($c)>0){	
		
			while($rows=mysql_fetch_assoc($c)){
			
			 $curenttime= $rows['checkin'];
			  
  $time_ago =strtotime($curenttime);
 $cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
 $hours 		= round($time_elapsed / 3600); 
			}
			if($minutes<=59){
				$used=$minutes ;
			}
			else {
				$used=0;
			}
$ok=mysql_query("UPDATE staff_reg set checkout='$tz',used='$hours',shift='$used' WHERE  name='$names' and matric='$mat' ORDER BY id DESC LIMIT 1  ") or die(mysql_error());

echo ' <audio id="myAudio" autoplay="autoplay">
  <source src="bye.ogg" type="audio/ogg">
  <source src="bye.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
	
		}
		else {
			$ok=mysql_query("INSERT INTO staff_reg set date='$date',month='$month',year='$year',checkin='$tz',
		name='$names',shift='$shift',matric='$mat' ") or die(mysql_error());
		$ok=mysql_query("UPDATE staffs set level='2' WHERE  matric='$mat' LIMIT 1") or die(mysql_error());


			 echo '<script type="text/javascript">play_sound();</script>';
			 echo 1222;
		}

}
?>






</div>
    </div>
    </div>
   
    
  
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } ?>