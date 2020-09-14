
  
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$conn->query("SELECT departmet,count(fname) as alls,ayear,levels,roll FROM students where year_id='$ayear' GROUP BY departmet,levels") or die(mysqli_error($conn));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
           <th>Level</th>

        <th>Number of students</th>
             
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
       <td><?php echo $bu['levels']; ?></td>
                <td><?php echo $bu['alls']; ?></td>

        <td>
        
        <a href="ddo.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&year_id=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> &id=<?php echo $bu['id']; ?>"><button class="btn btn-success"   >Excel Download </button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 