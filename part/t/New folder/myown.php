

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	
?>


<div class="right">
   
<h1>Total Number of Hours spent for the month of <?php echo date('F Y'); ?> | <span style="background:#1188aa; padding:10px 10px;  text-decoration:none"><a href="../staffs/staffrec.php" target="_blank" style="color:#fff;">Print A copy</a></span></h1>


<?php

	$month=date('m');
	
	$year=date('Y');
  $sele="SELECT SUM(used),date,name,matric,permit FROM staff_reg where month='$month' and year='$year'  GROUP BY matric order by name";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>NAMES</td>
    <td>MATRICULE</td>
    
    <td>HRS SPEND</td>
    <td>PRESENCE</td>
    
    <td>PERMISSION DAYS </td>

   
        
     <?php while($rows=mysql_fetch_assoc($runs)){
		 
	
		
		 ?>
        
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo ($rows['matric']); ?></td>
    
    <td><?php echo (($rows['SUM(used)'])); ?> </td>
   <td><?php $R=mysql_query("SELECT COUNT(checkin) as tota from staff_reg where matric='".$rows['matric']."' and month='$month' and year='$year'") or die(mysql_error());
   
   while($ty=mysql_fetch_assoc($R)){
	   echo $tots=$ty['tota'];
   }
    ?> </td>
      <td><?php echo ($rows['permit']); ?> Days</td>
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  
    </table>
    

			
   
   <?php } ?>
 
  </div>  </div> </div> 
 
  
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

