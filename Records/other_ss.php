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
  
  
  
   <?php
   if(isset($_POST['ok'])){
$zone=$_POST['dept'];
 			 
?>

 <div class="row">
 
        <div class="col-sm-9">
 <?php


	

		$d=$con->query("SELECT * FROM students,special where special.id='".$zone."' AND special.id=students.dept_id ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	 $id=$bu['ids'];
	 $prog_name=$bu['prog_name'];
	 $prog_id=$bu['id'];
	 $hl=$bu['conn'];
	 $ll=$bu['depf'];
	
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


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="../Records/Saved_MissingNames.php"  role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $bs['fname'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td>
                <select  class="form-control" required id="sel1" name="prog" >
			         
        <option value="<?php echo $prog_id; ?>"  ><?php echo $prog_name; ?> </option>
   
        
      </select>
              </td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" required="required"/></td></tr>
               
              
              
               <tr><td>Sector</td><td> <select class="form-control" id="sel1" name="sector" onBlur="doCalc(this.form)" required>
        <option  onBlur="doCalc(this.form)"></option>
    <?php 
	
	$d=$con->query("SELECT * FROM main_sects order by name   ") or die(mysqli_error($con));
 while($bu=$d->fetch_assoc()){ 
 $day=$bu['name'];
 $idi=$bu['id'];
					
					echo "<option value='$idi'>$day</option>";
					}
					?>
  </select></td></tr>
  
  
  <tr><td>Gender </td><td> <select class="form-control" id="sel1" name="sector" onBlur="doCalc(this.form)" required>
        <option value="" ></option>

			 <option value="Male">Male</option>
              <option value="Female">Female</option>
  </select></td></tr>
               
                 <tr><td>Start Year</td><td>  <select  class="form-control" required id="sel1" name="year_id" required >
                 <option></option>

        <?php
							
								$result = $con->query("SELECT * FROM years") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['year_name']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
               
               
            
              
             
            <tr><td>Level</td><td> <select  class="form-control" required id="sel1" name="level_id" required >
                 <option></option>

        <?php
							
								$result = $con->query("SELECT * FROM levels") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
          <input type="hidden" name="ids"  value="16" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

	
$name= $data['name'];
$level_id=$_POST['level_id'];
 $matric=$_POST['matric'];
$prog_id=$_POST['prog_id'];
$year_id=$_POST['year_id'];
$level_id=$_POST['level_id'];
$sector_id=$_POST['sector'];
$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($conn)) ;
	if($c->num_rows>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
	}
	else {


	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$ayear',c110='$ids',c101='$year',c102='$year2',cxx7='$dept',nationality='Cameroonian',cxx1='$POB',cxx2='$DOB',cxx6='$sector' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Fees/first.php?ffirst">';	
	
}
	
}
	
?>
          </div>
          </div>
          
          <?php } ?> 