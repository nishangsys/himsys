<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

		<!--//webfonts-->
        <style>
.option{
	padding:20px 20px;
}
		</style>
</head>




<body>

<div class="right">
<h1>General Categories</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?checkout">
<table>
<tr><td>
Choose a Category here</td><td><select name="check" style="width:650px; padding:10px 0px">

<option value="1" class="option">Those who Checked In Today , Paid some money  and Wants to Cancel their Stay</option>
<option value="2" class="option">Those who CheckedIn, Paid some money, Stayed for some days and wants to leave </option>
<option value="3" class="option">Those who CheckedIn, Paid Nothing, Stayed for some days and wants to leave </option>
<option value="4" class="option">Those who CheckedIn, Paid some money, Stayed longer than the Prescribed period </option>

<option value="5" class="option">Those who CheckedIn, Paid Nothing, Stayed longer than the Prescribed period </option>

</select></td><td><button name="search" type="submit">Search</button>

</table>
</form>
<?php
$time1 = '12:58:00';
$time2 = '15:00:45';
list($hours, $minutes) = explode(':', $time1);
$startTimestamp = mktime($hours, $minutes);

list($hours, $minutes) = explode(':', $time2);
$endTimestamp = mktime($hours, $minutes);

$seconds = $endTimestamp - $startTimestamp;
$minutes = ($seconds / 60) % 60;
$hours = floor($seconds / (60 * 60));

echo "Time passed: <b>$hours</b> hours and <b>$minutes</b> minutes";

	
$one=$_POST['check'];

if(isset($_POST['search'])){
	if($one==1){
		echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?quit">';
	}
	elseif($one==2){
		
				echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?check1">';

	}
	elseif($one==3){
		
				echo '<meta http-equiv="Refresh" content="1; url=frontpage.php?check2">';

	}
	elseif($one==4){
		
				echo '<meta http-equiv="Refresh" content="1; url=frontpage.php?overtime">';

	}
	elseif($one==5){
		
				echo '<meta http-equiv="Refresh" content="1; url=frontpage.php?zquit">';

	}
	
	
	
}
?>

 <div style="width:280px; height:auto;overflow:hidden;padding-bottom:20px; background:#eee; margin:5px 10px; border-bottom:1px solid#ccc; float:left">
  <h1 style="background:#00B1BA; color:#fff; text-align:center; padding:10px 0px; margin:0px;">Departure for Today's Arrival &nbsp;<i class="fa fa-thumbs-o-down fa-2x"></i></h1>
  <p style="font-weight:bold; padding:0px 5px; font-size:16px; line-height:1.6">
  <span style="color:#f00">The Category is for Clients who logged in today and wish to cancell their logging</span><br><br>
  <a href="frontpage.php?quit" target="_blank" style="margin-left:30px; text-decoration:blink; background:#00B1BA; padding:10px 10px; color:#fff; font-size:18px">Check Out a Client</a>
  
  </p>
  </div>

  <div style="width:280px; height:auto;overflow:hidden;padding-bottom:20px; background:#eee; margin:5px 10px; border-bottom:1px solid#ccc; float:left">
  <h1 style="background:#00B1BA; color:#fff; text-align:center; padding:10px 0px; margin:0px;">Cash Paid Category &nbsp;<i class="fa fa-thumbs-o-up fa-2x"></i></h1>
  <p style="font-weight:bold; padding:0px 5px; font-size:16px; line-height:1.6">
  This Category is for Clients that <span style="color:#f00">have Paid at Least 1Frs</span> or have paid in something before Taking a Room<br><br>
  <a href="frontpage.php?check1" target="_blank" style="margin-left:30px; text-decoration:blink; background:#00B1BA; padding:10px 10px; color:#fff; font-size:18px">Check Out a Client</a>
  
  </p>
  </div>
  
 <div style="width:280px; height:auto;overflow:hidden;padding-bottom:20px; background:#eee; margin:5px 10px; border-bottom:1px solid#ccc; float:left">
  <h1 style="background:#00B1BA; color:#fff; text-align:center; padding:10px 0px; margin:0px;">Zero Paid Category &nbsp;<i class="fa fa-thumbs-o-down fa-2x"></i></h1>
  <p style="font-weight:bold; padding:0px 5px; font-size:16px; line-height:1.6">
  This Category is for Clients that<span style="color:#f00"> have not Paid  a Franc</span> or have paid nothing in  before Taking a Room<br><br>
  <a href="frontpage.php?check2" target="_blank" style="margin-left:30px; text-decoration:blink; background:#00B1BA; padding:10px 10px; color:#fff; font-size:18px">Check Out a Client</a>
  
  </p>
  </div>
  
 
  <div style="width:100%; height:0px; clear:both"></div>
  
 <h1>Over Time Category (Those who have Spend more than the Days they paid for)</h1> 
  
    
 <div style="width:280px; height:auto;overflow:hidden;padding-bottom:50px; background:#eee; margin:5px 10px; border-bottom:1px solid#ccc; float:left">
  <h1 style="background:#00B1BA; color:#fff; text-align:center; padding:10px 0px; margin:0px;">Over Time Paid Category &nbsp;<i class="fa fa-thumbs-o-down fa-2x"></i></h1>
  <p style="font-weight:bold; padding:0px 5px; font-size:16px; line-height:1.6">
  This Category is for Clients that<span style="color:#f00"> have stayed more than the days they paid for</span><br><br>
  <a href="frontpage.php?overtime" target="_blank" style="margin-left:30px; text-decoration:blink; background:#00B1BA; padding:10px 10px; color:#fff; font-size:18px">Check Out a Client</a>
  
  </p>
  </div>
  
  
   <div style="width:280px; height:auto;overflow:hidden;padding-bottom:20px; background:#eee; margin:5px 10px; border-bottom:1px solid#ccc; float:left">
  <h1 style="background:#00B1BA; color:#fff; text-align:center; padding:10px 0px; margin:0px;">Over time Zero Payment &nbsp;<i class="fa fa-thumbs-o-down fa-2x"></i></h1>
  <p style="font-weight:bold; padding:0px 5px; font-size:16px; line-height:1.6">
  <span style="color:#f00">The Category is for Clients who stayed longer than the days paid for and they have paid nothing sofar </span><br><br>
  <a href="frontpage.php?zquit" target="_blank" style="margin-left:30px; text-decoration:blink; background:#00B1BA; padding:10px 10px; color:#fff; font-size:18px">Check Out a Client</a>
  
  </p>
  </div>
   
    </div>
    
    
   
    </div>
	-->
    
   
			
		 		
</body>
</html>
<?php } } ?>