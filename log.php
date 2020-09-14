<?php session_start(); ?>
<html>

<head>


  <  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="FEES/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="FEES/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="FEES/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="FEES/css/form-elements.css">
	<link rel="stylesheet" type="text/css" href="FEES/css/stlye.css">
  <script src="FEES/js/jquery.min.js"></script>
  <script src="FEES/js/bootstrap.min.js"></script>
<style>
html, body {
  margin: 0;
  height: 100%
}


@-webkit-keyframes cloud_three {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes sky_background {
  0% {
    background: #007fd5;
    color: #007fd5
  }
  50% {
    background: #000;
    color: #a3d9ff
  }
  100% {
    background: #007fd5;
    color: #007fd5
  }
}

@-moz-keyframes moon {
  0% {
    opacity: 0;
    left: -200% -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
  50% {
    opacity: 1;
    -moz-transform: scale(1);
    left: 0% bottom: 250px;
    -webkit-transform: scale(1);
  }
  100% {
    opacity: 0;
    bottom: 500px;
    -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
}

@-moz-keyframes cloud_one {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes cloud_two {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes cloud_three {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}
</style>
</head>
   <script src="FEES/js/index.js"></script>
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
include 'dbc.php';

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
			//$password=$row['banned'];
			$status=$row['banned'];
			
		}
		
		$_SESSION['user_name']= $username;
		$_SESSION['id']= $userID;
		//$_SESSION['password']= $password;
		$_SESSION['banned']= $status;
		
		
			if ($status == '100') 
{ 

			echo '<meta http-equiv="Refresh" content="0; url= fees/first.php?first">';
					
} 
else if ($status == 20) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=Superadmin/index.php">';
	 
}

else if ($status == 1) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url=Admission/index.php">';
	 
}
else if ($status == 8) 
{ 
		echo '<meta http-equiv="Refresh" content="0; url=staffs/staffs/staffpage.php">';
	 

}
else if ($status == 7) 
{ 
		echo '<meta http-equiv="Refresh" content="0; url=staffs/cnps/cnpspage.php">';
	 

}

else if ($status == 6) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= Cash/index.php">';
	 
}
else if ($status == 101) 
{ 
  
			echo '<meta http-equiv="Refresh" content="0; url= Accountant/index.php">';
}

else if ($status == 17) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= Staffs/salary/salary.php">';
	 
}
else if ($status == 101) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= Accountant/index.php">';
	 
}

else if ($status == 16) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= store/stockpage.php">';
	 
}

else if ($status == 8) 
{ 
			echo '<meta http-equiv="Refresh" content="0; url= staffs/staffpage.php">';
	 
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <body class="bg-image">

<div class="top-content">
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text">
					<h1>HIMS FINANCE CONTROL PRO</h1>
					<div class="description">
						<p>
							For authorized users only
						</p>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Login Now!</h3>
							<p>Enter your username and password</p>
						</div>
						<!--<div class="form-top-right">
							<i class="fa fa-key"></i>
						</div>-->
						<div class="form-bottom">
							<form role="form"  method="POST" class="login-form" action="">
								<div class="form-group">
									<label class="sr-only" for="form-username">Username</label>
									<input type="text" name="usr_email" placeholder="Enter Username...." class="form-username form-control" id="form-username" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Password</label>
									<input type="password" " placeholder="Enter Password....." class="form-password form-control" id="form-password" name="pwd" required>
								</div>
								<button type="submit" class="btn" name="doLogin">Login</button>
							</form>
							
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</body>

</html>
    
     