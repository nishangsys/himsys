 <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

  <link rel="stylesheet" href="../js/boostrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<?php 

	
include '../dbc.php';
				 
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
	  $PRO=$rows['as3'];
 }	

	@session_start();
	


$err = array();
					 
if(isset($_POST['submit'] ) )
{ 
/******************* Filtering/Sanitizing Input *****************************
This code filters harmful script code and escapes data of all POST data
from the user submitted form.
*****************************************************************/
foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}


/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/

if(empty($data['full_name']) || strlen($data['full_name']) < 4)
{
$err[] = "ERROR - Invalid name. Please enter atleast 3 or more characters for your name";
//header("Location: register.php?msg=$err");
//exit();
}

// Validate User Name
if (!isUserID($data['user_name'])) {
$err[] = "ERROR - Invalid user name. It can contain alphabet, number and underscore.";
//header("Location: register.php?msg=$err");
//exit();
}


// Check User Passwords
if (!checkPwd($data['pwd'],$data['pwd2'])) {
$err[] = "ERROR - Invalid Password or mismatch. Enter 5 chars or more";
//header("Location: register.php?msg=$err");
//exit();
}
	  
$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
$sha1pass = PwdHash($data['pwd']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Generates activation code simple 4 digit number
$activ_code = rand(1000,9999);

$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

/************ USER EMAIL CHECK ************************************
This code does a second check on the server side if the email already exists. It 
queries the database and if it has any existing email it throws user email already exists
*******************************************************************/

$rs_duplicate = mysql_query("select count(*) as total from users where  user_name='$user_name'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The username/email already exists. Please try again with different username and email.";
//header("Location: register.php?msg=$err");
//exit();
}
/***************************************************************************/

if(empty($err)) {

 $sql_insert = "INSERT into `users`
  			(`full_name`,`user_email`,`pwd`,`address`,`tel`,`fax`,`website`,`date`,`users_ip`,`approved`,`activation_code`,`banned`,`country`,`user_name`
			)
		    VALUES
		    ('$data[full_name]','$user_name@mysoftware.com','$sha1pass','$data[pwd]','$data[tel]','$data[fax]','$data[web]'
			,now(),'$user_ip','0','$activ_code','$level','$data[branch]','$user_name'
			)
			";
			
mysql_query($sql_insert,$link) or die("Insertion Failed:" . mysql_error());
$user_id = mysql_insert_id($link);  
$md5_id = md5($user_id);
mysql_query("update users set md5_id='$md5_id' where id='$user_id'");
$message= "<div class='alert alert-success'>".$data['full_name']." Successfully Registered. Thank You</div>";

	 } 
 }					 

?>
<html>
<head>
<title>PHP Login :: Free Registration/Signup Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="../js/jquery.validate.js"></script>

  <script>
  $(document).ready(function(){
    $.validator.addMethod("username", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Username must contain only letters, numbers, or underscore.");

    $("#regForm").validate();
  });
  </script>


</head>

<body>
<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped">

<h1>Register New Employees</h1>
<table >
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="70" valign="top"><p>&nbsp;</p>
      
    <td width="460" valign="top"><p>
	<?php 
	 if (isset($_GET['done'])) { ?>
	  <h2>Thank you</h2> Your registration is now complete and you can <a href="login.php">login here</a>";
	 <?php exit();
	  }
	?></p>
     
	 <?php	
	 if(!empty($err))  {
	   echo "<div class=\"alert alert-warning\">";
	  foreach ($err as $e) {
	    echo "* $e <br>";
	    }
	  echo "</div>";	
	   }
	   echo $message
	 ?> 
     <BR>
     <div class="container">
	
      <form action="" method="post" name="regForm" class="form-horizontal" id="regForm" style="margin-top:-30px">
                <div class="form-group">

         
       
         <form class="form-horizontal">
         
         
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Full Name" name="full_name" required>
      </div>
    </div>
      
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Username" name="user_name" required>
      </div>
    </div>
 
 
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Function:</label>
      <div class="col-sm-10">
       <select required class="form-control" id="sel1" name="level">
        <option value="">--------</option>
       <?PHP
	$a = $con->query("SELECT * FROM levels") or die(mysqli_error($con));
		while($rows = $a->fetch_assoc()) {
?>
        <option value="<?PHP echo $rows['levels']; ?>"><?PHP echo $rows['name']; ?></option>
        <?PHP } ?>
        
   
      </select>
      </div>
    </div>
    
    
         <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Branch:</label>
      <div class="col-sm-10">
       <select required class="form-control"   id="sel1" name="branch">
              <option value="">--------</option>
                    
<?PHP
	$a = $con->query("SELECT * FROM branches") or die(mysqli_error($con));
		while($rows = $a->fetch_assoc()) {
?>
        <option value="<?PHP echo $rows['name']; ?>"><?PHP echo $rows['name']; ?></option>
        <?PHP } ?>
        
      </select>
      </div>
    </div>
       
       
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" name="pwd2" placeholder="Enter password again" required>
      </div>
    </div>
    
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Regsiter Staff</button>
      </div>
    </div>
      </form>
     
	



</body>
</html>

