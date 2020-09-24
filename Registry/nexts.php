
      <?php
	  

$level=$_POST['level'];

$sem=$_POST['sem'];
$prog=$_POST['querystr'];
if($sem==1){
	$month='FIRST SEMESTER';
}
else {
	$month='SECOND SEMESTER';
}
	   ?>
<a href="?setday=<?php echo $bu['id'];  ?>&prog=<?php echo $prog; ?>&sem=<?php echo $sem; ?>&level=<?php echo $level; ?>&sname=<?php echo $month; ?>">
<div class="col-sm-10 well" style="margin:10px; font-size:24px; ">
     
      Set  <?php echo $prog;  ?> Level <?php echo $level;  ?>
      <?php echo $month;  ?> Time Table
      </div>
    </a>
        