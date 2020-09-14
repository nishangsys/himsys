<script type="text/javascript">
function doCalc(form) {
	
}
</script>
  <?php
  if(isset($_GET['uname'])){
	 $name=$_GET['uname'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=mysql_query("SELECT * from historic WHERE roll='$id'   ") or die(mysql_error());
	 while($ad=mysql_fetch_assoc($a)){

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Old Matricule</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="matric" value="<?php echo $ad['matricule']; ?>" readonly="readonly">
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">New Matricule</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="matricule" value="<?php echo $ad['matricule']; ?>" required="required">
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $_GET['levelss']; ?>"><?php echo $_GET['levelss']; ?></option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
     <option value="500">500</option>

  </select>
</div>
</div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">

         <select required class="form-control"  name="class" required >
       <option value="<?php echo $ad['amountpaid'];; ?>"><?php echo $ad['amountpaid'];; ?></option>
        <?php
							
								$result = $con->query("SELECT * FROM special group by certi") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['prog_name']; ?>"  ><?php echo $bu['prog_name']; ?> </option>
    <?php } ?> 
      </select>      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
       
         <select required class="form-control"  name="ayear" required >
       <option value="<?php echo $ayear;; ?>"><?php echo $ayear;; ?></option>
       
        <?php
							
								$result = $conn->query("SELECT * FROM historic group by ayear asc") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['ayear']; ?>"  ><?php echo $bu['ayear']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
    
   
    
    
    
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="old" value="<?php echo $ayear ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="dup" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>











<?PHP


if(isset($_POST['dup'])){

	$_POST = array_map("ucwords", $_POST);
	

	
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
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$cateory=$_POST['category'];

$level=$_POST['level'];


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

$ass=$_POST['ass'];
$class1=$_POST['amountpaid'];


$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$id=$_POST['as'];
$month=date('m');
$year=date('Y');

	
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/


$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
 $sha1pass = PwdHash($data['pass']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Generates activation code simple 4 digit number
$activ_code = rand(1000,9999);



$dates=date('d-m-Y');
$classes=$_POST['amountpaid'];
echo $ay=$_POST['old'];

echo $ats=$conn->query("UPDATE students  set levels='$level',departmet='$classes',matricule='$matricule',fname='$first_name'  
WHERE fname='$fname' AND year_id='$ay' ")  or die(mysqli_error($conn)) ;


$query55=$conn->query("UPDATE historic  set  
 time='$level',student_name='$fname',class='$class1',year_id='$ayear',matricule='$matricule' where roll='$id'  " )   or die(mysqli_error($conn)) ; 

$query556=$con->query("UPDATE daily  set  
 time='$level',cust_id='$matricule' where staffname='$fname' and year='$ayear'  " )   or die(mysqli_error($con)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?updatem">';	
	
 	
}
	

?>


