<form class="form-inline" action="" method="POST">
 
 
  <div class="form-group">
    <label for="pwd">Start Year:</label>
     <select class="form-control" id="sel1" name="s" required>
                 <option></option>
                <?php
				for($x=2016; $x<=2030; $x++){
				?>
                <option value="<?php echo $x; ?>">
                <?php echo $x; ?>
                </option>
                <?php } ?>
                 </select>
  </div>
  
  <div class="form-group">
    <label for="pwd">End Year:</label>
     <select class="form-control" id="sel1" name="e" required>
                 <option></option>
                <?php
				for($x=2016; $x<=2030; $x++){
				?>
                <option value="<?php echo $x; ?>">
                <?php echo $x; ?>
                </option>
                <?php } ?>
                 </select>
  </div>
  
   <div class="form-group">
    <label for="pwd">Semester:</label>
     <select class="form-control" id="sel1" name="sem" required>
                 <option></option>
                   <option value="1">First Semester</option>
             <option value="2">Second Semester</option>
                       <option value="3">Resits </option>
             
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-primary">Submit</button>
</form>  
  
  
    </form>
    </div>
   
      <?php
	 
	  if(isset($_POST['ok'])){
	  $dept=$_POST['dept'];
	  $a=$_POST['s'];
	  $b=$_POST['e'];
	  $sem=$_POST['sem'];
	 $ayear=$a."/".$b;
	   $FF=$conn->query("SELECT * FROM `my_Registry`  WHERE ayear='$ayear' and sem='$sem' ") or die(mysqli_error($conn));
	   	if($FF->num_rows<1){
			  echo '<div class="alert alert-danger">
  <strong>ERROR! No marks found for '.$ayear.' semeser '.$sem.' </strong> 
</div>';
		}
		else {
	   $d=$conn->query("update `my_Registry` set exam=exam+2 WHERE ayear='$ayear' and sem='$sem' and ca+exam>=48 and ca+exam<50") or die(mysqli_error($conn));
	  
	  echo '<div class="alert alert-success">
  <strong>Success! ALL  '.$ayear.' semeser '.$sem.' Marks have been adjusted to Nearest Whole Number</strong> 
</div>';
	  }
	  }

?>                       
                                
 
 