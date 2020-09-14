
 
 <?php
			$cate=$_GET['produc'];
		  $query = $con->query("SELECT * from foods where  serial='$cate' GROUP BY serial,product order by product ") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
    
    <!---ADD CLASS OF delete to link to effect ajax
    
    add variable into id
    -->
       <a href="?foodd=<?php echo $row['pro_id']; ?>&area=<?php echo $_GET['area']; ?>&temp=<?php echo $_GET['produc']; ?>&tabs=<?php echo $_GET['tabs']; ?>" style="color:#fff"  >
       
       <div class="col-sm-6" style="background:#033; height:60px; text-align:left;padding:10px 0px;  border:1px solid#fff ">
        <p style="padding-left:30px" style="color:#FF0"><?php echo $row['product']; ?></p></div></a>
      
      <?php } ?>
   