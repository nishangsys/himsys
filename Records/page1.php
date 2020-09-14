  <style>
  a{
		text-decoration:none;
		color:#090;
		font-size:18px;
		font-weight:bold;
		
	}
  </style>
   <div class="col-sm-12">
   <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=mysql_query("SELECT * FROM classes12 order by class") or die(mysql_error());
	   while($df=mysql_fetch_assoc($d)){
	   ?>
    <option value="<?php echo $df['class']; ?>"><?php echo $df['class']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="ok">Submit</button>
      </div>
    </div>
    </form>
    </div>
    </div>
    </div>
  
  
  
   <?php
   if(isset($_POST['ok'])){
 $zone=$_POST['dept'];
?>

 <div class="row">
 
 
 
        <div class="col-sm-12">
 <iframe src="../Acc/old.php?dept=<?php echo $zone; ?>&year_id=<?php echo $ayear; ?>" allowFullScreen style="width: 100%;
			float:left;
			background: #FFF;
            border:none;
            height:1200px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>
          
          <?php } ?>