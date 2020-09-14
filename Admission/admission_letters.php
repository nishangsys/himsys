
  
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT prog,count(prog) as alls,year FROM lists GROUP BY prog") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
        <th>Number of Candidates</th>
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
         <td><?php echo $bu['prog']; ?></td>
         <td><?php echo $bu['alls']; ?></td>
       

        <td><a href="?print_list=<?php echo $bu['prog']; ?>&link=<?php echo $bu['prog']; ?> lists&year=<?php echo $bu['year']; ?> "><button class="btn btn-primary"   >Generate Final Lists</button></td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 </div></div>