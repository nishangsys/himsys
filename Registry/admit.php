<?php
//include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	echo $who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
	$y=substr($year,2);
}



	  $select=$con->query("SELECT * from gen_info  where id='".$who."' ") or die(mysqli_error($con));
	while ($rows=$select->fetch_assoc()){
		$name=$rows['names'];
		$dept=$rows['choiceone'];
		
		  $ch_exist=$conn->query("SELECT * from courses  where fname='$name' and departmet='$dept' and db1='$ayear' ") or die(mysqli_error($conn));
		  $dfh=$ch_exist->num_rows;
		  if($dfh>0){
			  echo "<script>alert('Sorry $name has been registered already this $ayear')</script>";
		  }
		  else {
		  
		
		
	
	/*	
	  $ass=$con->query("SELECT * from gen_info where matric='".$rows['mats']."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $pob=$bs['pob'];
		      $dob=$bs['dob'];
			  $nation=$bs['nationality'];
			  $tels=$bs['tel'];
			  $sex=$bs['gender'];
	}
	*/
	
	
	 $ass=$con->query("SELECT * from special where certi='".$rows['choiceone']."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $sch_ab=$bs['begc'];
		 $dept_ab=$bs['code'];
		 $num=$bs['stat'];
		 $new_num=$bs['stat']+1;
		 $id=$bs['id'];
		
		 $dip=$bs['dip'];
		   
	}
	////if it less than 100 then add 0
	if($new_num<10){
		$n_num="00".$num;
	}
	else if($new_num<100){
		$n_num="0".$num;
	}
	else {
		$n_num=$num;
	}
	echo $urmatric=$sch_ab."".$y."".$dept_ab."".$n_num;;
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
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $rows['choiceone'];; ?>" readonly="readonly" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $urmatric; ?>" readonly="readonly" /></td></tr>
                
                <!--
                 <tr><td>Fees</td><td><input type="text" name="fees" value="<?php
				 
	 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM classes12 where class='".$rows['prog']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	echo $fees1=$bu['fees'];
	
}			 
		
						 
				  ?>" readonly="readonly" /></td></tr>
              
             ---->  
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $rows['dob'];; ?>" /></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $rows['pob'];; ?>" /></td></tr>
              
              
                <tr><td>Tel</td><td><input type="text" name="tel" value="<?php echo $rows['tel'];; ?>" /></td></tr>
                
               <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $rows['gender']; ?>"  /></td></tr>
                
             <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="lev" >
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['levels']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
  <tr><td>Department ID</td><td> <select required class="form-control" id="sel1" name="ids" >
       
                       
  <option value="<?PHP echo $dip; ?>"><?PHP echo $dip; ?></option>   
        <option value="15">15</option>  
        <option value="16">16</option>  
        <option value="17">17</option>         
       
        
      </select></td></tr>
  
  
             

<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />

 <tr><td></td><td><input type="hidden" name="ayear" readonly="readonly" value="<?php  echo $ayear;
	 
 ?>" /></td></tr>
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
    <?php } ?>
   
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

$ids=$_POST['ids'];
$yid=$_POST['yid'];
$ass=$_POST['ass'];
$class1=$_POST['class'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');

$c=$conn->query("SELECT * FROM courses WHERE 
matricule='$matric'") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=?new&link=%20New%20Intake">';
	}
	$c2=$conn->query("SELECT * FROM courses WHERE 
fname='$fname' and 
levels='$levels' and departmet='$class1' and db1='$db1' ") or die(mysqli_error($conn)) ;
	if (mysqli_num_rows($c2)>0){
		echo "<script>alert('ERROR. $fname is already rgistered in the system')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=?new&link=%20New%20Intake">';
	}
	
	else {


	 $ats=$conn->query("insert into  courses  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',db1='$db1',c110='$ids',c101='$year',c102='$year2',cxx1='$POB',cxx2='$DOB',cxx6='$sch',cxx7='$dept',cxx4='Cameroonian'") or die(mysqli_error($conn)) ;


 $query55=$con->query("UPDATE special set stat='$new_num' where id='$id' " ) or die(mysqli_error($con)) ;

$query55=$con->query("UPDATE gen_info set status='10' where id='$who' " ) or die(mysqli_error($con)) ;





/*

 $daily=$conn->query("INSERT INTO daily set cust_id='$matric',room='$room',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',
			rec='$all',date='$dates',month='$month',year='$db1',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bbm',
			purpose='fees'") or die(mysqli_error($conn));

*/
echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?new&link=%20New%20Intake">';	
	
}
	
}
	}
}
?>