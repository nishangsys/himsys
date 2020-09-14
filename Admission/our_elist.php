
  
  
  
  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM marks_sheet where year='$year' group by prog ") or die(mysqli_error($con));
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
     echo '<tr bgcolor="CornSilk">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['prog']; ?></td>
       

        
        <td> 
         <a href="print12.php?final=<?php echo $bu['prog']; ?>&link=Step One&year=<?php echo $year; ?>" target="new"><button class="btn btn-success"   >Generate Final Lists</button></a>
   
       
       </td>
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>