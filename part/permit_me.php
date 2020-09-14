<?php

session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

	
	else {
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.bal.value = ((parseInt(form.expect.value) - parseInt(form.paid.value)));
  
}
</script>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

<body>

    
  <div class="right">  


<?php
if(isset($_GET['grant'])){
	 $cust_id=$_GET['grant'];
	  
	    
	$runm=mysql_query("SELECT * from staffs,staff_reg where staffs.id='$cust_id' and staffs.matric=staff_reg.matric ") or die (mysql_error());
	while($row=mysql_fetch_assoc($runm)){
	 
	
	
	// $jon="SELECT * FROM students,matric where students.stu_name='".$row['stu_name']."' and student.year_id='$ac_year' ";
?>
    
   
    
    
      <h1 class="he">GRANTING PERMISSION TO    <span style="color:#Ff0"><?php echo $row['name']; ?> </span></h1>
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['id']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
               
                <tr><td></td><td><input type="HIDDEN" name="name" value="<?php echo  $row['name']; ?>" style="width:300px"  /></td></tr>
                   <tr><td>Matricule</td><td><input type="text" name="mat" value="<?php echo  $row['matric']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Position</td><td><input type="text" name="position" value="<?php echo  $row['age'];; ?>"  style="width:300px" /></td></tr>
    
           
                      
                
               <tr><td></td><td><img src="../staffs/album/<?php echo  $row['photo']; ?>" style="width:100px; height:100px;" /></td></tr>
               <tr><td>Other Permissions this Month</td><td><input type="text" name="permit" value="<?php echo  $row['permit'];; ?> "  style="width:300px" /></td>
               </tr>
               <tr>
                  <td>How long? </td><td><select name="days<?php echo $i; ?>" class="input" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)" required='required'></option>
					<?php 
					for($floor=1;$floor<=61;$floor++)
					{
					echo "<option value='$floor'>$floor Days</option>";
					}
					?>
				</select></td></tr>

                <tr>
                  <td>From</td><td><select name="date<?php echo $i; ?>" class="input" />
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
					for($floor=2015;$floor<=2025;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr>
                
                
                <tr>
                  <td>To</td><td><select name="date1<?php echo $i; ?>" class="input" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month1<?php echo $i; ?>" class="input" style="width:130px" />
                	 
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
                  
                </td><td>Year</td><td><select name="year1<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=2015;$floor<=2025;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr>

             
                  <tr><td></td><td><button type="submit" name="update" class="myButton">GRANT PERMISSION</button></td></tr>
            </table>
    
    </form><?php
	
		
	//$imageProperties =($_FILES['userImage']['tmp_name']);
	if(isset($_POST['update'])){
		 $id=$_POST['id'];
	$position=$_POST['position'];	
	$matric=$_POST['mat'];
	$name=$_POST['name'];
	$numdays=$_POST['days'];
	echo $totpermit=$_POST['permit']+$_POST['days'];
	$dates=date('d-m-Y');
	$months=date('m');
	$year12=date('Y');
	if($_POST['date']<10){
		 $date="0".$_POST['date'];	
		}
		else {
		 $date=$_POST['date'];
		}
		if($_POST['month']<10){
		  $month="0".$_POST['month'];	
		}
		else {
		$month=$_POST['month'];
		}
		
		   $year=$_POST['year'];
		   
		  if($_POST['date1']<10){
		 $date1="0".$_POST['date'];	
		}
		else {
		 $date1=$_POST['date1'];
		}
		if($_POST['month1']<10){
		  $month1="0".$_POST['month1'];	
		}
		else {
		$month1=$_POST['month1'];
		}
		   $year1=$_POST['year1'];
		 $day=$date."/".$month."/".$year;
		 $day1=$date1."/".$month1."/".$year1;
		 	;
				$two=mysql_query("INSERT INTO permissions set name='$name',matric='$matric',numdays='$totpermit',date='$dates',month='$months',year='$year12',
		fromm='$day',tooo='$day1' ,pmonth='$month'    ") or die(mysql_error());
		;

		//update the students table
$one=mysql_query("UPDATE staff_reg set permit='$totpermit'  where id='$id'   ") or die(mysql_error());
		;

		
		echo "<script>alert('SUCCESS.".$name." Accounts has now been permitted from ".$day." to ".$day1."')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=staffpage.php?all_staff">';

	}
		
	?>
    
    </div>
  
	
  		
           <div class="clear"></div>
		
	<div class="foot"></div>  
   
			
	<?php } }}  ?>	 	
</body>
</html>