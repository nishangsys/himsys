<h3>Choose a New Department for <span style="color:#f00"><?php echo $_GET['yname']; ?></span> Below</h3>
<?php
	$result= $dbcon->query("select * from classes12 order by class" ) or die (mysqli_error($dbcon));
					
								while ($row=$result->fetch_assoc()){
?>
      
      <a href="?ydept&yname=<?php echo $_GET['yname']; ?>&fees=<?php echo $row['fees']; ?>&ndept=<?php echo $row['amountpaid']; ?>&id=<?php echo $_GET['id']; ?>" style="text-align:center">
  <div class="col-sm-6">
          <div class="well" style="  color:#fff; background-color: #404040" ><span style="font-size:18px; text-align:center; font-weight:bold ">
<?php echo $row['amountpaid']; ?>        
          </div>
        </div>
        </a>
        <?php } ?>