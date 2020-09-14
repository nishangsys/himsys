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
$mat=$_GET['yourown'];
	$month=$_GET['month'];;
	$thismonth=$_GET['thismonth'];;
	$year=$_GET['year'];;
	$dept=$_GET['all'];
	$d=mysql_query("SELECT * FROM payslips,voucher where payslips.month='$month' and voucher.month='$month'  AND payslips.name=voucher.name and payslips.year='$year' and payslips.dept='$dept' GROUP BY payslips.matric") or die(mysql_error());
	while($row=mysql_fetch_assoc($d)){
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
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  "> salary voucher FOR <?php echo $clients; ?> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="head2">
    <div style="width:12%; height:20px; float:left; padding:5px 5px; clear:both">Names</div>
    
        <div style="width:45%; height:40px; float:left; border:1px dashed#000; padding:5px 5px; "><i>  <?PHP echo $row['name'];  ?>  </i> </div>
        
            <div style="width:14%; height:40px; float:left; font-size:14px;  border:1px dashed#000; padding:5px 5px; ">Matricule<BR />NSIF No</div>
                        <div style="width:20%; height:20px; float:left;font-size:14px; padding:5px 5px; "><I> <?PHP echo $row['matric'];  ?></I><BR /><?PHP 	 $sk=mysql_query("SELECT * from staff_details where name='".$row['name']."' and regno='".$row['matric']."'  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
					echo $pay= $atk['regno2'];
					
				 };  ?></div>
                        
                        
                            <div style="width:12%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; clear:both">Function</div>
                             <div style="width:40%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; "><i>  <?PHP echo $row['position'];  ?>  </i> </div>

  <div style="width:14%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; ">Period</div>
                        <div style="width:25%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; "><?PHP echo $thismonth;  ?> <?PHP echo $year;  ?> </i></div>
             


         
           <div style="width:97%; margin-top:15PX; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT; font-weight:bold; font-style:italic  ">EARNINGS</div>

  <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:0px 5px;text-align:center; font-weight:bold; ">S/N</div>
  
    <div style="width:46%; height:20px; float:left; text-align:center; border:1px dashed#000;font-weight:bold; padding:0px 5px; ">Designation</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;font-weight:bold; padding:0px 5px; ">Earning</div>
        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center; font-weight:bold; padding:0px 5px; "> Total </div>

<!--BASIC SALARY---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">1</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Basic Salary</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP echo number_format($row['salary']);  ?></div>
          
      
        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "> <?PHP 
		$aone=$row['salary'];
		echo number_format($aone);  ?> </div>



<!--RESPONSIBILITY ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">2</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Responsibility allowance</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $atwo=$row['resp'];
	  echo ($atwo);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; ">  <?PHP echo ($atwo);  ?> </div>



<!--RESPONSIBILITY ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">3</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Research allowance</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $ninth=$row['research'];
	  echo ($ninth);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; ">  <?PHP echo ($ninth);  ?> </div>



<!--REnts ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">4</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Rents allowance</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $athree=$row['rents'];
	  echo ($athree);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "> <?PHP echo ($athree);  ?> </div>
        
        
<!--SENIORITY ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">5</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Seniority Bonus</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $afour=$row['senior'];
	  echo ($afour);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "> <?PHP echo ($afour);  ?> </div>
        
        
<!--leave ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">6</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Leave allowance</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP
	  $afive=$row['leaves'];
	   echo($afive);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "> <?PHP echo ($afive);  ?></div>



<!--leave ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">7</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Transport allowance</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP
	  $asix=$row['trans'];
	   echo ($asix);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP echo ($asix);  ?></div>




<!--overtime---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">8</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Overtime</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $aseven=$row['overtime'];
	  echo ($aseven);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP echo ($aseven);  ?></div>


<!--others---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">9</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Others</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; text-align:center; "> <?PHP 
	  $aeight=$row['others'];
	  echo ($aeight);  ?></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP echo ($aeight);  ?></div>




<!--GROSS---->

 <div style="width:97%; height:20px; margin-top:20PX; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT;  ">
 GROSS WAGES<span style="margin-right:20px ; float:right">
 
  <?php 
				   $atot=$aone+$atwo+$athree+$afour+$afive+$asix+$aseven+$aeight+$ninth;
				   
				   echo number_format($atot);  ?>
 </span></div>
  
   
 
        
           <div style="width:97%; margin-top:15PX; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT; font-weight:bold; font-style:italic  ">DEDUCTIONS</div>
           
           
           
           
           
           
           
           
           
           


<!--IRPP---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">1</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">IRPP</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; "></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP
		$done=$row['irpp'];
		 echo number_format($done);  ?></div>


<!--IRPP---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">2</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Social Insurance Funds  </div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; "></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP
		$dtwo=$row['cnps'];
		 echo number_format($dtwo);  ?></div>
         
         <!--SENIORITY ALLOWANACES---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">3</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Additional Council Tax</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; "></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP
		$dfour=$row['ccf'];
		 echo number_format($dfour);  ?></div>
         
         <!--audio visual---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">4</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Audio visual Tax(Crtv)</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; ">-</div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP
		$dfive=$row['crtv'];
		 echo number_format($dfive);  ?></div>
         




<!--National Housing Loan Funds---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">5</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">National Housing Loans Fund</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; "></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP 
		$dthree=$row['nhlf'];
		echo ($dthree);  ?></div>
        
        
        
        

         
         <!--ADVANCD SALARY---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">6</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Advance salary </div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; "></div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP 
		$dseven=$row['pre_paid'];
		echo ($dseven);  ?></div>



<!--others---->

 <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:center; font-weight:bold; ">7</div>
  
    <div style="width:46%; height:20px; float:left; text-align:LEFT; border:1px dashed#000; padding:2px 5px; ">Others</div>
      <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:LEFT; padding:2px 5px; ">-</div>

        <div style="width:20%; height:20px; float:left; border:1px dashed#000;text-align:center;  padding:2px 5px; "><?PHP 
		$dsix=$row['other_exp'];
		echo number_format($dsix);  ?></div>
        
        
        


        
                   <div style="width:97%; margin-top:15PX; height:20px; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT;  ">
                   TOTAL DEDUCTIONS<span style="float:right; margin-right:40PX">
                   
                   <?php 
				   $dtot=$done+$dtwo+$dthree+$dfour+$dfive+$dsix+$dseven;
				   
				   echo number_format($dtot);  ?>
                   </span></div>


<div style="width:97%; margin-top:5PX; height:20px; float:left; border:1px dashed#000; background:#E5F5F9; padding:10px 5px;text-align:LEFT;  ">
                 <B> NET WAGE<span style="float:right; margin-right:40PX">
                 
                 <?php 
				  
				   
				   echo number_format($atot-$dtot);  ?></B>
                 
                 </span></div>
                 
                 
                 
                 
                   <div style="width:97%; margin-top:15PX; height:20px; float:left;  padding:2px 5px;text-align:LEFT;  ">
                   <span style="margin-left:20PX;">EMPLOYER'S SIGNATURE</span><span style="float:right; margin-right:20PX">EMPLOYEE'S SIGNATURE</span></div>












    
    </div>


</div>
</body>
</html>
<?PHP } ?>