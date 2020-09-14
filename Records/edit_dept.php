<?php
include '../includes/dbc.php';
$years=date('y');
if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}



	  $select=$conn->query("SELECT * from students  where roll='".$who."' ") or die(mysqli_error($conn));
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
    <option value="<?php echo $df['prog_name']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Section:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="id" required>
              <option>........</option>

       <?php
	   $d=$con->query("SELECT * FROM main_sects order by name ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['name']; ?></option>
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
 $id=mysqli_real_escape_string($con,$_POST['id']);
 
 
  $d=$con->query("SELECT * FROM main_sects where id='".$id."'") or die(mysqli_error($con));
  while($bu=$d->fetch_assoc()){
	 $code=$bu['code'];
	  $name=$bu['name'];
	   $fid=$bu['id'];
  }
$d=$con->query("SELECT * FROM special where id='".$_GET['id']."'") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
		   $dept=$df['prog_name'];
		   $ik=$df['gh'];
	   }
  $d=$con->query("SELECT * FROM mats LIMIT 1") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
		  $L=$df['last']+1;
		 
	   }
	   if($L<10){
		   $ml="00".$L;
	   }
	   else if($ml<100){
		   $ml="0".$L;
	   }
	   else {
		   $ml=$L;
	   }
	   
	   $matss="$code/".$ik."".$years."/".$ml."";
 			 ?>


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['fname'];; ?>" /></td></tr>
               
              <tr><td>Current Program</td><td><input type="text" name="class" required="required" value="<?php echo $rows['departmet'];; ?>" /></td></tr>
               </td></tr>
                 
              
               
                
                 <tr><td>New Program</td><td><input type="text" name="newd" readonly="readonly" value="<?php echo $zone;; ?>" style="color:#f00; font-weight:bold" /></td></tr>
               
                
               
  
  
               
                <tr><td>Former Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matricule']; ?>" readonly="readonly" />
                
                
               
                <tr><td>New Matricule</td><td><input type="text" name="newmat" value="<?php echo $matss; ?>" required="required" />
             
             
           
<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />
                        
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


$matric=$_POST['matric'];
$newd=$_POST['newd'];
$newmat=$_POST['newmat'];
$month=date('m');
$year=date('Y');

$ats=$conn->query("SELECT * FROM students where
matricule='$newmat'  ") or die(mysqli_error($conn)) ;
$count=$ats->num_rows;
	if($count>0){
		echo "<script>alert('ERROR. $newmat already exists. Change it'); </script>";

	}
	else {

	
	

	 $ats=$conn->query("update  students  set departmet='$newd', 
matricule='$newmat'  WHERE roll='".$yid."'") or die(mysqli_error($conn)) ;

	 $ats=$conn->query("update  historic  set amountpaid='$newd', 
matricule='$newmat'  WHERE matricule='".$matric."'") or die(mysqli_error($conn)) ;

 $ats=$con->query("update  daily  set cust_id='$newmat'  WHERE cust_id='".$matric."'") or die(mysqli_error($con)) ;

$c=$con->query("UPDATE mats set last='$L'  ") or die(mysqli_error($con)) ;




/*

 $daily=$conn->query("INSERT INTO daily set cust_id='$matric',room='$room',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',
			rec='$all',date='$dates',month='$month',year='$ayear',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bbm',
			purpose='fees'") or die(mysqli_error($conn));

*/
echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	
	
	
}
}
?>


\