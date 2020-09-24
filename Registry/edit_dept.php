<?php
include '../includes/dbc.php';

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
 			 




	  $select=$conn->query("SELECT * from courses  where roll='".$who."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	
		
	
	 $ass=$con->query("SELECT * from special where certi='".$zone."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $sch_ab=$bs['begc'];
		 $dept_ab=$bs['code'];
		 $num=$bs['stat'];
		 $new_nums=$bs['stat']+1;
		 $idf=$bs['id'];
		
		 $dip=$bs['dip'];
		   
	}
	
	////if it less than 100 then add 0
	if($num<10){
		 $n_num="00".$num;
	}
	else if($num<100){
		 $n_num="0".$num;
	}
	else {
	$n_num=$num;
	}
	 $urmatric=$sch_ab."".$y."".$dept_ab."".$n_num;;
	
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
               
              <tr><td>Formal Program</td><td><input type="text" name="class"  readonly="readonly" value="<?php echo $rows['departmet'];; ?>" /></td></tr>
              
               <tr><td>New Program</td><td><input type="text" name="newclass" readonly="readonly" value="<?php echo $zone;; ?>" style="color:#f00; font-weight:bold" /></td></tr>
               
               
               
                <tr><td>Old Matricule</td><td><input type="text" name="new _matric" value="<?php echo $rows['matricule']; ?>" readonly="readonly" /></td></tr>
                
                <tr><td>New Matricule</td><td><input type="text" name="matric" value="<?php echo $urmatric; ?>" readonly="readonly" style="color:#f00; font-weight:bold" /></td></tr>
                 
              
           
<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />

              
           
<input type="hidden" name="did"  value="<?php echo $idf; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >UPDATE</button></td></tr>
                  <input type="hidden" name="last"  value="<?php echo $new_nums; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
        <?php } } ?>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$matric=$_POST['matric'];
$newclass=mysqli_real_escape_string($conn,$_POST['newclass']);
$month=date('m');
$year=date('Y');

$start=$_POST['start'];
$end=$_POST['end'];
$did=$_POST['did'];
$last=$_POST['last'];

 $idf;
 

	 $ats=$conn->query("update  courses  set  
matricule='$matric',departmet='$newclass' WHERE roll='".$_GET['cust']."'") or die(mysqli_error($conn)) ;




 $query55=$con->query("UPDATE special set stat='$last' where certi ='$newclass' " ) or die(mysqli_error($con)) ;

echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	

	
}
	
?>