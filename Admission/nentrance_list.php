
  
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM gen_info GROUP BY choiceone") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
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
                                            <td><?php echo $bu['choiceone']; ?></td>
       

        <td><a href="?get_nentrance=<?php echo $bu['choiceone']; ?>&link=<?php echo $bu['choiceone']; ?> lists"><button class="btn btn-primary"   >Generate Final Lists</button></td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 </div></div>