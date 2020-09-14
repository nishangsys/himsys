<?PHP
include  'dbc.php';

session_start();
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
 }
$mat=$_GET['yourown'];
	$month=$_GET['month'];;
	$thismonth=$_GET['thismonth'];;
	$year=$_GET['year'];;

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
  tr,td{
	  border-collapse:collapse;
	  border:1px solid#000;
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
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  "> staff attendance records for <?php echo $clients; ?> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    <div style="clear:both"></div>
    
    
    
    
    
 


         
           <div style="width:100%; margin-top:15PX; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT; font-weight:bold; font-style:italic  "> <?php echo $_GET['name']; ?> Attendance Records for <?php echo $_GET['month']; ?>/<?php echo $_GET['year']; ?></div>


 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" style="width:100%" id="example">
                       <td> S/N</td> 
                                    
                                    <td> Employee</td>
                                       <td> Minutes Spent</td>
                                
                                    <td> Hours Spent</td>
                                    <td> Days Present</td>
                                    <td> Permission </td>
                              
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("SELECT SUM(used),SUM(shift),COUNT(date),date,name,matric,permit,month,year FROM staff_reg  where month='$month' and year='$year'  GROUP BY matric,month order by name,id" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

								<td style="text-align:center; word-break:break-all; width:320px;"> <?php echo $row['name']; ?></td>
								
								<td style="text-align:center; word-break:break-all; width:140px;"> <?php echo $row['SUM(shift)']; ?></td>
								<td style="text-align:center; word-break:break-all; width:140px;"><?php echo $row['SUM(used)']; ?></td>
								<td style="text-align:center; word-break:break-all; width:40px;"> 
								<?php  $R=mysql_query("SELECT COUNT(date) as totalatt from staff_reg where matric='".$row['matric']."' and month='".$row['month']."' and year='".$row['year']."' GROUP BY date") or die(mysql_error());
					echo $counts=mysql_num_rows($R);
  /* 
   while($ty=mysql_fetch_assoc($R)){
	   echo $totsm=$ty['totalatt'];
   };*/ ?></td>
					
                			<td style="text-align:center; word-break:break-all; width:40px;"> <?php echo $row['permit']; ?></td>
								
                           
                              <?php } ?>
                            </tr></tbody></table>
                          





    
    </div>


</div>
</body>
</html>
