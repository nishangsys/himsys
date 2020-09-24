
  
  
    <div class="table-responsive">
                                
      <?php
	 echo $year=date('Y')-1;
	  
	   $d=$conn->query("SELECT * from courses where c101='$fyear' and c102='$syear' GROUP BY departmet,levels") or die(mysqli_error($conn));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
           <th>Level</th>

      
             
        <th>Action</th> 
        
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){
		  
		   ?>

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
             
        <td>
        
        
        
         <a href="?moving&dept=<?php echo $bu['departmet']; ?>&ayear=<?php echo $bu['db1']; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-primary"   >Move students to Level <?php echo $bu['levels']+100; ?> </button>
        
        
        
        </td>
        <td>
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 