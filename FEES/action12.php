

<?PHP
include 'dbc.php';


$err = array();

	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['ayear'];
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$feeamt=$_POST['feeamt'];
$part=$_POST['part'];
$POB=$_POST['POB'];
$DOB=$_POST['DOB'];
$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$cateory=$_POST['category'];

$level=$_POST['level'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$pass=$_POST['pass'];
$partd=$_POST['motive'];

$ass=$_POST['ass'];
$class1=$_POST['amountpaid'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$id=$_POST['as'];
$month=date('m');
$year=date('Y');

	
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/


$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
 $sha1pass = PwdHash($data['pass']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Generates activation code simple 4 digit number
$activ_code = rand(1000,9999);



$dates=date('d-m-Y');
$classes=$_POST['amountpaid'];
echo $ay=$_POST['old'];

$ats=$con->query("UPDATE students  set levels='$level',departmet='$classes'  
WHERE fname='$fname' AND year_id='$ay' ")  or die(mysqli_error($con)) ;


$query55=$con->query("UPDATE historic  set  
 time='$level',student_name='$fname',class='$class1',year_id='$ayear' where roll='$id'  " )   or die(mysqli_error($con)) ; 

$query556=$conn->query("UPDATE daily  set  
 time='$level' where staffname='$fname' and year='$ayear'  " )   or die(mysqli_error($conn)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?update">';	
	
 	
 exit;
	

?>