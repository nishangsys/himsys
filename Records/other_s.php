  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$con->query("SELECT * FROM special order by prog_name") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
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
 			 
?>

 <div class="row">
 
        <div class="col-sm-9">
 <?php


	

		$d=$conn->query("SELECT * FROM special where id='".$zone."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 
	
	
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


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="../Records/OTH.php" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $bs['fname'];; ?>" autocomplete="off" /></td></tr>
               
              <tr><td>Program</td><td>
      
       <select class="form-control" id="sel1" name="dept_id" required>
    <option value="<?php echo $bu['id'];; ?>"><?php echo $bu['prog_name'];; ?></option>
   
  </select>
     </td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" required="required" autocomplete="off"/></td></tr>
               
              
                
                 <tr><td>School Year</td><td> 
                  <select class="form-control" id="sel1" name="ayear">
                  <?php
				  
				$ds=$conn->query("SELECT * FROM years  order by id DESC") or die(mysqli_error($conn));
		while($bus=$ds->fetch_assoc()){
	 
				  ?>
                <option value="<?php echo $bus['id']; ?>"><?php echo $bus['year_name']; ?></option>
                <?php } ?>
              
              </select>
                </td></tr>
               
               
           
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob"/></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" /></td></tr>
              
               <tr><td>Sex</td><td> <select class="form-control" id="sel1" name="sex">
               <option></option>
                <option value="male">Male</option>
              <option value="female">Female</option>
              
              </select></td></tr>
               
         <tr><td>Level</td><td> <select class="form-control" id="sel1" name="level">
         		<option></option>
                  <?php
				  
				$ds=$conn->query("SELECT * FROM levels ") or die(mysqli_error($conn));
		while($bus=$ds->fetch_assoc()){
	 
				  ?>
                <option value="<?php echo $bus['id']; ?>"><?php echo $bus['levels']; ?></option>
                <?php } ?>
              
              </select></td></tr>
  
                        
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
	

$level=$_POST['level'];

 $name=$_POST['name'];
$matric=$_POST['matric'];
$ayear=$_POST['ayear'];
$dob=$_POST['dob'];
$pob=$_POST['pob'];
$sex=$_POST['sex'];
$dept_id=$_POST['dept_id'];


$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
	}
	else {


	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$name',
level_id='$level',dept_id'$dept_id',sex='$sex',year_id='$ayear',pob='$pob',dob='$dob' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Records/index.php?edits&link=Edit%20Students">';	
	
}
	
}
	
?>
          </div>
          </div>
          
          <?php } ?> 