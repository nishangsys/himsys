  <style>
  a{
		text-decoration:none;
		color:#090;
		font-size:18px;
		font-weight:bold;
		
	}
  </style>
  
  <?php

 $a=mysql_query("SELECT * FROM classes order by class") or die(mysql_error());
 while ($ad=mysql_fetch_assoc($a)){
?>

  <a href="?class=<?php echo $ad['amountpaid']; ?>&fees=<?php  $a1=mysql_query("SELECT * FROM classes where class='".$ad['amountpaid']."' order by class") or die(mysql_error());
 while ($ad1=mysql_fetch_assoc($a1)){
	 $ad1[''];
	echo $ad['fees'];
 }?>&nation=Cameroonian&mats=<?php echo $_GET['mat']; ?>">
   <div class="col-sm-5">
      <div class="well">
       <p><?php echo $ad['amountpaid']; ?></p>
      </div>
      </div>
      </a>
     <?PHP } ?>