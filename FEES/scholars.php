
<?php $d=$con->query("SELECT * FROM scholars order by name   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        
        <th>Contact</th>
        
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Cornsilk">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['name']; ?></td>  
                                             <td><?php echo $bu['tel']; ?></td>  
                                              <td><a href="?scholars&link=Scholarship Providers&delete=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-danger" >Delete</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
    </table>
   



<?php
if(isset($_POST['ok'])){	
	$_POST = array_map("ucwords", $_POST);	
		
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$gh12=$con->query("DELETE FROM scholars WHERE name='$name' ") or die(mysqli_error($con));
	
	
	$gh=$con->query("INSERT INTO scholars set name='$name',tel='$tel' ") or die(mysqli_error($con));
	
	
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> '.$name.' Successfully Added
</div>';

			echo '<meta http-equiv="Refresh" content="0; url= ?scholars&link=Scholarship Providers">';
				
}

if(isset($_GET['delete'])){
	$gh=$con->query("delete from scholars where id='".$_GET['delete']."' ") or die(mysqli_error($con));
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> Item Successfully Deleted
</div>';
echo '<meta http-equiv="Refresh" content="0; url= ?scholars&link=Scholarship Providers">';
}
	
?>
<?php echo $message; ?>

  <form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Scholar Name" name="name">
      </div>
    </div>
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Contact:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Scholar Contact" name="tel">
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
