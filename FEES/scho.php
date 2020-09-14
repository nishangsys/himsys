

<?PHP
if(isset($_POST['do'])){
include '../includes/dbc.php';


$err = array();

	$_POST = array_map("ucwords", $_POST);
	

	 $roll=$_GET['id'];
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
$matric=$_POST['mats'];

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

echo $mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$part;
		$bankk=0;
	}
	else {
		echo $r=$bank;
		$cash=0;
		$bankk=$part;
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
$class1=$_POST['amountpaid'];
$matriculex=$_POST['matriculex'];
$paidsofar=$_POST['paidsofar'];
$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$totapiad=$paidsofar+$part;
$month=date('m');
$year=date('Y');
$balance=$_POST['balance'];
	
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

$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$dates=$date=$day."-".$month."-".$year;;
$bank=$_POST['bank'];
$active=$_POST['active'];
$time=date('d-m-Y G:i:s');


$mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$part;
		$bankk=0;
	}
	else {
		echo $r=$bank;
		$cash=0;
		$bankk=$part;
	}
$s=$_GET['s'];



 $daily=$con->query("INSERT INTO daily set cust_id='$matric',room='$room',paidtou='$dates',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',levels='$level',
			 date='$dates',month='$month',year='$ayear',reason='scholarship',qty='1',area='1',price='$part',total='$part',owed='$balance',
			purpose='$mmm',company='$bank',time='$time',bank='$bankk',session='$s'") or die(mysqli_error($con));


 $query55=$conn->query("UPDATE historic  set  
balance='$balance',amount_paid='$totapiad' where roll='$roll'  " ) or die(mysql_error($conn));



 /*$query55556=$conn->query("UPDATE daily  set  
company='$bank' where cust_id='$matric'  and year='$ayear'" ) or die(mysql_error($conn));*/





echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?mid_term&link=Mid%20Term">';	
	
 	
	

}
?>