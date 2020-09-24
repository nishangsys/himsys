<?php
include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	 $who=$_GET['cust'];
	
	  $select=$conn->query("SELECT * from students  where students.id='".$who."'  ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$MATRIC=$rows['matricule'];
	}


	$check=$conn->query("SELECT * from students_details  where matric='".$MATRIC."'  ") or die(mysqli_error($conn));
	if($check->num_rows>0){
		 $select=$conn->query("SELECT * from students,students_details  where students.matricule='".$MATRIC."' AND students_details.matric=students.matricule   ") or die(mysqli_error($conn));
	}
	else {
		 $select=$conn->query("SELECT * from students   where students.matricule='".$MATRIC."'   ") or die(mysqli_error($conn));
	}

	 
	while ($rows=$select->fetch_assoc()){
	
		
	 
	
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
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matricule']; ?>" readonly="readonly" /></td></tr>
                 
               <tr><td>Phone Number</td><td><input type="number" name="phone" value="<?php echo $rows['phone']; ?>"  /></td></tr>
              
         
                     
               <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $rows['email']; ?>"    /></td></tr>
              
                <tr><td>Parents Name</td><td><input type="text" name="p_name" value="<?php echo $rows['p_name']; ?>"  /></td></tr>
              
                 <tr><td>Parents Contact</td><td><input type="text" name="p_contact" value="<?php echo $rows['p_contact']; ?>"  /></td></tr>
              
                  <tr><td>Parents Address</td><td><input type="text" name="p_address" value="<?php echo $rows['p_address']; ?>"  /></td></tr>
              
                
                 <tr><td>Sponsor Name</td><td><input type="text" name="sponsor_name" value="<?php echo $rows['sponsor_name']; ?>"  /></td></tr>
              
                 <tr><td>Sponsor Contact</td><td><input type="text" name="sponsor_tel" value="<?php echo $rows['sponsor_tel']; ?>"  /></td></tr>
              
                  <tr><td>Sponsor Address</td><td><input type="text" name="sponsor_add" value="<?php echo $rows['sponsor_add']; ?>"  /></td></tr>
              
         
       
              
         
  
              <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
     
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >UPDATE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   <?php } ?>
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$sponsor_name=$_POST['sponsor_name'];

$sponsor_add=$_POST['sponsor_add'];
$sponsor_tel=$_POST['sponsor_tel'];
$p_contact=$_POST['p_contact'];
$p_address=$_POST['p_address'];
$p_name=$_POST['p_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$matric=$_POST['matric'];


	 $ats=$conn->query("SELECT * FROM students_details where matric='$matric' ") or die(mysqli_error($conn)) ;
	 if($ats->num_rows>0){
		 

 $ats=$conn->query("update  students_details  set  
sponsor_name='$sponsor_name',sponsor_add='$sponsor_add',sponsor_tel='$sponsor_tel',p_contact='$p_contact',p_address='$p_address',p_name='$p_name',email='$email',phone='$phone' WHERE matric='".$matric."'") or die(mysqli_error($conn)) ;
		 
		 echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Records/address.php?cust='.$who.'">';	
	 }
	 else {



 $ats=$conn->query("INSERT INTO  students_details  set  
sponsor_name='$sponsor_name',sponsor_add='$sponsor_add',sponsor_tel='$sponsor_tel',p_contact='$p_contact',p_address='$p_address',p_name='$p_name',email='$email',phone='$phone',matric='".$matric."'") or die(mysqli_error($conn)) ;

echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Records/address.php?cust='.$who.'">';	
	
}
	
}
	}

?>