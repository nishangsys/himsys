<div class="container-fluid text-center">    
  <div class="row content">
   
    <div class="col-sm-12 text-left"> 
      <div class="alert alert-danger">
        <strong>Software Says!</strong> Selling to <strong>
        <?php echo $_GET['our_staff']; ?></strong></a>.
      </div>
       <?php
	   $today=date('d-m-Y');
	  $do12=$con->query("SELECT * from names where date='$today' and sector='lab' order by id DESC LIMIT 5 ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>SECTOR</th>
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
         <td><?php echo $df['dept']; ?></td>
         <td><?php echo $df['sector']; ?></td>


         <td>
            <a href="?my_labtec=<?php echo $name; ?>&dep=<?php echo $df['dept']; ?>&id=<?php echo $df['id']; ?>&name=<?php echo $name; ?>">
        <button type="button" class="btn btn-info">SELL TO HIM/HER</button>    
          
</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
     
  </div>
</div>