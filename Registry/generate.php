
  
  
  
  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM courses where db1='$ayear' GROUP BY departmet ") or die(mysqli_error($con));
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
  