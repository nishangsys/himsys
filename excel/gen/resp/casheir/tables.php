
    <?php
	include '../dbc.php';
		  $query = $con->query("SELECT * FROM 
		 our_tables order by id") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
       <a href="?cats=<?php echo $row['category']; ?>" style="color:#fff">
       
       <div class="col-sm-3" style="background:#033; padding:10px 0px; text-align:left; border-bottom:1px solid#fff ">
        <p style="padding-left:30px">Table <?php echo $row['num']; ?></p></div></a>
      
      <?php } ?>
    </div>
  
  