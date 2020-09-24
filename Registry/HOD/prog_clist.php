<?php
						$d=$conn->query("SELECT * FROM options where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['name'];
					}
?>


<div class="alert alert-info">
  <strong> <span style="color:#f00"><?php echo $dept_name; ?>  Class Lists For <?php echo $ayear; ?></span> </strong>
</div>
        
  
      <?php
	 
	
	  
	   $d=$conn->query("SELECT departmet,count(fname) as alls,db1,levels,roll FROM courses where db1='$ayear' and departmet='$dept_name' GROUP BY departmet,levels") or die(mysqli_error($conn));
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
        
       
        
        
         <a href="../HOD/download_clists.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-success"   >CSV Download Class List</button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table>