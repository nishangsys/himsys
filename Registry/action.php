ddd
<?php

include '../includes/dbc.php';
if ($_POST['send'])
{

echo $dept = $_POST ['dept'];
echo $mname= $_POST ['names'];

$username = $_POST ['username'];
$pwd= $_POST ['pwd'];
$pwds= $_POST ['pwds'];
$aged="$fname $mname $lname ";
$err = array();
					 

foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}



$user_ip = $_SERVER['REMOTE_ADDR'];

$sha1pass = PwdHash($data['pwd']);
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$ms="1";

$fax= $data['fax'];
$user_level= $data['user_level'];

$usr_email = $data['usr_email'];
$user_email = $data['user_email'];
$username = $data['username'];

$file = $_FILES ['pic'];
$name1 = $file ['name'];
$type = $file ['type'];
 $size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/'.$name1))//image is a folder in which you will save image
{


$rs_duplicate = mysql_query("select count(*) as total from users where user_email='$user_email' OR user_name='$username'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$mesaage = "ERROR - The username/email already exists. Please try again with different username and email.";
//header("Location: register.php?msg=$err");
//exit();
}

if ($pwd==$pwds)
{
$mesaage = "Passwords not th same";

}



if ($total > 0)
{
$mesaage = "ERROR - The username/email already exists. Please try again with different username and email.";

}

/***************************************************************************/

if(empty($err)) {

$sql_insert = $con->query("INSERT into `users`
  			(`full_name`,`user_email`,`pwd`,`address`,`user_level`,`tel`,`fax`,`website`,`date`,`users_ip`,`activation_code`,`country`,`user_name`
			)
		    VALUES
		    ('$aged','$user_email','$sha1pass','$data[address]','$ms','$data[tel]','$data[fax]','$data[web]'
			,now(),'$user_ip','$activ_code','$data[country]','$user_email'
			)
			") or die(mysqli_error($con));

			$sql_insert2 = $con->query( "INSERT into `teacher`
  			(`username`,`password`,`firstname`,`lastname`,`middlename` ,`location`,`department`
			)
		    VALUES
		    ('$user_email','$pwd','$data[fname]','$data[lname]','$data[mname]','$name1','$aged'
			)
			")or die(mysqli_error($con));;

//	echo "<h3>Thank You</h3> We received your submission.";



echo "<script>alert('Thank you!'); </script>";
 

	 
	 } 
 				 
}
}
}
?>