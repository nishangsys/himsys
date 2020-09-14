
  
  
  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM special order by certi") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        
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
           <td><?php echo $bu['prog_name']; ?></td>
          

        <td>   <a href="?saveitems=<?php echo $bu['prog_name']; ?>&link=Saving <?php echo $bu['prog_name']; ?> Items"><button class="btn btn-success"   >Generate item Lists</button></a></td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
  
  <?php
  
   if(isset($_GET['del'])){
	  
	echo  $id=$_GET['del'];
	
		  $res = $con->query("DELETE FROM sitems WHERE id='$id'   ") or die(mysqli_error($con));
	  
		echo '<meta http-equiv="Refresh" content="0; url=?items&link=Items to students">';
	 
  }
  
  ?>