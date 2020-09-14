<?php
include '../includes/dbc.php';
@session_start();
$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;



if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $whom=$userRow['full_name'];

 
 }
	 
	  $ass=$conn->query("SELECT * from students where roll='".$_GET['cust']."'  ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
		$lev=$bs['levels'];
		$mat=$bs['matricule'];
		
		
		
		
	
	
	
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
<h3>Handing Out Items to <?php echo $name=$bs['fname'];; ?> 
</h3>


             
 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name"  value="<?php echo $bs['fname'];; ?>" readonly="readonly" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" readonly="readonly" value="<?php echo $PRO=$bs['departmet'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" readonly="readonly"/></td></tr>
               
              
               <tr><td>Academic Year</td><td><input type="text" name="year_id" readonly="readonly" value="<?php  echo $bs['year_id'];
	 
 ?>" /></td></tr>

 <tr><td>Course Code</td><td>    <select required class="form-control" id="sel1" name="item">
        <?php
							
								$result = $con->query("SELECT * FROM sitems") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['name']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> </td></tr>
              
                  <tr><td></td><td><button type="submit" name="adds" class="btn btn-primary btn-lg"   >SAVE </button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </div>
          <?php 
if(isset($_POST['adds'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$nam=$_POST['name'];
$class=$_POST['class'];
$year=$_POST['year_id'];
$matric=$_POST['matric'];
$ca=$_POST['ca'];
$item=$_POST['item'];
$user=$_POST['user'];
$sem=$_POST['sem'];
$cour=$_POST['course'];
$month=date('G:i:s h:i:s');
$year=date('Y');

   $ats=$con->query("DELETE FROM our_items WHERE smat='$matric' and course='$item'") or die(mysqli_error($con)) ;
	 $ats=$con->query("insert into our_items set sname='$nam',  
smat='$matric',year_id='$year',fca='$ca',cca='$nca',edited='$user',ip='$localIP',comp='$computer',time='$month',reason='Items given',course='$item'") or die(mysqli_error($con)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?cust='.$who.'">';	
	
}
	
}
	}
	
?>


  
   <?php
 
$d=$con->query("SELECT * FROM our_items where smat='$mat' and reason='Items given' ") or die(mysqli_error($con));
$i=1;
	
 			 
?>
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; font-size:16px">Handing Out Items to <?php echo $matric; ?></div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Name</th>
        <th>Item</th>
        <th>Reason</th>
        <th>Time</th>
      
      </tr>
    </thead>
    <?php
	
while($bu=$d->fetch_assoc()){
	
	?>
    <tbody>
      <tr>
      <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
      <td><?php echo $i++; ?></td>
       <td><?php echo $bu['sname']; ?></td>
        <td><?php echo $bu['course']; ?></td>
        <td><?php echo $bu['reason']; ?></td>
        <td><?php echo $bu['time']; ?></td>
       
        <td>
       
       <a href="addmarks.php?cust=<?php echo $who; ?>&del=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-danger btn-sm" >Delete</button>
</a>
        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
  
  <?php
  if(isset($_GET['del'])){
	  $id=$_GET['del'];
	   $ats=$con->query("DELETE FROM our_items WHERE id='$id'") or die(mysqli_error($con)) ;




echo "<script>alert('Item Deleted Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?cust='.$who.'">';	
	
  }
  ?>