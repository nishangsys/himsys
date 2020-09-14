
        
        
     <form class="form-horizontal" role="form" action="?mark" method="post" style="background:#fff; ">
 
 


 
  
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Program:</label>
    <div class="col-sm-10">
    
   

  
  <select class="form-control" id="sel1" name="prog" required>
  <option></option>
  
   <?php

   $dm=$con->query("SELECT * FROM gen_info GROUP BY choiceone") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	

?>
    <option value="<?php echo $bum['choiceone']; ?>"><?php echo $bum['choiceone']; ?></option>
   <?php } ?>
  </select>
</div>
    </div>
  </div> 
  
 
  
  
  
  
   
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">
     
    </label>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="two">Next Step</button>
   </div>

	</div>
  </form>
  