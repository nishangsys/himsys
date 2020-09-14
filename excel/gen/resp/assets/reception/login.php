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

$checksoft="SELECT * from roll where roll_id='1' and status='2' ";
	$run=mysql_query($checksoft) or die (mysql_error());
    if(mysql_num_rows($run)<1){
		
		echo "<script>alert('This software has expired. Please contact the administrator for License')</script>";
		$message= "Sorry this software has expired. Contact the administartor";
		echo '<meta http-equiv="Refresh" content="1; url=warning.php">';

	}
	while ($row=mysql_fetch_assoc($run)){
		$to=$row['date'];
		$expire=$row['new'];
		$today=date("Y/m/d");
		
	}
	
	if($today>$expire) {
			echo "<script>alert('This software has expired. Please contact the administrator for License')</script>";
		$message= "Sorry this software has expire. Contact the administartor";
		
		$sel="UPDATE roll set  new='0' ,status='1' WHERE roll_id='1'" ;
			
			 $run=mysql_query($sel) or die (mysql_error());

		echo '<meta http-equiv="Refresh" content="1; url=warning.php">';
	}
	else{

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

			echo '<meta http-equiv="Refresh" content="0; url= frontpage.php">';
					echo "<embed loop='false' src='alarm.mp3' hidden='true' autoplay='true' ";

} 
else if ($status == 20) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=adminpage.php">';
	 
}
else if ($status == 100) 
{ 
  
			echo '<meta http-equiv="Refresh" content="0; url=dashboard.php">';
}
else if ($status == 10) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= restaupage.php">';
	 
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
		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "Error - Invalid login. No such user exists";
	  }		
}
					 
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
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
	background:#eee url(images/bg1.jpg);
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	margin:0px;
	padding:0px;
}
</style>

</head>

<body>


<div class="heads">

<div class="fhead">


<div class="fh_left">
<h2><?php echo $clients; ?> FINANCE CONTROL PRO </h2>
<h3>Beauty outside, Beast Inside </h3>
<h4><?php echo $TEL; ?> </h4>
</div>






</DIV>
<div class="box" style="background:#ebebeb; width:680px;
margin:auto; margin-top:80px; -o-box-shadow:-2px 5px 12px 1px #666; 
  -moz-box-shadow: -2px 5px 12px 1px #666;
-webkit-box-shadow: -2px 5px 12px 1px #666;
box-shadow: -2px 5px 12px 1px #666;">
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
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
      <h3 class="titlehdr">Login For Register Users Only 
      </h3>  
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
      <form action="login.php" method="post" name="logForm" id="logForm" >
        <table width="100%" border="0" cellpadding="4" cellspacing="4" class="loginform">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="28%">Username / Email</td>
            <td width="72%"><input name="usr_email" type="text" class="required" id="txtbox" size="25"></td>
          </tr>
          <tr> 
            <td>Password</td>
            <td><input name="pwd" type="password" class="required password" id="txtbox" size="25"></td>
          </tr>
         
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="doLogin" type="submit" id="doLogin3" value="Login">
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
&copy; Copy Rights <?php echo date('Y'); }?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 
</div>
</body>
</html>
