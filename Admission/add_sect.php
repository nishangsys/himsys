

<?php
if(isset($_POST['ok'])){	
	$_POST = array_map("ucwords", $_POST);	
		
	$dept=$_POST['dept'];
	//$code=$_POST['code'];
	$how=$_POST['how'];
	$gh12=$con->query("DELETE FROM main_sects WHERE name='$dept' and code='$how' ") or die(mysqli_error($con));
	
	
	$gh=$con->query("INSERT INTO main_sects set name='$dept',code='$how' ") or die(mysqli_error($con));
	
	
	$message='<div class="alert alert-success">
  <strong>Message:</strong> '.$dept.' Successfully Added
</div>';
}

if(isset($_GET['delete'])){
	$gh=$con->query("delete from main_sects where id='".$_GET['delete']."' ") or die(mysqli_error($con));
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> Item Successfully Deleted
</div>';
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
      <label class="control-label col-sm-2" for="email">Duration:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Duration" name="how">
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

<?php $d=$con->query("SELECT * FROM main_sects order by name   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        <th>Duration</th>
        
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
                                            <td><?php echo $bu['name']; ?></td>  
                                        
                                              <td><?php echo $bu['code']; ?></td>  
                                              <td><a href="?add_sect&delete=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-danger" onclick="return confirm('Are you sure wish to delete <?php echo $bu['name']; ?>')" >Delete</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
    </table>
   

