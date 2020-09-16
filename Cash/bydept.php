<?php
$d=$con->query("SELECT * FROM special,daily where daily.reason='".$_GET['class']."'
 AND special.id=daily.prog_id GROUP BY daily.prog_id  ") or die(mysqli_error($con));
while($bn=$d->fetch_assoc()){
?>

<a href="?viewd&link= <?php echo $bn['prog_name']; ?> <?php echo $_GET['class']; ?> Records&class=<?php echo $_GET['class']; ?>&dept=<?php echo $bn['prog_id']; ?> ">
<div class="col-sm-5">
          <div class="well">
            <h4> <?php echo $_GET['class']; ?> Records of <?php echo $bn['prog_name']; ?></h4>
            
          </div>
        </div>
        
 </a>
 <?php } ?>
 
