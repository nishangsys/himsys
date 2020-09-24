 <div class="row">
 <?php
 	$prog=$_POST['dept'];
 	$level=$_POST['level'];
	echo $ayear=$_POST['ayear'];
	$semid=$_POST['sem'];
 ?>
 
 
        <div class="col-sm-12">
 <iframe src="files/index.php?dept=<?php echo mysqli_real_escape_string($con,$prog); ?>&ayear=<?php echo $ayear; ?>&term=<?php echo $semid; ?>&level=<?php echo $level; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:2000px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>