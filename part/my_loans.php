<?php


session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
       
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script language="JavaScript" src="jss/pop-up.js"></script>
<script language="JavaScript" src="jss/ts_picker.js"></script>

<!----------------------script for pop up select ------------>

<script type="text/javascript" src="jss/jquery.js"></script>

<link href="js/kendo.common.min.css" rel="stylesheet"/>
        <link href="jss/kendo.kendo.min.css" rel="stylesheet"/>
        <script src="jss/jquery.min.js"></script>
        <script src="jss/kendo.all.min.js"></script>
<script>
$(document).ready(function() {
 $("#datepicker").kendoDatePicker();
});
</script>
<script type = "text/javascript" >
function disableBackButton()
{
window.history.forward();
}
setTimeout("disableBackButton()", 0);
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
	<script type="text/javascript">
function doCalc(form) {
		    form.expect.value = (((parseInt(form.loan.value) / parseInt(form.month.value))));

	    
  form.tous.value = (((parseInt(form.perct.value)/parseInt(form.full.value)))*parseInt(form.loan.value)*parseInt(form.month.value));
  
     form.tot_loan.value = (((parseInt(form.loan.value)+ parseInt(form.tous.value))));


}
</script>	


<body>

<div class="right">

  <?PHP
  $date=date('m');
  $date1=date('F');
  $year=date('Y');
  $matric=$_GET['adding_deduction'];
  

  $r=mysql_query("SELECT * FROM staffs where id='$matric'  ") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	
  ?>
<h1 >   <span style="color:#F00"> <?php echo $myname=$row['name']; ?> Loan Applications </span> </span></h1> 
    
    
   <div style="float:left; width:73%; border:1px dashed#000; float:left">
  <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
   <tr><td></td><td><input type="text" name=""  style="width:80%; background:#FF9" value="<?php echo $row['dept'] ?>" readonly /></td></tr>
                  
    
    <table>
             
                           <tr><td></td><td><input type="HIDDEN" name="id"  value="<?php echo $row['id'] ?>" /></td></tr>
        <tr><td></td><td><input type="HIDDEN" name="full"  value="100" /></td></tr>
  <tr><td></td><td><input type="HIDDEN" name="matric"  value="<?php echo $mat=$row['matric'] ?>" /></td></tr>

               
                <tr><td></td><td><input type="hidden" name="dept"  style="width:80%" value="<?php echo $row['dept'] ?>" readonly /></td></tr>
                  
                <tr><td></td><td><input type="hidden" name="post"  value="<?php echo $row['age'] ?>"  /></td></tr>
                                          


        <tr><td>Loan Amount</td><td><input type="text" name="loan"  style="width:60%"  value="<?php echo $row['advance'] ?>" onBlur="doCalc(this.form)" /></td></tr>


                                <tr><td>Paid in how many months</td><td><input type="text" name="month"  style="width:60%"  value="<?php echo $row['others'] ?>" onBlur="doCalc(this.form)" /></td></tr>
                                
                                 <tr><td>Amt to Pay each Month</td><td><input type="text" name="expect"  style="width:60%"  value="<?php echo $row['others'] ?>"  /></td></tr>
            
                            <tr><td>Loan Percentage</td><td><input type="text" name="perct" onBlur="doCalc(this.form)" value="0"   style="width:60%"   /></td></tr>
                                      <tr><td> Percentage to us</td><td><input type="text" name="tous"  style="width:90%"    /></td></tr>

           <tr><td> Total Loan</td><td><input type="text" name="tot_loan"  style="width:60%; background:#f00; color:#fff; font-weight:bold"    /></td></tr>



       <tr> <td>Start Deduction From</td><td><select name="smonth" style="width:170px" />
               
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
				

               </select></td><td>Year</td><td><select name="finy" onBlur="doCalc(this.form)" style="width:80px" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=2015;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td></tr>
                              
        
     <tr><td></td><td><button type="submit" name="update" class="btn btn-danger" style="color:#fff" >SAVE</button></td></tr>

                              
 
               </table></form>
                 </div>
                 
                
                 
                    <div style="float:left; width:22%; border:1px dashed#000; float:left">
                 
                    
                    <?php if($row['photo'] != ""): ?>
                   
									<img src="../staffs/album/<?php echo $row['photo']; ?>" width="200px" height="200px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="../staffs/album/default.png" width="200px" height="200px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
                                    <?php } ?>
                                    <span style="background:#FF9; padding:10px 20px; width:100%">
								
									?>
                    
  </div>

                 <?php  ?>
   <?php
	 
	
	if(isset($_POST['update'])){		
$_POST = array_map("ucwords", $_POST);
	$ids=$_POST['id'];
	$dept=$_POST['dept'];
	$matric=$_POST['matric'];
	$loan=$_POST['loan'];
	$expect=$_POST['expect'];
	$repaymonth=$_POST['month'];
		$loanper=$_POST['perct'];
	$ourper=$_POST['tous'];
	$month=date('m');
	$date=date('d-m-Y');
	$year=date('Y');
	$name=$myname;	
	$loan=$_POST['loan'];
	$other_deducts=$_POST['other_deducts'];
	$startmonth=$_POST['smonth'];
	$syear=$_POST['finy'];
    $enyear=date("Y",strtotime("+".$_POST['month']." Month"));
	
	 $endmonth=date("m",strtotime("+".$_POST['month']." Month"));

	$loan_cost=$_POST['tot_loan'];
	if($startmonth<$month && $syear==$year){
		echo "<script>alert('ERROR.Choose a month after ".$startmonth."  ')</script>";
	}
	else if($startmonth>=$month and $syear<$year){
		echo "<script>alert('ERROR.Choose a year after ".$syear."  ')</script>";
	}
	else{
	

	  	
	
	 $image=mysql_query("INSERT INTO loans set  name='$name',dept='$dept',matric='$matric',loan='$loan',
	monthin='$repaymonth',amt_paidin='$expect',pertc='$loanper',pertc_amt='$ourper',startmonth='$startmonth',month='$month',date='$date',year='$year',loan_cost='$loan_cost',syear='$syear',endmonth='$endmonth',endyear='$enyear'") or die(mysql_error()) ;
	echo "<script>alert('You have successfully added a loan to $name. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=?my_deduction">';


		
	}
		
	
	
	}
	

		
	?>
  
    </div>
    <div class="clear"></div>
   <h1>Loan Historique</h1>
   <table>
    <?php
   $df=mysql_query("SELECT * FROM loans where matric='$mat' and reason='' order by id DESC") or die(mysql_error());
   $i=1;
   ?>
   <tr style="background:#0F6">
  
   <td>S/N</td><td>Loan Amount</td><td>Paid in<br>how many months</td><td>Amt per Month</td><td>% pymt per Month</td><td>% Payment</td><td>Loan Cost</td><td>Start Month<br>Of Paymt</td><td>End Month<br>of Payment</td><td>Amt Paidsofar</td></tr>
   <?php while($fg=mysql_fetch_assoc($df)){ ?>
   
   
     <tr>
   <td><?php echo $i++; ?></td><td><?php echo $fg['loan']; ?></td><td><?php echo $fg['monthin']; ?></td><td><?php echo $fg['amt_paidin']; ?></td><td><?php echo $fg['pertc']; ?></td><td><?php echo $fg['pertc_amt']; ?></td><td><?php echo $fg['loan_cost']; ?></td><td><?php echo $fg['startmonth']; ?>/<?php echo $fg['syear']; ?></td><td><?php echo $fg['endmonth']; ?>/<?php echo $fg['endyear']; ?></td><td><?php   echo $fg['loan_cost']- $fg['loan']?></td>
   <?php } ?>
   
   </tr>
   </table>
    
    </div>
      
  
			
		 		
</body>
</html>
<?php }  ?>