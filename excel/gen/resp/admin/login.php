<?php 
/*************** PHP LOGIN SCRIPT V 2.3*********************
(c) Balakrishnan 2009. All Rights Reserved

Usage: This script can be used FREE of charge for any commercial or personal projects. Enjoy!

Limitations:
- This script cannot be sold.
- This script should have copyright notice intact. Dont remove it please...
- This script may not be provided for download except from its original site.

For further usage, please contact me.

***********************************************************/
include '../dbc.php';

$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if ($_POST['doLogin']=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


$user_email = $data['usr_email'];
$pass = $data['pwd'];


if (strpos($user_email,'@') === false) {
    $user_cond = "user_name='$user_email'";
} else {
      $user_cond = "user_email='$user_email'";
    
}

	 $one="SELECT `id`,`pwd`,`approved`,`user_level` FROM users WHERE 
           $user_cond
			AND `approved` = '2'
			";
$result = mysql_query($one) or die (mysql_error()); 
$num = mysql_num_rows($result);



  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$full_name,$approved,$user_level) = mysql_fetch_row($result);
	
	if(!$approved) {
	//$msg = urlencode("Account not activated. Please check your email for activation code");
	$err[] = "Account not activated. Please check your email for activation code";
	
	//header("Location: login.php?msg=$msg");
	 //exit();
	 }
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     
		@session_start();
		$one="SELECT * FROM users WHERE 
           user_name='".$_POST['usr_email']." '";
			
$result = mysql_query($one) or die (mysql_error()); 
		while($row=mysql_fetch_array($result)){
			$userID= $row['id'];
			$username=$row['user_name'];
			//$password=$row['banned'];
			$status=$row['banned'];
			
		}
		
		$_SESSION['user_name']= $username;
		$_SESSION['id']= $userID;
		//$_SESSION['password']= $password;
		$_SESSION['banned']= $status;
		
		
		if ($status == '5') 
{ 

			echo '<meta http-equiv="Refresh" content="0; url= ../reception/frontpage.php">';
					
} 
else if ($status == 20) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=adminpage.php">';
	 
}
else if ($status == 100) 
{ 
  
			echo '<meta http-equiv="Refresh" content="0; url= ../acc/accpage.php">';
}
else if ($status == 10) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../restau/restaupage.php">';
	 
}
else if ($status == 15) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../bar/restaupage.php">';
	 
}


else if ($status == 2) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../bauca/baucapage.php">';
	 
}

else if ($status == 16) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= store/stockpage.php">';
	 
}

else if ($status == 17) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../rental/rentalpage.php">';
	 
}


else if ($status == 18) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../VIP/clubpage.php">';
	 
}

else if ($status == 101) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../chiefs/dashboard.php">';
	 
}

else if ($status == 150) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../chiefs/dashboard.php">';
	 
}

else if ($status == 6) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= ../chiefreceipt/frontpage.php">';
	 
	 
}


//bar sales agent
else if ($status == 9) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=../sales/restaupage.php?area=Bartender">';
	 
}



else if ($status == 00) 
{ 
   echo "<script>alert('Error. Your Username and Password is Wrong so try again')</script>";; 
}
	}
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Login. Please try again with correct user email and password.";
		echo '<meta http-equiv="Refresh" content="1; url=401.php">';
		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "Error - Invalid login. No such user exists";
		echo '<meta http-equiv="Refresh" content="1; url=401.php">';
	  }		
}
					 
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
	  $PRO=$rows['as3'];
 }					 

?>
<html>
<head>
<title>Members Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
  <script>
  $(document).ready(function(){
    $("#logForm").validate();
  });
  </script>
<link href="../styles.css" rel="stylesheet" type="text/css">
<style>
body{
	background:#eee url(../images/9.jpg);
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	margin:0px;
	padding:0px;
}
tr,td{
	font-weight:bold;
	color:#000;
	
	padding:10px 10px;
	
}
</style>

</head>

<body>


<div class="heads" style="border-bottom:2px dashed#09F; opacity:0.7;
			background:#010163;">

<div class="fhead">


<div class="fh_left">
<h2><?php echo $clients; ?> <?PHP echo $PRO; ?> </h2>
<h3>Beauty outside, Best Inside </h3>
<h4><?php echo $TEL; ?> </h4>

</div>






</DIV>
<div class="box" style="opacity:0.9;
			background:#010163; width:40%;
margin:auto; margin-top:80px; -o-box-shadow:-2px 5px 12px 1px #666; 
  -moz-box-shadow: -2px 5px 12px 1px #666;
-webkit-box-shadow: -2px 5px 12px 1px #666;
box-shadow: -2px 5px 12px 1px #666;">

<div style="width:100%; background:#000; height:100px; margin:auto; border:1px solid#000">


<div style=" float:left; padding:5PX 0PX; background:#000; height:100px; margin:auto; border:1px solid#000; color:#FFF; font-weight:bold; font-size:36px; text-shadow:2px 2px solid#000"><BR>NISHANG</div>


<div style=" float:left; width:30%; padding:5PX 0PX; background:#000 url(images/LOGO.jpg); height:100px; margin:auto; border:1px solid#000; color:#FFF; font-weight:bold; font-size:5px; margin:0PX 10PX;"><BR></div>




<div style=" float:left; padding:5PX 0PX; background:#000; height:100px; margin:auto; border:1px solid#000; color:#FFF; font-weight:bold; font-size:36px;"><BR>CLOUDS</div>


</div>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main" style="margin-top:-30px">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>&nbsp;</p>
      
	  <p>
	  <?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?></p>
      <form action="login.php" method="post" name="logForm" id="logForm" style="
			background:#010163; color:#fff; opacity:1; margin-top:-40px">
        <table width="100%" border="0" cellpadding="4" cellspacing="4" class="loginform" style="background:none; margin-top:0px">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="28%" style="color:#Fff; font-weight:bold; text-shadow:1px 1px #000">Username </td>
            <td width="72%"><input name="usr_email" type="text" class="required" id="txtbox" size="25"></td>
          </tr>
          <tr> 
            <td style="color:#Fff; font-weight:bold; text-shadow:1px 1px #000">Password</td>
            <td><input name="pwd" type="password" class="required password" id="txtbox" size="25"></td>
          </tr>
         
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="doLogin" type="submit" id="doLogin3" value="Login" class="mybutton">
                </p>
                
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
      <p>&nbsp;</p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</div>

<div class="foot">
&copy; Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by NISHANG CLOUDS<br>
For any help contact us at 679 135 426  
</div>
</body>
</html>
