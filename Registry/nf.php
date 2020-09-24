<?php

$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
	$y=substr($year,2);
}


	
	
	?>
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <style>
input,select{
	width:90%;
	padding:5px 5px;
}
</style>
       <br />
       
         <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

     
       <?php
	   $d=$con->query("SELECT * FROM special order by certi ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['certi']; ?>"><?php echo $df['certi']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="ok">Submit</button>
      </div>
    </div>
    </form>
    </div>
    </div>
    </div>
  
  
  
   <?php
   if(isset($_POST['ok'])){
 $zone=$_POST['dept'];
 
 
	
	
	 $ass=$con->query("SELECT * from special where certi='".$zone."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $sch_ab=$bs['begc'];
		 $dept_ab=$bs['code']."F";
		 $num=$bs['stat'];
		 $new_num=$bs['stat']+1;
		 $oid=$bs['id'];
		 
		 $dip=$bs['dip'];
		   
	}
	////if it less than 100 then add 0
	if($new_num<100){
		$n_num="0".$num;
	}
	else {
		$n_num=$num;
	}
	 $urmatric=$sch_ab."".$y."".$dept_ab."".$n_num;;

 
?>

   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $bs['fname'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $zone;; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $urmatric; ?>" required="required"/></td></tr>
               
              
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $ayear;
	 
 ?>" /></td></tr>
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $bs['cxx1']; ?>" /></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $bs['cxx2']; ?>" /></td></tr>
              
               <tr><td>Sex</td><td> <select class="form-control" id="sel1" name="sex" required>
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  
  </select></td></tr>
                
         <tr><td>Level</td><td><input type="text" name="lev"  required="required" /></td></tr>
  
   <tr><td>Nationality</td><td><select id="inputState" name="nation" class="form-control">
      <option value="Nigerian">Nigerian</option>
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
      </select></td></tr>
  
             
            
          <input type="text" name="ids"  value="<?php
		 echo $dip;		 ?>" required="required"  />


      <input type="hidden" name="sid"  value="<?php
		 echo $oid;		 ?>" required="required"  />


 <input type="hidden" name="last"  value="<?php
		 echo $new_num;		 ?>" required="required"  />

                   
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        <?php } ?>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname=$_POST['name'];

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$db1=$_POST['ayear'];
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$fee=$_POST['fees'];
$part=$_POST['part'];
$POB=$_POST['pob'];
$DOB=$_POST['dob'];
$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$last=$_POST['last'];

$levels=$_POST['lev'];


$contact1=$_POST['contact1'];
$sid=$_POST['sid'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$pass=$_POST['pass'];
$partd=$_POST['motive'];

$ids=$_POST['ids'];
$yid=$_POST['yid'];
$ass=$_POST['ass'];
$class1=$_POST['class'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');
$ass=$con->query("SELECT * from special where certi='".$class1."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $sch=$bs['sch'];
		 $dept=$bs['school'];
		   
	}		 

$c=$conn->query("SELECT * FROM courses WHERE 
matricule='$matric' and db1='$db1' ") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		

		
	}
	else {



$ats=$conn->query("insert into  courses  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',db1='$db1',c110='$ids',c101='$year',c102='$year2',cxx1='$POB',cxx2='$DOB',cxx4='$nation', cxx6='$sch',cxx7='$dept'") or die(mysqli_error($conn));;



 $query55=$con->query("UPDATE special set stat='$last' where id='$sid'" ) or die(mysqli_error($con)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?foreigners&link= Foreigners">';	
	
}
	
}
?>