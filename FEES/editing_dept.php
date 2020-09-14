   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 


        
        
     

<div class="alert alert-success">
  <strong>Message:</strong> Add a Department
</div>
<hr />

<?php
include '../includes/dbc.php';
	
if(isset($_POST['ok'])){	
	$_POST = array_map("ucwords", $_POST);	
		
	$dept=$_POST['dept'];
	$fee1=$_POST['fee1'];
	$fee2=$_POST['fee2'];
	$abb=$_POST['abb'];
	$matt=$_POST['matt'];
	
	
	$gh=$dbcon->query("UPDATE classes set class='$dept' ,fees='$fee1',depf='$fee2',matt='$matt',abb='$abb' WHERE id='".$_GET['id']."'") or die(mysqli_error($dbcon));
	echo "<script>alert('".$dept." Successfully Update to ".$dept.",".$fee1.",".$fee2.",$abb')</script>";
	
	exit();
}

$a=$dbcon->query("SELECT *  FROM classes WHERE id='".$_GET['id']."' ") or die(mysqli_error($dbcon));
	while($as=$a->fetch_assoc()){


?>
<?php echo $message; ?>

  <form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Department" value="<?php echo $as['amountpaid']; ?>" name="dept">
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept Abbreviation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Abbreviation" name="abb" value="<?php echo $as['abb']; ?>">
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Fees for Cameroonian:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Fees for Cameroonian" name="fee1" value="<?php echo $as['fees']; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Fees for Foreigners:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Fees for Foreigners" value="<?php echo $as['depf']; ?>" name="fee2">
      </div>
    </div>
    
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="ok">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php
	}


?>