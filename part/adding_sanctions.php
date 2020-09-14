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
		


<body>

<div class="right">

  <?PHP
  $date=date('m');
  $dates="0".$date;
  $date1=date('F');
  $year=date('Y');
  
  $matric=$_GET['adding_sanctions'];
  

  $r=mysql_query("SELECT * FROM staffs where id='$matric'   ") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	  $dept=$row['dept'];
	
  ?>
<h1 > You are about to add deductions to  <span style="color:#F00"> <?php echo $myname=$row['name']; ?> </span> </span></h1> 
    
    
   <div style="float:left; width:73%; border:1px dashed#000; float:left">
  <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
    <table>
         
                           <tr><td></td><td><input type="HIDDEN" name="id"  value="<?php echo $row['id'] ?>" /></td></tr>
  <tr><td></td><td><input type="HIDDEN" name="matric"  value="<?php echo $row['matric'] ?>" /></td></tr>

               
                <tr><td>Department</td><td><input type="text" name="dept"  style="width:80%" value="<?php echo $row['dept'] ?>" readonly /></td></tr>
                  
                <tr><td>Position</td><td><input type="text" name="post"  style="width:80%" value="<?php echo $row['age'] ?>" readonly /></td></tr>
                                          


                
                                <tr><td></td><td><input type="HIDDEN" name="one"  value="<?php echo $row['one'] ?>" /></td></tr>
                   
                                <tr><td>Amount deducted</td><td><input type="text" name="other_deducts"  style="width:60%"  required /></td></tr>
                                
                                 <tr><td>Reasons for deductions</td><td><input type="text" name="reasons"  style="width:90%" required   /></td></tr>


                              
        
     <tr><td></td><td><button type="submit" name="update" class="btn btn-danger" style="color:#fff" >SAVE</button></td></tr>

                              
 
               </table></form>
                 </div>
                 
                    <div style="float:left; width:20%; border:1px dashed#000; float:left">
                 
                    
                    <?php if($row['photo'] != ""): ?>
                   
									<img src="../staffs/album/<?php echo $row['photo']; ?>" width="200px" height="200px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="../staffs/album/default.png" width="200px" height="200px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
                                    <?php } ?>
                    
                    </div>

                 <?php  ?>
   <?php
	 
	
	if(isset($_POST['update'])){		
$_POST = array_map("ucwords", $_POST);
	$ids=$_POST['id'];
	$myname;
	$matric=$_POST['matric'];
	$resp=$_POST['response'];
	$reasons=$_POST['reasons'];
	$month=date('m');
	$dae=$dept;
	$date=date('d-m-Y');
		$year=date('Y');
	
	$advance=$_POST['advance'];
	$other_deducts=$_POST['other_deducts'];
	$pay=$_POST['chose'];

		/* 	 
	 $image=mysql_query("INSERT INTO loans set  name='$name',dept='$dept',matric='$matric',loan='$loan',
	monthin='$repaymonth',amt_paidin='$expect',pertc='$loanper',pertc_amt='$ourper',startmonth='$startmonth',month='$month',date='$date',year='$year',loan_cost='$loan_cost',syear='$syear',endmonth='$endmonth',endyear='$enyear'") or die(mysql_error()) ;
	echo "<script>alert('You have successfully added a loan to $name. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?my_deduction">';
	 
	 */
	 
	  	
	
	 	
	 $image=mysql_query("INSERT INTO loans set  loan='$other_deducts',reason='$reasons',matric='$matric' ,name='$myname',month='$month',year='$year',dept='$dept',date='$date',types='sanction' ") or die(mysql_error());

		
				echo "<script>alert('You have successfully add deductions to $myname. Thank You')</script>";
				

	}
		
	?>
    
    </div>
	
    
   
	 <h1>Loan Historique</h1>
   <table>
    <?php
   $df=mysql_query("SELECT * FROM loans where name='$myname'  and month='$date' or date='$dates' and reason!='' order by id DESC") or die(mysql_error());
   $i=1;
   ?>
   <tr style="background:#0F6">
  
   <td>S/N</td><td>Sanction Amount</td><td>Reason</td><td>Month</td><td>Action</td></tr>
   <?php while($fg=mysql_fetch_assoc($df)){ ?>
   
   
     <tr>
   <td><?php echo $i++; ?></td><td><?php echo $fg['loan']; ?></td><td><?php echo $fg['reason']; ?></td><td><?php echo $fg['month']; ?>/<?php echo $fg['year']; ?></td><td><a href="?adding_sanctions=<?php echo $_GET['adding_sanctions']; ?>&idd=<?php echo $fg['id']; ?>&month=<?php echo $fg['month']; ?>&year=<?php echo $fg['year']; ?>">Delete</a></td>
   <?php } ?>
   
   </tr>
   </table>
    		
		 		
</body>
</html>
<?php }  ?>
<?php
if(isset($_GET['idd'])){
$id=$_GET['idd'];
$month=$_GET['month'];
$year=$_GET['year'];
$month1=date('m');
$year1=date('Y');
if($month==$month1 and $year==$year1){
	$delete=mysql_query("DELETE FROM loans where id='$id'") or die(mysql_error());
		echo "<script>alert('Action successful')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=deduct.php?adding_sanctions='.$_GET['adding_sanctions'].'">';


}
else{
	echo "<script>alert('Action not Permitted')</script>";
}
}
?>