<?PHP
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY PAYSLIP</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
  @page { size: portrait; }
  .sub{
	  width:600px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	 
  }
  
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
  table{
	  border-collapse:collapse;
  }
  tr,td,th{
	   border-collapse:collapse;
	   border:1px dashed#000;
  }
</style>
</head>

<body>
<div class="sub">
	<div class="head1">
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="../logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:79%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  "> MONTHLY STAFF ATTENDACE FOR <?php echo $clients; ?> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    <div class="clear"></div>
    
    
    
    
    
    <div class="head2">
    <table style="width:100%">
  <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th> 
                                    
                                    <th style="text-align:center;">Employee</th>
                                 
                                        <th style="text-align:center;">Minutes Spent</th>
                                
                                    <th style="text-align:center;">Hours Spent</th>
                                    <th style="text-align:center;">Days Present</th>
                                    <th style="text-align:center;">Permission </th>
                              
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("SELECT SUM(used),SUM(shift),date,name,matric,permit,month,year FROM staff_reg   WHERE month='01' and year='2017'  GROUP BY matric,month order by name ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td > <?php echo $num++; ?></td>

								<td > <?php echo $row['name']; ?></td>
								<td > <?php echo $row['SUM(shift)']; ?></td>
								<td ><?php echo $row['SUM(used)']; ?></td>
								<td > <?php  $R=mysql_query("SELECT COUNT(checkin) as tota from staff_reg where matric='".$row['matric']."' and month='".$row['month']."' and year='".$row['year']."'") or die(mysql_error());
   
   while($ty=mysql_fetch_assoc($R)){
	   echo $tots=$ty['tota'];
   }; ?></td>
					
                			<td > <?php echo $row['permit']; ?></td>
					              
</tr>
<?PHP } ?>
</tbody>
</div>
</TABLE>								



    
    </div>


</div>
</body>
</html>
