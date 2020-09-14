

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	
?>


<div class="right">
   
<h1>Please Click on Generate to view Balancesheet</h1>
<form method="post" action="">
	<table>
    	<tr>
        
            
	
        <td>Month </td><td><select name="month" style="width:170px" />
               
              <option value="1">January</option>
              <option value="2">Febuary</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				

               </select></td>
                  </td>
                <td>Year</td><td><select name="year" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=2015;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
               <td><button type="submit" name="seen" >Generate</button></td>
        
        </tr>
    
    </table>    
   

</form>




<?php
if(isset($_POST['seen'])){
	$month=$_POST['month'];
	$month1="0".$_POST['month'];
	$year=$_POST['year'];
  $sele="SELECT * FROM staff_reg where month='$month' or month='$month1' and year='$year' order by date ";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>DATE</td>
    <td>NAMES</td>
    <td>CHECKIN</td>
    <TD>CHECKOUT</TD>
    <td>HOURS SPEND</td>
    
   
        
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
    <td><?php echo $rows['date']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo ($rows['checkin']); ?> </td>
    
    <td><?php echo ($rows['checkout']); ?> </td>
    <td><?php echo (($rows['used'])); ?> Hours</td>
   
    
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

<?php }  ?>