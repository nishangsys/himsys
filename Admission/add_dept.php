

<?php
if(isset($_POST['ok'])){	
	$_POST = array_map("strtoupper", $_POST);	
		
	$dept=$_POST['dept'];
	$school=$_POST['school'];
	$how=$_POST['how'];
	$gh12=$con->query("SELECT * FROM special WHERE certi='$dept' ") or die(mysqli_error($con));
	 $count=$gh12->num_rows;
	if($count>0){
		echo "<script>alert('$dept is already in the System')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=?add_dept">';

	}
	else {
	
	$gh=$con->query("INSERT INTO special set school='$school',certi='$dept',gh='$how' ") or die(mysqli_error($con));
	
	
	$message='<div class="alert alert-success">
  <strong>Message:</strong> '.$dept.' Successfully Added
</div>';
	echo '<meta http-equiv="Refresh" content="1; url=?add_dept">';
}
}

if(isset($_GET['delete'])){
	$gh=$con->query("delete from special where id='".$_GET['delete']."' ") or die(mysqli_error($con));
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> Item Successfully Deleted
</div>';
	echo '<meta http-equiv="Refresh" content="1; url=?add_dept">';
}
	
?>
<?php echo $message; ?>

  <form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Program:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Program" name="dept">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Department Code" name="how">
      </div>
    </div>
    
    
    
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="ok">ADD</button>
      </div>
    </div>
  </form>
</div>

<hr />

<?php $d=$con->query("SELECT * FROM special order by certi   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        <th>School</th>
        <th>Dept Code</th>
        
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="cornsilk">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['school']; ?></td>  
                                             <td><?php echo $bu['prog_name']; ?></td>  
                                              <td><?php echo $bu['gh']; ?></td>  
                                              <td><a href="?add_dept&delete=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-danger" onclick="return confirm('Are you sure wish to delete <?php echo $bu['prog_name']; ?>')" >Delete</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
    </table>
   

