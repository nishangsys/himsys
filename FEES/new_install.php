

<?PHP
if(isset($_POST['do'])){
include '../includes/dbc.php';


$err = array();

	$_POST = array_map("ucwords", $_POST);
	

	 $student_id=$_GET['student_id'];

$level=$_POST['level'];

 $first_name=$_POST['first_name'];


$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['ayear'];
$matric=$_POST['mats'];


$feeamt=$_POST['feeamt'];
$part=$_POST['part'];

$accepted=$feeamt/2;

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
	

$levels=$_POST['levels'];

$matriculex=$_POST['matriculex'];
echo $paidsofar=$_POST['paidsofar'];
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
echo $s=$_GET['s'];
$query55556=$con->query("UPDATE daily  set  
company='$bank' where cust_id='".$_GET['matric']."'  and year='$ayear'" ) or die(mysqli_error($con));



$coo=$con->query("SELECT * FROM daily where date='$dates' and cust_id='".$_GET['matric']."'") or die(mysqli_error($con));
  $count=mysqli_num_rows($coo);
	if($count>0){
		
echo "<script>alert('Error Recording have be done for that receipt on $dates!'); </script>";
echo '<meta http-equiv="Refresh" content="0; url=first.php?pay_again">';	

	}
	else {

 $daily=$con->query("INSERT INTO daily set cust_id='$matric',room='$room',paidtou='$dates',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',levels='$level',
			rec='$cash',date='$dates',month='$month',year='$ayear',reason='fees',qty='1',area='1',price='$part',total='$part',owed='$balance',
			purpose='$mmm',company='$bank',time='$time',bank='$bankk',session='$s'") or die(mysqli_error($con));


 $query55=$conn->query("UPDATE fee_paymt  set  
balance='$balance',fee_mat='$totapiad' where student_id='$student_id'  " ) or die(mysql_error($conn));



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
 	
 exit;
	
}
}
?>