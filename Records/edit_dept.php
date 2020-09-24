<?php
include '../includes/dbc.php';
$years=date('y');
if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}

$CC=$ayear_name;
$ssyear=substr($CC,2,2);


	
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
		<?php
		 $select=$conn->query("SELECT * from levels,special,students  where students.id='".$_GET['cust']."' 
	  AND special.id=students.dept_id AND levels.id=students.level_id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	$levl_id=$rows['level_id'];
	if($levl_id>1){
		echo '<div class="alert alert-danger">
		  <strong>ERROR. Change of Program is Not Possible at the Level</strong> 
		</div>';


	}
	else {
		?>
       <br />
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">
    
          <div class="well">
 <form class="form-horizontal" action="" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$con->query("SELECT * FROM special where id!='".$_GET['dept']."' order by prog_name ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Section:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="id" required>
         

       <?php
	   $d=$con->query("SELECT * FROM main_sects where name='HND' order by name ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['name']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>  
	
	
	
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Level:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="level" required>
	     <?php
	   $d=$con->query("SELECT * FROM levels,students where students.id='".$_GET['cust']."'
          AND students.level_id=levels.id 	   ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $cl=$df['level_id']; ?>"><?php echo $df['levels']; ?></option>
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
  $zone=mysqli_real_escape_string($con,$_POST['dept']);
 $who=$_GET['cust'];
 $level=$_POST['level'];
 $id=mysqli_real_escape_string($con,$_POST['id']);
 
 
  $d=$dbcon->query("SELECT * FROM main_sects where id='".$id."'") or die(mysqli_error($dbcon));
  while($bu=$d->fetch_assoc()){
	 $code=$bu['code'];
	  $name=$bu['name'];
	   $fid=$bu['id'];
	  $last=$bu['last'];
  }
$d=$dbcon->query("SELECT * FROM special where id='".$zone."'") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $dept=$df['prog_name'];
		   $ik=$df['gh'];
	   }
	   
	   
	   
	 $ass=$dbcon->query("SELECT * from main_sects where name='$name' and  year_id='$ayear'  ") or die(mysqli_error($dbcon));
	  $bn=$ass->num_rows;
	while ($bs=$ass->fetch_assoc()){
		 
		   $num=$bs['last'];
		  $iid=$bs['id'];
		  
		  }
		  if($num<1){
			 $n=1;
			$new_num=$n+1;
		  }
		  else {
			  $n=$num+1;
		 $new_num=$num+1;
		 
		   
	}
    $L=$n;
	   if($n<10){
		   $ml="000".$L;
	   }
	   else if($n<100){
		   $ml="00".$L;
	   }
	    else if($n<1000){
		   $ml="0".$L;
	   }
	   else {
		   $ml=$L;
	   }
	   
	   $mat="$code/".$ik."/".$ssyear."/".$ml."";
 			 ?>


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">
	 <?php
	 
		
	 
	 ?>

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['fname'];; ?>" /></td></tr>
               
              <tr><td>Current Program</td><td>
			  
			     <select class="form-control" id="sel1" name="dept" required>
             
				   <?php
				   $d=$con->query("SELECT * FROM special where id='".$rows['dept_id']."'  ") or die(mysqli_error($con));
				   while($df=$d->fetch_assoc()){
				   ?>
				<option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
				<?php } ?>
	
	</td></tr>
               </td></tr>
                 
              
               
                
                 <tr><td>New Program</td><td>
				 <select class="form-control" id="sel1" name="ndept" required>
             
				   <?php
				   $d=$con->query("SELECT * FROM special where id='".$zone."'  ") or die(mysqli_error($con));
				   while($df=$d->fetch_assoc()){
				   ?>
				<option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
				<?php } ?>
				 
				 
				 </td></tr>
               
                
               
               
  
  
  
               
                <tr><td>Fees</td><td><input type="text" name="fees" value="<?php 

					$d=$con->query("SELECT * FROM settings where prog_id='".$zone."' and level_id='$level' ") or die(mysqli_error($con));
				   while($df=$d->fetch_assoc()){
					  echo $df['fees'];
				   }

				?>" readonly="readonly" />
				
				
               
                <tr><td>Debts</td><td><input type="text" name="debt" value="<?php 

					$d=$con->query("SELECT * FROM fee_paymts where matric='".$rows['matricule']."' and yearid!='$ayear' and balance>0") or die(mysqli_error($con));
				   while($df=$d->fetch_assoc()){
					  $bal=$df['balance'];
				   }
				   if(empty($bal)){
					   echo 0;
				   }
				   else {
					   echo $bal;
				   }

				?>" readonly="readonly" />
  
  
               
                <tr><td>Former Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matricule']; ?>" readonly="readonly" />
                
                
               
                <tr><td>New Matricule</td><td><input type="text" name="newmat" value="<?php echo $mat; ?>" required="required" readonly />
             
             
           
<input type="hidden" name="levelid"  value="<?php echo $rows['level_id']; ?>"  />
           
<input type="hidden" name="year_id"  value="<?php echo $rows['year_id']; ?>"  />

<input type="hidden" name="last" required="required" value="<?php echo $L; ?>"  />
<input type="hidden" name="sector" required="required" value="<?php echo $id; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-danger"   >UPDATE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
    <?PHP } ?>
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$yid=$_POST['yid'];
$class=$_POST['class'];
$fees=$_POST['fees'];
$oldd=$_POST['dept'];
$matric=$_POST['matric'];
$newd=$_POST['ndept'];
$newmat=$_POST['newmat'];
$level_id=$_POST['levelid'];
$year_id=$_POST['year_id'];
$lasts=$_POST['last'];
$sector=$_POST['sector'];
$month=date('m');
$year=date('Y');

$ats=$conn->query("SELECT * FROM students where
matricule='$newmat'  ") or die(mysqli_error($conn)) ;
$count=$ats->num_rows;
	if($count>0){
		echo "<script>alert('ERROR. $newmat already exists. Change it'); </script>";

	}
	else {

	$ats=$conn->query("INSERT INTO  students_changedept  set new_dept='$newd', year_id='$year_id',
matric='$newmat',old_dept='$oldd',old_mat='$matric' ") or die(mysqli_error($conn)) ;
	
	 $ats=$conn->query("update  fee_paymts  set program_id='$newd',level_id='$level_id', yearid='$year_id',
matric='$newmat',expected_amount='$fees'  WHERE student_id='".$_GET['cust']."'") or die(mysqli_error($conn)) ;

	 $atsmm=$conn->query("update  students  set dept_id='$newd', 
matricule='$newmat'  WHERE id='".$_GET['cust']."'") or die(mysqli_error($conn)) ;

	

 $ats=$con->query("update  daily  set cust_id='$newmat'  WHERE cust_id='".$matric."'") or die(mysqli_error($con)) ;
 

 $query55=$dbcon->query("UPDATE main_sects set last='$lasts', year_id='$ayear'  where id='".$sector."'" ) or die(mysqli_error($dbcon)) ;



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	
	
	
}
}
?>


<?php } ?>