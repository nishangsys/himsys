<div class="alert alert-success">
  <strong>Message:</strong> Add a Department
</div>
<hr />

<?php
if(isset($_POST['ok'])){	
	$_POST = array_map("ucwords", $_POST);	
		
	$dept=$_POST['dept'];
	$gh12=$con->query("DELETE FROM depts WHERE dept='$dept' ") or die(mysqli_error($con));
	
	
	$gh=$con->query("INSERT INTO depts set dept='$dept' ") or die(mysqli_error($con));
	
	
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> '.$dept.' Successfully Added
</div>';
}

if(isset($_GET['delete'])){
	$gh=$con->query("delete from depts where id='".$_GET['delete']."' ") or die(mysqli_error($con));
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> Item Successfully Deleted
</div>';
}
	
?>
<?php echo $message; ?>

  <form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="dept">
      </div>
    </div>
    
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="ok">Submit</button>
      </div>
    </div>
  </form>
</div>

<hr />

<?php $d=$con->query("SELECT * FROM depts order by dept   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

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
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['dept']; ?></td>  
                                              <td><a href="?add_dept&delete=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-danger" >Delete</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
    </table>
   

