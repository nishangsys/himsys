<?PHP


session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
<!DOCTYPE html>
<html>
	
<head>
	<title>New Client</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<div class="BOXC">

</div>

    
    
    <!---------------------------------------------------------------------------------------->
  <h1>Please Click on PRINT to print Balancesheet</h1>

<form method="post" action="printbalabar.php">
	<table>
    	<tr>
        
              <?php
			  $year=date('Y');
	?>
	
        <td>Month </td><td><select name="month" style="width:170px" />
               
                
              <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				

               </select></td>
                <td>Year</td><td><select name="finy" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=2015;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
               <td><button type="submit" name="print" >PRINT</button></td>
        
        </tr>
    
    </table>    
   

</form>


<h1>Please Click on Generate to view Balancesheet</h1>
<form method="post" action="">
	<table>
    	<tr>
        
            
	
        <td>Month </td><td><select name="month" style="width:170px" />
               
              <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
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
$sele="SELECT SUM(rec),date,id FROM daily where month='$month'  and year='$year' and area='0'  GROUP BY date";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>DATE</td>
    <td>INCOME</td>
        <td>EXPENSE</td>

    <td>BALANCE</td>
    
   
        
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
    <td><?php 
	$totin=$rows['SUM(rec)'];
	echo number_format($totin);
	
	 ?> Frs</td>
    
    <td><?php echo number_format($rows['SUM(exp)']); ?> Frs</td>
    <td><?php echo number_format(($totin-$rows['SUM(exp)'])); ?> Frs</td>
   
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
   <tr>
   <td>Total</td>
   <td></td>
   <td><?php  $sele="SELECT SUM(rec),SUM(amt) FROM daily where month='$month' and year='$year'  and area='0' GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		echo  number_format($ROW=$rows['SUM(rec)']+$rows['SUM(amt)']);
	 }?> Frs</td>
     <td>0 frs</td>
     
     
 
   <td style="border-bottom:1px double#000"><?php echo number_format($ROW-$seen); ?> Frs</td>
   
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


			
		 		
</body>
</html>
<?php }  ?>