
     <h3><?php echo $_GET['bank']; ?>  <a href="print_byd.php?type=<?php  echo $_GET['class'];?>&dept=<?php  echo $_GET['dept'];?>" target="_new">   
        <button type="button" class="btn btn-info">Print a Copy </button>   </a> |  <a href="print.php?bank=<?php echo $_GET['bank']; ?>">   
 <a href="dodept.php?type=<?php  echo $_GET['class'];?>&dept=<?php  echo $_GET['dept'];?>">         <button type="button" class="btn btn-success">Excel Download </button>   </a> </h3> 
 
 
<iframe src="viewing_dept.PHP?type=<?php  echo $_GET['class'];?>&dept=<?php  echo $_GET['dept'];?>" style="width:90%; height:800px; border:none"></iframe>.