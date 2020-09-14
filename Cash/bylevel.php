<?php
$d=$con->query("SELECT * FROM daily where reason='".$_GET['class']."' GROUP BY area  ") or die(mysqli_error($con));
while($bn=$d->fetch_assoc()){
?>

<a href="?viewl&link=Level <?php echo $bn['area']; ?> <?php echo $_GET['class']; ?> Records&class=<?php echo $_GET['class']; ?>&level=<?php echo $bn['area']; ?> ">
<div class="col-sm-4">
          <div class="well">
            <h4> <?php echo $_GET['class']; ?> Records of <?php echo $bn['area']; ?></h4>
            
          </div>
        </div>
        
 </a>
 <?php } ?>
 
