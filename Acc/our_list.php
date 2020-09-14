
  
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$conn->query("SELECT departmet,count(fname) as alls FROM students where year_id='$year_id' GROUP BY departmet") or die(mysqli_error($conn));
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
         <td><?php echo $bu['departmet']; ?></td>
         <td><?php echo $bu['alls']; ?></td>
       

        <td>
        <a href="ddo.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['departmet']; ?> lists&year=<?php echo $year_id; ?> "><button class="btn btn-success"   >Excel Download </button>
        
        
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 </div></div>