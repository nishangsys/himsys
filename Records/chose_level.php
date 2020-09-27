
<div class="alert alert-info">
  <strong>Chose Level to Promote From</strong> I
</div>



       <?php
	   
	   
	   $d=$dbcon->query("SELECT * from years where id>7") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    
    <a href="?promoting&from=<?php echo $df['id']; ?>&bsbdndn">
    <div class="col-sm-3">
          <div class="well">
        Promote from  <?php echo $df['year_name']; ?>
          </div>
        </div>
     </a>
    <?php } ?>
 
