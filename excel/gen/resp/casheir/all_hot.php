 <?php
		  $query = $con->query("SELECT * FROM 
		  products where category!='' and serial='$serial' GROUP BY category") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
       <a href="?area=<?php echo $_GET['area']; ?>&temp=<?php echo $_GET['temp']; ?>&tabs=<?php echo $_GET['table']; ?><?php echo $_GET['tabs']; ?>&cats=<?php echo $row['category']; ?>" style="color:#fff" >
       
       <div class="col-sm-12" style="background:#033; padding:10px 0px; text-align:left; border-bottom:1px solid#fff ">
        <p style="padding-left:30px"><?php echo $row['category']; ?></p></div></a>
      
      <?php } ?>