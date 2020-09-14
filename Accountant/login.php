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
include 'includes/dbc.php';

$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if (isset($_POST['doLogin']))
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
			$branch=$row['user_name'];
			$branch=$row['country'];
			$status=$row['banned'];
			
		}
		session_start();
		$_SESSION['user_name']= $username;
		$_SESSION['full_name']= $names;
		//$_SESSION['password']= $password;
		$_SESSION['banned']= $status;
		$_SESSION['country']= $branch;
		
		
		if ($status == '5') 
{ 

			echo '<meta http-equiv="Refresh" content="0; url= index.php?branch='.$branch.'">';
					
} 
else if ($status == 20) 
{ echo '<meta http-equiv="Refresh" content="0; url= HIMS/index.php?branch='.$branch.'">';
	 
}

else if ($status == 10) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= output/index.php?branch='.$branch.'">';
	 
}
else if ($status == 15) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= bar/restaupage.php">';
	 
}


else if ($status == 2) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= bauca/baucapage.php">';
	 
}

else if ($status == 16) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= store/stockpage.php">';
	 
}

else if ($status == 17) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= rental/rentalpage.php">';
	 
}


else if ($status == 18) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= VIP/clubpage.php">';
	 
}

else if ($status == 101) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= chiefs/dashboard.php">';
	 
}

else if ($status == 150) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= chiefs/dashboard.php">';
	 
}

else if ($status == 6) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= chiefreceipt/frontpage.php">';
	 
	 
}


//bar sales agent
else if ($status == 9) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=sales/restaupage.php?area=Bartender">';
	 
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
		//echo '<meta http-equiv="Refresh" content="1; url=401.php">';
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
<link href="styles.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" media="screen" href="css/left-fluid.css">

  <link rel="stylesheet" href="js/boostrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
body{
	background:#eee url(9.jpg);
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

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #FFF;
  border-right: 16px solid #0CC;
  border-bottom: 16px solid #FFF;
  border-left: 16px solid #0CC;
  width: 300px;
  height: 300px;
  float:left;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

</head>

<body>



<div class="heads" style="border-bottom:2px dashed#09F; opacity:0.7; width:100%;
			background:#010163;">




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
	   echo "<div class=\"alert alert-warning\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?></p>
     <div class="container" style="background:#eee">
  <h2><?php echo $clients; ?> LOGIN FORM</h2>
  <form method="POST"  class="form-horizontal" action="" name="logForm" id="logForm" >
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter User name" name="usr_email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
 
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="doLogin">Signin</button>
      </div>
    </div>
  </form>
</div>


      <p>&nbsp;</p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</div>

