<?php
session_start();

if(isset($_POST['btn-signup'])) {
	
	$uname = ucwords($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$upass2 = strip_tags($_POST['password2']);
	$tel = strip_tags($_POST['tel']);
	$level=strip_tags($_POST['level']);
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$tel = $DBcon->real_escape_string($tel );
	$level = $DBcon->real_escape_string($level);
	$date=date('Y-m-d');
	$ip=$_SERVER['REMOTE_ADDR'];
	
$name=gethostname();

//get OS
$os= php_uname();

$dg=$DBcon->query("SELECT * FROM users order by id desc limit 1  ") or die(mysqli_error($DBcon));
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
	elseif (strlen($tel)<5){
		$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; ERROR.$tel is not a valid telephone Number Please!
					</div>";
	}
	else {
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = $DBcon->query("INSERT INTO users set full_name='$uname',user_name='$email',user_email='$email',pwd='$hashed_password',user_level='$level',tel='$tel',banned='$level',ctime='$upass',date='$date',users_ip='$ip',md5_id='$os',activation_code='$name',address='$mttt' ") or die(mysqli_error($DBcon));

			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
					echo '<meta http-equiv="Refresh" content="0; url=?users">';
		
		
	}
	 else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
		
	$DBcon->close();
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUIB-NISHANG </title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="../style.css" type="text/css" />
<style>
body{
	background:url(a.JPG) no-repeat center;
	background-size:cover;
}
</style>
</head>
<body>




































  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
    
      
    </div>
    <div class="col-sm-7 text-left"> 
      
<ul class="nav nav-tabs" style="margin-top:-39PX">

</ul>
        
        
       <form class="form-signin" method="post" id="register-form" style=" width:100%;  background:url(img/BGG.jpg) no-repeat center; " >
       
        <p style="text-align:left; line-height:1.6; color:#000; padding:5px 15px; color:#f00; background:#FFF">
          
          

           1.Password must be <strong> at least 7 characters Long</strong><br>
         
          
          
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
  <label for="sel1">Select level:</label>
  <select class="form-control" id="sel1" name="level" required>
  <option></option>
    <?php
    
		    $CHECK=$DBcon->query("SELECT * FROM sectors where area>='0' order by name") or die(mysqli_error($DBcon));
		    while($ro=$CHECK->fetch_assoc()){
		  
		  
	
	 ?>
                <option value="<?php echo $ro['area']; ?>"><?php echo $ro['name']; ?></option>
                
           <?PHP } ?>
                
  </select>
</div>
        
        
        
       
        
        
        
         <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required autocomplete="off"  />
        <span id="check-e"></span>
        </div>
      
        <div class="form-group"></div>
        
     	<hr />
        
         <div class="form-group">
        <input type="hidden" class="form-control" placeholder="Telephone Number" name="tel" autocomplete="off" value="67913526"/>
        </div>
    
        
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
          
        </div> 
      
      </form>

    </div>
    <div class="col-sm-2 sidenav">
     
</div>
</div>


</body>

</body>
</html>