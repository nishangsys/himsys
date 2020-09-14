
        <?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['two'])){
$shape=$_POST['name'];


  
  
	  $dfGu=$con->query("DELETE FROM sitems WHERE name='$shape' and year_id='$ayear'") or die(mysqli_error($con));
	  $dfGu=$con->query("INSERT INTO  sitems SET name='$shape',year_id='$ayear'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }


 
	
  
?>

        
     <form class="form-horizontal" role="form" action="" method="post" style="background:#fff; ">
 
 


 
 
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="pwd" placeholder="Item Name" name="name">
    </div>
  
   
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">
     
    </label>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="two">SAVE</button>
   </div>

	</div>
  </form>
  
  
  
  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM sitems where year_id='$ayear' ") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        <th>Academic year</th> 
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
           <td><?php echo $bu['name']; ?></td>
            <td><?php echo $bu['ayear']; ?></td>
       
       

        <td>  <a href="?items&link=Items to students&del=<?php echo $bu['id']; ?>">Delete</a></td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
  
  <?php
  
   if(isset($_GET['del'])){
	  
	echo  $id=$_GET['del'];
	
		  $res = $con->query("DELETE FROM sitems WHERE id='$id'   ") or die(mysqli_error($con));
	  
		echo '<meta http-equiv="Refresh" content="0; url=?items&link=Items to students">';
	 
  }
  
  ?>