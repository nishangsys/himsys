
  
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$conn->query("SELECT dept_id,count(students.matricule) as alls,students.year_id,students.level_id as level_id,levels.levels as levels FROM levels,students  where students.year_id='$ayear' and levels.id=students.level_id GROUP BY  students.level_id") or die(mysqli_error($conn));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

       
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
         
       <td>Level <?php echo $bu['levels']; ?></td>
                <td><?php echo $bu['alls']; ?></td>

        <td>
        
        <a href="ddo12.php?list=<?php echo $bu['depat_id']; ?>&link=<?php echo $bu['prog']; ?> lists&year_id=<?php echo $ayear; ?>&level=<?php echo $bu['level_id']; ?>&id=<?php echo $bu['id']; ?> "><button class="btn btn-success"   >Excel Download </button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 