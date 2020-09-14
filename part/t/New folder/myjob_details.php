

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}


	else {
?>

<div class="right">
<?php
//echo "Study " . $_GET['id'] . " at " . $_GET['cat']. " as " . $_GET['n'];;

$ids=$_GET['myjob_details'] ;

	  $cure="SELECT * from staff_details where yourid='" . $ids. "'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		
?>



<form method="post" action="" enctype="multipart/form-data" >
    
    <table>         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $ids; ?>"   /></td></tr>
                    <tr><td></td><td><input type="hidden" name="dept" value="<?php echo  $rows['dept']; ?>"   /></td></tr>          

                    <tr><td>Customer's Names</td><td><input type="text" name="name" value="<?php echo  $rows['name']; ?>" readonly  /></td></tr>               
                  <td>Date of Birth</td><td><select name="day<?php echo $i; ?>" class="input"  style="width:80px"/>
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month<?php echo $i; ?>" class="input" style="width:130px" />
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
				</select>
                  
                </td><td>Year</td><td><select name="year<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1900;$floor<=2020;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr> 
                
                
                
                 <td>Engagement Date</td><td><select name="day2<?php echo $i; ?>" class="input"  style="width:80px"/>
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month2<?php echo $i; ?>" class="input" style="width:130px" />
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
				</select>
                  
                </td><td>Year</td><td><select name="year2<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1960;$floor<=2050;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr> 
                                <tr><td> Function</td><td><input type="text" name="function"  value="<?php echo $rows['funct']; ?>"    style="width:300px;"/></td></tr>  
                         <tr><td> Category</td><td><input type="text" name="cate" value="<?php echo  $rows['cate']; ?>"     style="width:300px;"/></td></tr> 
                                 <tr><td> SVMC REG NO</td><td><input type="text" name="regno" value="<?php echo  $rows['regno']; ?>"     style="width:300px;"/></td></tr>              
             
             
               <td>Retirement Date </td><td><select name="day3<?php echo $i; ?>" class="input"  style="width:80px"/>
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month3<?php echo $i; ?>" class="input" style="width:130px" />
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
				</select>
                  
                </td><td>Year</td><td><select name="year3<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=2010;$floor<=2090;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr> 
                
             <tr><td> ENSIF REG NO</td><td><input type="text" name="regno2" value="<?php echo  $rows['regno2']; ?>"    style="width:300px;"/></td></tr> 
                                
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">UPDATE</button></td></tr>
            </table>
    
    </form>
 <?php
 if(isset($_POST['save'])){
	 $_POST = array_map("ucwords", $_POST);
	 $yourid=$_POST['id'];
	 $position=addslashes($_POST['position']);
	 $dept=addslashes($_POST['dept']);
	 $name=addslashes($_POST['name']);
	$day=$_POST['day'];
				$month=$_POST['month'];
				$year=$_POST['year'];
				$dob=$day."/".$month."/".$year;
	$day2=$_POST['day2'];
				$month2=$_POST['month2'];
				$year2=$_POST['year2'];
				$doe=$day2."/".$month2."/".$year2;
	$day3=$_POST['day3'];
				$month3=$_POST['month3'];
				$year3=$_POST['year3'];
				$doi=$month3."/".$day3."/".$year3;
				
				
	$function=addslashes($_POST['function']);
	$cate=addslashes($_POST['cate']);
	$regno=addslashes($_POST['regno']);
	$regno2=addslashes($_POST['regno2']);
	
	$df=mysql_query("UPDATE staff_details set name='$name',posItion='$function',
	dept='$dept',dob='$dob',doe='$doe',doi='$doi',cate='$cate',funct='$function',regno='$regno',regno2='$regno2' where yourid='$yourid'") or die(mysql_error());
					echo "<script>alert('SUCCESS.".$name." Deails are Updated. Thank You')</script>";
										echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?update_staff">';


	 
 
 }
 ?>
      
     
    </div>
   </div></div></div>
   
    
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php 
}	}
	


?>
