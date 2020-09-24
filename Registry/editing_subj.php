<?php
//include '../includes/dbc.php';

if(isset($_GET['editing_subj'])){

	
	 $ass=$conn->query("SELECT * from subject where roll='".$_GET['id']."'  ") or die(mysqli_error($conn));
	while ($rows=$ass->fetch_assoc()){
	
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

              <tr><td>Courses Title</td><td><input type="text" name="title" required="required" autocomplete="off" value="<?php echo $rows['title'];; ?>" /></td></tr>
               
              <tr><td>Course Code</td><td><input type="text" name="code" required="required" autocomplete="off" value="<?php echo $rows['subject'];; ?>" readonly="readonly"   /></td></tr>
               
               
                <tr><td>Credit Value</td><td><input type="text" name="credit" autocomplete="off" value="<?php echo $rows['credit']; ?>" required/></td></tr>
                
                
                <tr><td>Status</td><td><input type="text" name="status" autocomplete="off" value="<?php echo $rows['status']; ?>" required/></td></tr>
                
                  
          
                   <tr><td>Semester</td><td><input type="text" name="sem" autocomplete="off" value="<?php echo $rows['sem']; ?>" required/></td></tr>
                
            
             <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="level" >
              <option value="<?php echo $rows['level']; ?>"  ><?php echo $rows['level']; ?> </option>
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
           
        <option value="<?php echo $bu['levels']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
  <tr><td>Department ID</td><td> <select required class="form-control" id="sel1" name="dept" >
              <option value="<?php echo $rows['department']; ?>"  ><?php echo $rows['department']; ?> </option>
        <?php
							
								$result = $con->query("SELECT * FROM special group by certi ") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
           
        <option value="<?php echo $bu['certi']; ?>"  ><?php echo $bu['certi']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
             

<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />

 <tr><td></td><td><input type="hidden" name="ayear" readonly="readonly" value="<?php  echo $ayear;
	 
 ?>" /></td></tr>
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
    <?php }  } ?>
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

 $title=$_POST['title'];
$cv=$_POST['credit'];
$status=$_POST['status'];

$sem=$_POST['sem'];

$level=$_POST['level'];
$dept=$_POST['dept'];



	/* $ats=$conn->query("insert into  subject  set  
title='$title',credit='$cv',status='$status'sem='$sem'mlevel='$level,department='$dept' where roll='".$_GET['id']."'") or die(mysqli_error($conn)) ;
*/

 $ats=$conn->query("UPDATE subject  set  
title='$title',credit='$cv',status='$status',sem='$sem',level='$level',department='$dept' where roll='".$_GET['id']."'") or die(mysqli_error($conn)) ;

echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?edit_course">';	
	
}
	

	
?>