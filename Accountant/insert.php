

<?PHP
include '../includes/dbc.php';


$err = array();

	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['year_id'];
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

echo $modes=$_POST['mode'];
if($modes=='Bank'){
	echo $cash=$_POST['reg'];
	echo $deposit=$_POST['part'];
}
else if($modes=='Cash'){
	echo $cash=$all
	;
	echo $deposit=0;
}

$cateory=$_POST['category'];

$levels=$_POST['levels'];


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

$as=$_POST['as'];
$ass=$_POST['ass'];
$class1=$_POST['class'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');

	
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/



if ($bbm<0) {
echo "<script>alert('Negative Balance please')</script>";
//header("Location: register.php?msg=$err");
exit();
} 


if ($reg>200000) {
echo "<script>alert('Wrong Resitration Fee')</script>";
//header("Location: register.php?msg=$err");
exit();
} 
$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
 $sha1pass = PwdHash($data['pass']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Generates activation code simple 4 digit number
$activ_code = rand(1000,9999);
	
$query2="insert into admission  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$nation',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',
codes='$codes',
farm='$farm',
category='$category',


department='$cc',

contact1='$contact1',
contact2='$contact2',


extra='$levels',
idcard='$city',

father='$father',
mother='$mother',

oschool='$oschool',
ograde='$ograde',

hschool='$hschool',
hgrade='$hgrade',

guardian1='$guardian1',
guardian2='$guardian2',

hnd='$hndschool',
hndqualification='$hndqualification',

status='$year_id',

country='$country',
matricule='$myy1',
barcode='$myyy1'";


$dates=date('d-m-Y');
$a=$dbcon->query("DELETE FROM historic where student_name='$fname' and year_id='$year_id' ") or  die (mysqli_error($dbcon));


	 $ats=$dbcon->query("insert into  students  set  
matricule='$matricule',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$year_id',c110='$ids',cxx7='$city',cxx6='$guide',cxx2='$DOB',barcode='$POB',c101='$as',c102='$ass' ") or die (mysqli_error($dbcon));


 $query55=$dbcon->query("insert into historic  set  
matricule='$matricule',student_name='$fname',
class='$class1',amountpaid='$paid',amount_paid='$part',expected_amount='$feeamt',balance='$bbm',ids='16',date=CURDATE() ,year_id='$year_id',photo='$matric'  " ) or die(mysqli_error($dbcon));







 $daily=$con->query("INSERT INTO daily set cust_id='$matricule',room='$room',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$deposit',
			rec='$cash',date='$dates',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bbm',
			purpose='fees'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";
 	

echo '<meta http-equiv="Refresh" content="0; url=index.php?first">';	
	

	

?>