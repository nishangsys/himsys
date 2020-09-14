 <?php
		  $query = $con->query("SELECT * FROM 
		  foods GROUP BY serial") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
       <a href="?thing=food&produc=<?php echo $row['serial']; ?>&area=<?php echo $_GET['area']; ?>&tabs=<?php echo $_GET['table']; ?><?php echo $_GET['tabs']; ?>" style="color:#fff" >
       
       <div class="col-sm-12" style="background:#033; padding:10px 0px; text-align:left; border-bottom:1px solid#fff ">
        <p style="padding-left:30px"><?php echo $row['serial']; ?></p></div></a>
      
      <?php } ?>