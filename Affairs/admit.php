<?php
include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

	  $select=$con->query("SELECT * from lists  where id='".$who."' ") or die(mysqli_error($con));
	while ($rows=$select->fetch_assoc()){
	
		
	  $ass=$con->query("SELECT * from gen_info where matric='".$rows['mats']."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $pob=$bs['pob'];
		      $dob=$bs['dob'];
			  $nation=$bs['nationality'];
			  $tels=$bs['tel'];
			  $sex=$bs['gender'];
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
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['names'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $rows['prog'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matric']; ?>" readonly="readonly" /></td></tr>
                 <tr><td>Fees</td><td><input type="text" name="fees" value="<?php
				 
	 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM classes1 where class='".$rows['prog']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	echo $fees1=$bu['fees'];
	
}			 
		
						 
				  ?>" readonly="readonly" /></td></tr>
              
               <tr><td>Academic Year</td><td><input type="text" name="year_id" readonly="readonly" value="<?php echo $rows['year_id'];; ?>" /></td></tr>
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $dob; ?>" /></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $pob; ?>"/></td></tr>
              
              
                <tr><td>Tel</td><td><input type="text" name="tel" value="<?php echo $tels; ?>" /></td></tr>
                
               <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $sex; ?>" /></td></tr>
                
             <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="lev">
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['levels']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
             
            
          <input type="hidden" name="id"  value="<?php echo $rows['id']; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
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

$fee=$_POST['fees'];
$part=$_POST['part'];
$POB=$_POST['pob'];
$DOB=$_POST['dob'];
$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$cateory=$_POST['category'];

$levels=$_POST['lev'];


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


	 $ats=("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$year_id',c110='$ids',c101='$year',c102='$year2',cxx7='$city',cxx6='$guide',cxx1='$POB',cxx2='$DOB', ") ;


echo $query55=("insert into historic  set  
matricule='$matric',student_name='$fname',
class='$class1',amountpaid='0',amount_paid='$part',expected_amount='$fee',balance='$fee',ids='16',date=CURDATE() ,year_id='$year_id',photo='$matric' ,time='$levels' " ) ;exit;





/*

 $daily=$conn->query("INSERT INTO daily set cust_id='$matric',room='$room',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',
			rec='$all',date='$dates',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bbm',
			purpose='fees'") or die(mysqli_error($conn));

*/
echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?first">';	
	
}
	}
}
	

?>