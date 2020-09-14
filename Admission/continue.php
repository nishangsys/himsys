<div class="table-responsive">
                                
      <?php $d=$con->query("SELECT * FROM gen_info where fax='man' ") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        <th>Code</th> 
        
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
                                            <td><?php echo $bu['names']; ?></td>
       

        <td><?php echo $bu['matric']; ?></td>

       <td> 
         <a href="?one=<?php echo $bu['matric']; ?>&link=Step One"><button class="btn btn-success"   >Step One</button></a> | <a href="?two=<?php echo $bu['matric']; ?>&link=Step Two"><button class="btn btn-success"   >Step Two</button></a> | <a href="?three=<?php echo $bu['matric']; ?>&link=Step One"><button class="btn btn-success"   >Step Three</button></a>
         
         | <a href="../SuperAdmission/page.php?code=<?php echo $bu['matric']; ?>" target="new"><button class="btn btn-primary"    >Print FORM</button></a>
   
       
       </td>
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>