<?php
session_start();

include 'includes/dbc.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = ucwords($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$upass2 = strip_tags($_POST['password2']);
	$tel = strip_tags($_POST['tel']);
	$uname = $con->real_escape_string($uname);
	$email = $con->real_escape_string($email);
	$upass = $con->real_escape_string($upass);
	$tel = $con->real_escape_string($tel );
	$date=date('Y-m-d');
	$ip=$_SERVER['REMOTE_ADDR'];
	
$name=gethostname();

//get OS
$os= php_uname();

$dg=$con->query("SELECT * FROM users order by id desc limit 1  ") or die(mysqli_error($con));
     while($rows=$dg->fetch_assoc()){
		// echo $rows['md5_id'];
		  $yi="0".$rows['id'];
		  $mt="$yi".date('Y');
	 }
	 if(mysqli_num_rows($dg)<1){
		 $mttt="000".date('Y');
	 }
	 else {
		 $mttt=$mt;
	 }
	 


	if($upass!=$upass2){
		$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; ERROR.PASSWORD DOES NOT MATCH !
					</div>";
	}
	elseif (strlen($upass)<7){
		$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; ERROR.Your Password must be at least 7 characters long!
					</div>";
	}
	elseif (strlen($tel)<9){
		$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; ERROR.$tel is not a valid telephone Number Please!
					</div>";
	}
	else {
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $con->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = $con->query("INSERT INTO users set full_name='$uname',user_name='$email',user_email='$email',pwd='$hashed_password',user_level='5',tel='$tel',banned='5',ctime='$upass',date='$date',users_ip='$ip',md5_id='$os',activation_code='$name',address='$mttt' ") or die(mysqli_error($con));

			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
					echo '<meta http-equiv="Refresh" content="0; url= login.php">';
		
		
	}
	 else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
		
	$con->close();
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HIMS-NISHANG </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
body{
	background:url(a.JPG) no-repeat center;
	background-size:cover;
}
</style>
</head>
<body>






























   <div class="alert alert-info" style="text-align:center;">
  <strong style="font-size:24px; text-align:center">HIMS APPLICATION PORTAL V.20</strong> 
</div><br />







  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
    
     <div class="well" style="background:#fff">
      <div class="alert alert-danger">
  <strong>NOTICE ALL APPLICANTS</strong>
        </div>
        
        
        <p style="text-align:left; line-height:1.9; color:#000; padding:5px 15px">
          
          

           1. Password Must be at least 7 Characters Long and your email address must be valid<br>
          2. Your Telephone must be valid and <span style="color:#F00">without country code</span> e,g <span style="text-decoration:line-through">237</span> 67778899<br>
          3. In cases where you have forgotten your password , write a complain to nishang@biakahc.org and it will be process within <span style="color:#F00">48 hours</span> and replied to your mail<br>
         
         
          4. In cases where you have paid but your cannot create an account , go to the HIMS <span style="color:#F00">Application Office</span> with your written complain or write a complain to nishang@biakahc.org<br>
         
          5.To get help on how you can apply online 
          
          
          </strong></p>
          </div>
      
    </div>
    <div class="col-sm-7 text-left"> 
      
<ul class="nav nav-tabs" style="margin-top:-39PX">
  <li class="active" style="padding:0px 20px; width:60%; font-size:16px; font-weight:bold; "><a href="login.php">LOGIN TO YOUR ACCOUNT</a></li>
 
  <li><a href="#"  style="padding:0px 20px; width:60%; font-size:16px; font-weight:bold; ">REGISTER</a></li>
</ul>
        
        
       <form class="form-signin" method="post" id="register-form" style=" width:100%;  background:url(img/BGG.jpg) no-repeat center; " >
       
        <p style="text-align:left; line-height:1.6; color:#000; padding:5px 15px; background:#FFF">
          
          

           1. Fill the form and click on <strong>Create Account</strong><br>
          2. Create an MTN MOBILE MONEY Account(At any MTN Office)<br>
          3. Make sure you have atleast <span style="color:#F00">15,500 Frs</span> in your account<br>
          4. <strong>15000</strong> frs will be deducted for the HIMS Application processing form and <strong>500</strong> Frs for charges<br>
         
          5. Login and Follow the MTN application procedure to continue with your application process 
          
          
          
          </strong></p>

     
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Full Names" name="username" required autocomplete="off"  />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
        
         <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password2" required  />
        </div>    
       
        
        
        
         <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required autocomplete="off"  />
        <span id="check-e"></span>
        </div>
        
         <div class="form-group">
        <input type="number" class="form-control" placeholder="Telephone Number" name="tel" autocomplete="off" required  />
        </div>
        
        
        <div class="form-group"></div>
        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            <a href="login.php" class="btn btn-success" style="float:right;">Log In</a>
        </div> 
      
      </form>

    </div>
    <div class="col-sm-2 sidenav">
     
</div>
</div>

<footer class="container-fluid text-center">
  <p >&copy; Copyright <?php echo date('Y'); ?>. All Rights Reserved by HIMS</p>
</footer>

</body>

</body>
</html>