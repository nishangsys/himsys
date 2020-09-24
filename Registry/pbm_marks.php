<?php $prog=$_POST['querystr'];
?>

 <div class="row">
 <h3 style="font-family:'Arial Black', Gadget, sans-serif">Importing <?php echo $prog; ?>  Marks</h3>
 
        <div class="col-sm-12">
 <iframe src="PBH/index.php?dept=<?php echo mysqli_real_escape_string($con,$prog); ?>&ayear=<?php echo $ayear; ?>&term=<?php echo $term; ?>&level=<?php echo $level; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:2000px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>