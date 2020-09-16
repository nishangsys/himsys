

   <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               ADDING INCOME CLASSES   <span style="color:#f00; font-weight:bold">FOR  <?php echo $ayear_name; ?> Academic Year
                            </div>
  
  
  
  
        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>



   
      <?php
	  $do12=$con->query("SELECT * from income_classes  order by name ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>Code</th>
        <th>Finance Year</th>
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$do12->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['name']; ?></td>
        
         <td><?php echo $df['code']; ?></td>
        
           <td><?php echo $ayear_name; ?></td>
       

         <td>
     |   <a href="?view_more&class=<?php echo $df['name']; ?>&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">View More</button>    
        

</a> </td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>