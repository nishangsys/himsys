<?php
include 'db.php';
require_once 'functions/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
.login_form{
	width:800px;
	height:500px;
	margin:auto;
	position:relative;
	top:60px;
	background:#eee;
}
.fa-lock{
	color:#fff;
}
button{font-size:16px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #dcdcdc;
	padding:9px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	background:-ms-linear-gradient( top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ededed), color-stop(100%, #dfdfdf) );
	background-color:#ededed;
	color:#777777;
	margin-left:-20px;
	
	text-shadow:1px 1px 0px #ffffff;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	-moz-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	box-shadow:inset 1px 1px 0px 0px #ffffff;}
	
	.msessage_box{
	height:auto;
	padding:5px 0px;
	width:100%;
	margin:auto;
	color:#f00;
	font-weight:bold;
	background:#fff;
	text-align:center;

}

form input[type="text"],
form input[type="start"],
form select,
form input[type="text"]:focus,
form input[type="search"]:focus,
form input[type="code"]:focus,
form textarea:focus,
form select:focus{ 

		border-color: #4195fc;/* the focus color for a input box */
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
		width:80%;
		padding:10px 10px;
}
</style>
<title>

Admin Login Page</title>

</head>
<link href="style.css" type="text/css" rel="stylesheet" />
 <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<body onload="window.print();">

        
        <div class="head">
      
        
        
        </div>
        
        
        </div>

</div>
        
        
        
        
        
        
        </div>
     





<div class="login_form">
	<div class="msessage_box">
    <h1 style="background:#1188aa; color:#fff">
<i class="fa fa-key fa-2x"></i> Insert a License Key</h1>
</div>
    	<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        	<table height="300" class="none">
              <tr><td></td><td><input type="hidden" name="start" /></td></tr>
                    <tr><td></td><td><input type="hidden" name="end" /></td></tr>
                    <tr><td>License Code</td><td><input type="text" name="code" /></td></tr>
                  
              
                
               
             
                  <tr><td></td><td><button type="submit" name="signup" class="myButton">Insert License Key</button></td></tr>
                 
            </table>
        </form>
        <div class="butt"><a href="login.php">Login in to software</a></div>
</div>


</div>
</body>

<?php 
include 'dbc.php';
if(isset($_POST['signup'])){
	$code= $_POST['code'];
	if(strlen($code)<40)
{
	echo "<script>alert('WARNING! FAKE KEY. Try again and your software will be banned')</script>";	
	exit;
}

else{
	$checksoft="SELECT * from roll where roll_id='1' AND status='2' AND new!=0 ";
	$one=mysql_query($checksoft) or die (mysql_error());
    if(mysql_num_rows($one)>=1){		
	 echo "<script>alert('WARNING! YOU RE BE BANNED. You are trying to update key when you software has not Expired. ')</script>";
	 $message= "Sorry this software has expired. Contact the administartor";	
	
	}
	else {
	

	$start=sha1(date('Y/m/d'));
	$end=(date("Y/ m /d",strtotime('+1 years')));
	$code= sha1(date("Y/ m /d",strtotime('+1 years')));
	$status= 2;	
	
$select="SELECT * from roll where roll_id='1'";
$result1=mysql_query($select) or die(mysql_error());


if(mysql_num_rows($result1)>0){
	 $sel="UPDATE roll set date='$start', new='$end', code='$code',status='$status',r12='$end' where roll_id='1'" ;
			
			 $run=mysql_query($sel) or die (mysql_error());
			 echo "<script>alert('Successfully Updated Accounts.Thank You')</script>";
			  echo "<script>window.open('login.php')</script>";		
			 echo '<meta http-equiv="Refresh" content="2; url=login.php">';
}
else{

   
$sql="INSERT INTO roll set date='$start', new='$end', code='$code',status='$status'" ; 
	//$sql="INSERT INTO user values ('','$start','$codesha1',1,'$status') " ; 
	
       
	$result=mysql_query($sql) or die(mysql_error());
	
				
		  if ($result){
			
		
	echo "<script>alert('Registration Update your Product key Successful')</script>";	

		  } 
	/*end if num rows > 0*/
	else {
	echo "<script>alert('Error in registrying ')</script>";
	}
}

}
}
}
?>

</html>

