<?php


session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

 if($level=='20' or $level=='8'){
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        	
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

  <?PHP
  $date=date('m');
  $date1=date('F');
  $year=date('Y');
  $matric=$_GET['addeducts'];
  $r=mysql_query("SELECT * FROM payslips where matric='$matric' and month='$date' and year='$year' order by name") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	  $name=$row['name'];
	  $loan=$row['loans'];
	  $other_exp=$row['others_exp'];
	  $prepaid=$row['pre_paid'];
	  $ids=$row['id'];
	  $salary=$row['salary'];
  }
  ?>
<h1 style=" color:#f00"> You are adding deductions to salary <span style="color:#00F"><?php echo $name; ?></span> for the month of <span style="color:#00F"><?php echo $date1; ?></span></h1> 
    
    
   <div style="float:left; width:60%; border:1px dashed#000; float:left">
  <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
    <table>
         
           <tr><td>Current Housing loan fund cost</td><td><input type="text" name="loan1" value="<?php
		    if(empty($loan)){
			   echo 0;
		   }
		   else {
			   echo $loan;
		   }?>"   /></td></tr>
          
               
                <tr><td>New Housing loan fund cost </td><td><input type="text" name="loan2"  style="width:60%" /></td></tr>
                   <tr><td>Current advanced salaries</td><td><input type="text" name="advance1" style="width:60%" value="<?php
		    if(empty($prepaid)){
			   echo 0;
		   }
		   else {
			   echo $prepaid;
		   }?>"      /></td></tr>
          
               
                <tr><td>New advanced salaries </td><td><input type="text" name="advance2"  style="width:60%" /></td></tr>
                     
            
             <tr><td>Current Other deductions</td><td><input type="text" name="deduct1" style="width:60%" value="<?php
		    if(empty($other_exp)){
			   echo 0;
		   }
		   else {
			   echo $other_exp;
		   }?>"  /></td></tr>
          
               
                <tr><td>New Other deductions< </td><td><input type="text" name="deduct2"  style="width:60%" /></td></tr>
                     
                              <tr><td></td><td><button type="submit" name="update" class="myButton">Save</button></td></tr>

               
 
               </table></form>
                 </div>
                 
                    <div style="float:left; width:30%; border:1px dashed#000; float:left">
                    <?php
					 $r=mysql_query("SELECT * FROM staffs where matric='$matric'") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	 // $photo=$row['photo'];

					?>
                    
                    <?php if($row['photo'] != ""): ?>
									<img src="album/<?php echo $row['photo']; ?>" width="300px" height="300px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="album/default.png" width="300px" height="300px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
                                    <?php } ?>
                    
                    </div>

                 
   <?php
	 
		
		 $address=$_POST['address'];
		
$_POST = array_map("ucwords", $_POST);
	if(isset($_POST['update'])){
		$loan1=addslashes($_POST['loan1']);
		 $lona2=addslashes($_POST['loan2']);
		  $loan3=$loan1+$lona2;
		$advance1=addslashes($_POST['advance1']);
		 $advance2=addslashes($_POST['advance2']);
		 $advance3=$advance2+$advance1;
		 $deduct1=addslashes($_POST['deduct1']);
		 $deduct2=addslashes($_POST['deduct2']);
		 $deduct3=$deduct1+$deduct2;
		 $diff=abs($salary-$deduct3);
		 if($advance3>$salary){
			 				echo "<script>alert('ERROR.".$name." Taking a advance of ".$diff." more than his salary')</script>";

		 }
		else {	
		
	
		$image=mysql_query("UPDATE payslips set loans='$loan3',pre_paid='$advance3',others_exp='$deduct3' where matric='$matric' and id='$ids'")
		or die (mysql_error());
				echo "<script>alert('SUCCESS.".$name." details added. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?add_deductions">';



		
	}
	
	}
	

		
	?>
    
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>