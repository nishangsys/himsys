
  <?php
  
	$your=$_GET['mats'];;
	   $a=mysql_query("SELECT * FROM list WHERE matric='$your' limit 1 ") or die(mysql_error());
	 while($ad=mysql_fetch_assoc($a)){
  

 
  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" target="_blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['name']; ?>">
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Your Matric:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="matric" value="<?php echo $your; ?>" readonly>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $_GET['amountpaid']; ?>" readonly>
      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ayear; ?>" readonly>
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Date of Birth:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="month" placeholder="DOB" name="DOB" required>
      </div>
    </div> 
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">GENDER:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="sex" required>
       <option>........</option>
    <option value="F">Female</option>
    <option value="M">Male</option>
 
  </select>
      </div>
    </div>
   
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Place of Birth:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="month" placeholder="POB" name="POB" required>
      </div>
    </div> 
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Nationality:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="nation">
        <option value="cameroonian">Cameroonian</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
 
  </select>
      </div>
    </div>
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Parent/Guidiant Contacts:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="guide" placeholder="Contact for emergency cases" name="tel">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Enter password" required>
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $_GET['fees']; ?>" readonly >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part">
      </div>
    </div>
    
    <input type="hidden" name="as" value="<?php echo $as ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } ?>




<?PHP
@session_start();
 $active=$_SESSION['user_name'];
 if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="0; url=index.php">';

}
$err = array();
					 
if(isset($_POST['doLogin']) ){
	
{ 



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
$bbm=$_POST['feeamt']-$_POST['part'];





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



	
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/

if( strlen($_POST['guide']) < 9)
{
echo "<script>alert('ERROR - There is an invalid Telephone Number')</script>";

//exit();
}
// Check User Passwords
if ($data['pass']!=$data['pass1']) {
echo "<script>alert('ERROR -Password does not match')</script>";
//header("Location: register.php?msg=$err");
//exit();
}
if ($part<$accepted) {
echo "<script>alert('You must Pay atleast $accepted to sign up')</script>";
//header("Location: register.php?msg=$err");
//exit();
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

status='$ayear',

country='$country',
matricule='$myy1',
barcode='$myyy1'";


$dates=date('Y-m-j');
$a=mysql_query("DELETE FROM historic where matricule='$matric' and year_id='$ayear' ") or die(mysql_error());
$b=mysql_query("DELETE FROM students where matricule='$matric' and year_id='$ayear' ") or die(mysql_error());

$c=mysql_query("DELETE FROM users where user_name='$matric' ") or die(mysql_error());

$d=mysql_query("DELETE FROM student where username='$matric' ") or die(mysql_error());


$query55=mysql_query("insert into historic  set  
matricule='$matric',student_name='$fname',
class='$class1',amountpaid='$paid',amount_paid='$part',expected_amount='$feeamt',balance='$bbm',ids='16',date='$dates' ,year_id='$ayear'  " ) or die (mysql_error());


 $query555=mysql_query("insert into students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$ayear',c110='$ids',cxx7='$city',cxx6='$guide',cxx2='$DOB',barcode='$POB',c101='$as',c102='$ass' ") or die (mysql_error());




  $sql_insert = "INSERT into `users`
set full_name='$matric',user_name='$matric',user_level='5',pwd='$sha1pass',
country='$class1',tel='$level',approved='0',activation_code='0',user_email='$fname@1234',
banned='0',users_ip='$user_ip',date=now();";		
			
mysql_query($sql_insert) or die(mysql_error()) ;

$student="INSERT INTO student set firstname='$fname',username='$matric',password='$pass',levels='$level',departmet='$class1',matricule='$matric',
address='$tel',nationality='$national',region='$sptel',city='$addr',country='$POB'";
$ok=mysql_query($student,$link) or die("Insertion Failed:" . mysql_error());

echo "<script>alert('Record Created Successfully!'); </script>";
 exit;
	

/************ USER EMAIL CHECK ************************************
This code does a second check on the server side if the email already exists. It 
queries the database and if it has any existing email it throws user email already exists
*******************************************************************/


/***************************************************************************/

	
	
	//$sha1pass = PwdHash($data['pass']);
 $CHECK="select * from users where  user_name='$mat'";
	
	 $okk = mysql_query($CHECK) or die(mysql_error());


if (mysql_num_rows($okk)> 0)
{
 echo "<div class='box'><img src='warning.png'>ERROR. You have already been registered into this Platform </div>";
//echo '<meta http-equiv="Refresh" content="2; url=index.php">';

}

if((strlen($tel)<9) or  (strlen($sptel))<9){
	 echo "<div class='box'><img src='warning.png'>ERROR. ".$tel." is not a valid Telephone Number</div>";
//echo '<meta http-equiv="Refresh" content="2; url=index.php">';
}


else {	

  $sql_insert = "INSERT into `users`
set full_name='$matri',user_name='$matri',user_level='5',pwd='$sha1pass',
country='$dept',tel='$level',approved='0',activation_code='0',user_email='$useremail',
banned='0',users_ip='$user_ip',date=now();";		
			
mysql_query($sql_insert,$link) or die ;
$user_id = mysql_insert_id($link);  
$md5_id = md5($user_id);
mysql_query("update users set md5_id='$md5_id' where id='$user_id'");

$student="INSERT INTO student set firstname='$name',username='$mat',password='$pass',levels='$level',departmet='$cl',matricule='$mat',
address='$tel',nationality='$national',region='$sptel',city='$addr',country='$spname'";
$ok=mysql_query($student,$link) or die("Insertion Failed:" . mysql_error());
	echo "<script>alert('Thank You. We received your submission so you can Now Login.')</script>";
	 echo "<div class='box'><img src='tick.png'>Thank You. We received your submission so you can Now Login. </div>";
echo '<meta http-equiv="Refresh" content="1; url=index.php">';	
	
 
  exit();
	 
	 } 
 }					 

}

?>