
     <h3><?php echo $_GET['bank']; ?>  <a href="print_byl.php?type=<?php  echo $_GET['class'];?>&level=<?php  echo $_GET['level'];?>" target="_new">   
        <button type="button" class="btn btn-info">Print a Copy </button>   </a> |  <a href="print.php?bank=<?php echo $_GET['bank']; ?>">   
 <a href="dolevel.php?type=<?php  echo $_GET['class'];?>&level=<?php  echo $_GET['level'];?>">         <button type="button" class="btn btn-success">Excel Download </button>   </a> </h3> 
 
 
<iframe src="viewing_level.PHP?type=<?php  echo $_GET['class'];?>&level=<?php  echo $_GET['level'];?>" style="width:90%; height:800px; border:none"></iframe>.