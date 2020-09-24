<?php
						$d=$conn->query("SELECT * FROM special where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['prog_name'];
					}
?>


<div class="alert alert-info">
  <strong> <span style="color:#f00"><?php echo $dept_name; ?>  Class Lists For <?php echo $ayear; ?></span> </strong>
</div>
        
  
      <?php
	 
	
	  
	   $d=$conn->query("SELECT special.prog_name as departmet,special.id as roll, levels.levels as level,COUNT(students.matricule) as alls,students.level_id as level_id  FROM special,levels,students where students.year_id='$ayear' and students.dept_id='".$_GET['did']."'  and students.dept_id=special.id AND levels.id=students.level_id GROUP BY students.level_id") or die(mysqli_error($conn));
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
       <td><?php echo $bu['level']; ?></td>
                <td><?php echo $bu['alls']; ?></td>

        <td>
        
       
        
        
         <a href="../HOD/download_clists.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['level_id'] ; ?> "><button class="btn btn-success"   >CSV Download Class List</button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table>