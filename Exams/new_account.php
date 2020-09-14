
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<?php 


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


 $dept = $_POST ['dept'];
$mname= $_POST ['names'];
$tel= $_POST ['tel'];
$username = $_POST ['username'];
$pwd= $_POST ['pwd'];
$pwds= $_POST ['pwds'];
$prog= $_POST ['prog'];
$aged="$fname $mname $lname ";
$lev=5;


	$photo=($_FILES['userImage']['name']);	
	$photo_temp=$_FILES['userImage']['tmp_name'];
	move_uploaded_file($photo_temp,"../photos/$photo");	
	
	
	$target_dir = "../photos";
	
	
	
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

 $sql_insert =$con->query( "INSERT into `users`
  			(`full_name`,`user_email`,`user_level`,`pwd`,`address`,`tel`,`fax`,`website`,`date`,`users_ip`,`approved`,`activation_code`,`banned`,`country`,`user_name`
			)
		    VALUES
		    ('$data[full_name]','$user_name@mysoftware.com','$lev','$sha1pass','$dept','$data[tel]','$data[fax]','$photo'
			,now(),'$user_ip','0','$activ_code','5','$schoolx','$user_name'
			)
			") or die(mysqli_error($con));
			

$user_id = mysql_insert_id($link);  
$md5_id = md5($user_id);
mysql_query("update users set md5_id='$md5_id' where id='$user_id'");




echo "<script>alert('Thank you!'); </script>";
 
$message= "<div class='alert alert-success'>".$data['full_name']." Successfully Registered. Thank You</div>";

	 } 
}


?>
<br />
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
     <form action="" method="post" name="regForm" class="form-horizontal" id="regForm" style="margin-top:-30px" enctype="multipart/form-data">
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
        <button type="submit" class="btn btn-primary" name="submit">Register Staff</button>
      </div>
   
      </form>
     
	

</div>
</div>
<h3>All Exams Officers</h3>
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		
		 $d=$con->query("SELECT * FROM users where banned='5' ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                <th> Name</th>
                                <th>User Name</th>
                     
                                    <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php  echo $bu['full_name']; ?></td>
             <td><?php  echo $bu['user_name']; ?></td>
              <td><a href="?new_account&link=Create a new User&id=<?php  echo $bu['id']; ?>"> <button  class="btn btn-danger" onclick="return confirm('Are you Sure About that')" >Remove from this Office</button></a></td>       
                                            
                                            
                                            </td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
<?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
		 $d=$con->query("DELETE FROM users where id='$id' ") or die(mysqli_error($con));
		 echo "<script>alert('Delete Successfull')</script>";
		 echo '<meta http-equiv="Refresh" content="1; url=?new_account&link=Create a new User">';
}

?>