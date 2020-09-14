<div class="row">
<h1>Choose a main head to register sub head</h1>

<?php
	$result= $con->query("select * from main_classes order by name" ) or die (mysql_error());
					
								while ($row=$result->fetch_assoc()){
?>
      
      <a href="?add_class&name=<?php echo $row['name']; ?>&code=<?php echo $row['code']; ?>" style="text-align:center">
  <div class="col-sm-4">
          <div class="well" style="  color:#fff; background-color: #404040" ><span style="font-size:18px; text-align:center; font-weight:bold ">
<?php echo $row['name']; ?><br>
<span style="color:#FF0">Code :<?php echo $row['code']; ?></span></span>            
            </p>           
          </div>
        </div>
        </a>
        <?php } ?>
        
        </div>