<?php
$d=$con->query("SELECT * FROM daily where reason='".$_GET['class']."' GROUP BY room  ") or die(mysqli_error($con));
while($bn=$d->fetch_assoc()){
?>

<a href="?viewd&link= <?php echo $bn['room']; ?> <?php echo $_GET['class']; ?> Records&class=<?php echo $_GET['class']; ?>&dept=<?php echo $bn['room']; ?> ">
<div class="col-sm-5">
          <div class="well">
            <h4> <?php echo $_GET['class']; ?> Records of <?php echo $bn['room']; ?></h4>
            
          </div>
        </div>
        
 </a>
 <?php } ?>
 
