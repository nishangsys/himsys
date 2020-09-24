<h3>POST GRADUATE ADMISSION</h3>

 <?php

$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
	$y=$bu['pat'];
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
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />

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
    
    
                 <tr><td>Start Year</td><td> <select class="form-control" id="sel1" name="start" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2019;$day<=2025;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
               
               
               
               <tr><td>End Year</td><td>  <select class="form-control" id="sel1" name="end" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2019;$day<=2025;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
      
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
  $zone=mysqli_real_escape_string($con,$_POST['dept']);
 $who=$_GET['cust'];
 			 

$start=$_POST['start'];
$end=$_POST['end'];
 $ayear=$start."/".$end;
 $thatyear = substr($start, -2);

	  $select=$con->query("SELECT * from special where certi='".$zone."'  ") or die(mysqli_error($con));
	while ($bs=$select->fetch_assoc()){
	
		
	
		 $sch_ab=$bs['begc'];
		 $dept_ab="P".$bs['code'];
		 $num=$bs['pnum']+1;
		$new_nums=$bs['pnum']+1;
		 $idf=$bs['id'];
		
		 $dip=$bs['dip'];
		   
	
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
	 $urmatric=$sch_ab."".$thatyear."".$dept_ab."".$n_num;;
	
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

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['fname'];; ?>" /></td></tr>
               
                <tr><td>School Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php echo $ayear;; ?>"  style="color:#f00; font-weight:bold" /></td></tr>
              <tr><td>Level</td><td><input type="text" name="level"  readonly="readonly" value="600" /></td></tr>
              
               <tr><td>PROGRAM</td><td><input type="text" name="newclass" readonly="readonly" value="<?php echo $zone;; ?>" style="color:#f00; font-weight:bold" /></td></tr>
               
               
               
                
                <tr><td> Matricule</td><td><input type="text" name="matric" value="<?php echo $urmatric; ?>" readonly="readonly" style="color:#f00; font-weight:bold" /></td></tr>
                 
          
               
               
               
               
               
               <tr><td>Sex</td><td>  <select class="form-control" id="sel1" name="sex" onBlur="doCalc(this.form)" >
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <option value="Female"  onBlur="doCalc(this.form)">Female</option>
    <option value="Male"  onBlur="doCalc(this.form)">Male</option>
  </select></td></tr>
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $bs['cxx1']; ?>" required="required"/></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $bs['cxx2']; ?>" required="required"/></td></tr>
            
           
<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />

              
           
<input type="hidden" name="did"  value="<?php echo $idf; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-success"   >SAVE</button></td></tr>
                  <input type="hidden" name="last"  value="<?php echo $new_nums; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
        <?php }  }?>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$matric=$_POST['matric'];
$newclass=$_POST['newclass'];
$name=mysqli_real_escape_string($conn,$_POST['name']);

$month=date('m');
$year=date('Y');
$ayear=$_POST['ayear'];
$start=$_POST['start'];
$end=$_POST['end'];
$did=$_POST['did'];
$level=$_POST['level'];
$last=$_POST['last'];
 $idf;
 
 $sex=$_POST['sex'];

$POB=$_POST['pob'];
$DOB=$_POST['dob'];
 

	 $ats=$conn->query("select *  from courses  where  
matricule='$matric' ") or die(mysqli_error($conn)) ;

if($ats->num_rows>0){
	echo "<script>".$matric." is alreay in Use.</script>";
}
else {


 $query55=$conn->query("INSERT INTO courses set fname='$name', db1='$ayear', departmet='$newclass', levels='$level',sex='$sex',cxx1='$POB',cxx2='$DOB',matricule='$matric',level='PG' " ) or die(mysqli_error($conn)) ;
 
 
 $query55=$con->query("UPDATE special set pnum='$last' where certi ='$newclass' " ) or die(mysqli_error($con)) ;


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?pnew&link=%20New%20Intake">';	
	
}
	
}
	
?>