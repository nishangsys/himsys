<?php

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
 $result=mysql_query("SELECT * from staffs where matric='".$txtbarcode."' and matric!='' ") ;
$count=mysql_num_rows($result);
while ($row=mysql_fetch_assoc($result)){
	 $ban=$row['banned'];
	 $dd=$row['again'];
?>
<br>
<?php 
if($count>1){
	echo "<span style='color:#f00; margin-left:40px; font-size:20px; text-align:center; font-weigh:bold'>
	
	SORRY  ".$row['name']."  Has been Suspened. Thank You.</span>
	
	";
}

	
	
else if($ban=='2'){
	echo "<span style='color:#f00; margin-left:40px; font-size:20px; text-align:center; font-weigh:bold'>
	
	SORRY  ".$row['name']."  Has been Suspened. Thank You.</span>
	
	";
}

	else if($ban=='3'){
	echo "<span style='color:#f00; margin-left:40px; font-size:20px; text-align:center; font-weigh:bold'>
	
	SORRY  ".$row['name']."  Is no Longer our Staff. Thank You.</span>
	
	";
}
	
		
	
	else {
		$date=date('d-m-Y');
		$month=date('m');
		$year=date('Y');
		$names=$row['name'];
		$shift=$row['shift'];
		$mat=$row['matric'];
		$time=date('G:i');
		$c=mysql_query("SELECT * FROM staff_reg where matric='$mat' and date='$date' and checkin!='' ") or die(mysql_error());
		if(mysql_num_rows($c)>0){
			echo "<script>alert('ERROR. ".$names." is alreay Checked In Today. Thank You')</script>";
		}
		else {
		
		$ok=mysql_query("INSERT INTO staff_reg set date='$date',month='$month',year='$year',checkin=now(),
		name='$names',shift='$shift',matric='$mat' ") or die(mysql_error());
		$ok=mysql_query("UPDATE staffs set level='2' WHERE  matric='$mat' LIMIT 1") or die(mysql_error());


?>
<div style="width:250px; height:250px; float:left; border:1px solid#000; margin-left:30px">
<img src="album/<?php echo $row['photo']; ?>" style="width:250px; height:250px">
</div>

<div style="width:550px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#fff; background:#088389; float:left; border:1px solid#000; margin-left:30px">
<?php echo $row['name']; ?>
</div>



<div style="width:550px; margin-top:20px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#fff; background:#088389; float:left; border:1px solid#000; margin-left:30px">
<?php echo $row['age']; ?>(<?php echo $row['inter']; ?>)
</div>



<div style="width:230px; margin:auto; margin-top:20px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#ff0; background:#f00; border:1px solid#000; margin-left:30px">
<div id="pageInfo">
<script>
 redirect();
</script>

</div>


</div>

   <?php } } }?>
    </div>
    </div>
   
    
  
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } ?>