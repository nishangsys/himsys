<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ATTENANCE</title>


<style>
 html, body, h1 {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: hsl(2, 57%, 40%);
background-image: repeating-linear-gradient(transparent, transparent 50px, rgba(0,0,0,.4) 50px, rgba(0,0,0,.4) 53px, transparent 53px, transparent 63px, rgba(0,0,0,.4) 63px, rgba(0,0,0,.4) 66px, transparent 66px, transparent 116px, rgba(0,0,0,.5) 116px, rgba(0,0,0,.5) 166px, rgba(255,255,255,.2) 166px, rgba(255,255,255,.2) 169px, rgba(0,0,0,.5) 169px, rgba(0,0,0,.5) 179px, rgba(255,255,255,.2) 179px, rgba(255,255,255,.2) 182px, rgba(0,0,0,.5) 182px, rgba(0,0,0,.5) 232px, transparent 232px),
repeating-linear-gradient(270deg, transparent, transparent 50px, rgba(0,0,0,.4) 50px, rgba(0,0,0,.4) 53px, transparent 53px, transparent 63px, rgba(0,0,0,.4) 63px, rgba(0,0,0,.4) 66px, transparent 66px, transparent 116px, rgba(0,0,0,.5) 116px, rgba(0,0,0,.5) 166px, rgba(255,255,255,.2) 166px, rgba(255,255,255,.2) 169px, rgba(0,0,0,.5) 169px, rgba(0,0,0,.5) 179px, rgba(255,255,255,.2) 179px, rgba(255,255,255,.2) 182px, rgba(0,0,0,.5) 182px, rgba(0,0,0,.5) 232px, transparent 232px),
repeating-linear-gradient(125deg, transparent, transparent 2px, rgba(0,0,0,.2) 2px, rgba(0,0,0,.2) 3px, transparent 3px, transparent 5px, rgba(0,0,0,.2) 5px);
            color: #d5d4ff;
            overflow: hidden
        }
		.do{
			width:70%;
			height:200px;
			background:#0700DC;
			opacity:0.8;
			margin:300px auto;
			border:5px solid#000;
			border-radius:30px 30px 30px 30px;
			
		}
		H1{
			text-align:center;

background-color: #666666;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: rgba(255,255,255,0.5) 0px 3px 3px;
	font-size:44px;
		}

</style>
<script type="text/javascript">
    function play_sound() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'images/w.ogg');
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
</head>

<body>
<div class="do">

   <div style="width:100%; height:auto; overflow:hidden; border:1px solid#088389;			border-radius:30px 30px 0px 0px;
; padding-bottom:30px; background:#2F02A7" > 
  <h1>HIMS STAFF ATTENANCE</h1>
<form action="" method="POST">
<table border=0 align=center style="background:#088389; color:#fff">
<tr><td></td><td><input type="text" name="barcode" style="padding:10px 10px; width:600px" autofocus /></td>
</tr>

</form>
</table>


  
    <?php
	
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","staffs"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

if(isset($_POST['barcode'])){

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
	 
	 $c=mysql_query("SELECT * FROM staff_reg where   matric='$mat'  AND checkout=''  order by id DESC LIMIT 1    ") or die(mysql_error());
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

echo ' <audio id="myAudio" autoplay="autoplay">
  <source src="w.ogg" type="audio/ogg">
  <source src="w.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
	
			 ;
		}

}
}
?>






</div>
    </div>
    </div>
   </div>
   <DIV style="margin:auto; width:400px; margin-top:-300PX; height:400px; ">
<iframe src="clock/clock.php">
</DIV>
    
  
	<div class="clear"></div>		
		 		

</div>
</body>
</html>