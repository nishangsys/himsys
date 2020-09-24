
        
        
     <form class="form-horizontal" role="form" action="?pof" method="post" style="background:#fff; ">
 
 


 
  
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Choose Year:</label>
    <div class="col-sm-10">
    
   

  
  <select class="form-control" id="sel1" name="prog" required>
  <option></option>
  
   <?php

   $dm=$con->query("SELECT * FROM gen_info GROUP BY year") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	

?>
    <option value="<?php echo $bum['year']; ?>"><?php echo $bum['year']; ?></option>
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
  
  
  
  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM ratings where year='$year' ") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
        <th>Pass Mark</th> 
        
        
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
                                            <td><?php echo $bu['prog']; ?></td>
       

        <td><?php echo $bu['mark']; ?></td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>