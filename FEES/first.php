<?php
@session_start();
include '../includes/dbc.php';
$query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $who=$userRow['user_name'];
 $whom=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}
$CC=$ayear_name;
$ssyear=substr($CC,2,2);

///////////////select semester////////////
$d=$con->query("SELECT * FROM rush where roll='2'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $semester=$bu['year'];
}

///////////////select semester////////////
$d=$con->query("SELECT * FROM sector where area='$level'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $secto=$bu['name'];
}
 if(empty($level)){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

 
if($level=='11' or $level=='12' or $level=='20' or $level=='8'){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BUIB FINANCES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script language="JavaScript" src="js/pop-up.js"></script>   
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
	
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  color:#fff;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	a{
		text-decoration:none;
		color:#090;
		
	}
	p {
		border-bottom:1px solid#000;
		line-height:1.5;
	}
  </style>
</head>
<body>
<?php include 'nav.php';?>
  
<div class="container-fluid text-center" style="overflow:hidden; height:auto">
  <div class="row content">
       <div class="col-sm-3 sidenav" style="height:1500px">
    <?php include 'sidebar.php';?>
    
    <!---
    
        
 <p> <a href="?ffirst&link=New%20Students%20Payments">New Student First Block </a>
</p>


    
 <p> <a href="?first&link=Old%20Students%20Payments">Old student First Block</a>
</p>

 <p> <a href="?otherst=Our%20Students%20On%20scholarship">Add Missing Name</a>
</p>
  
 <p> <a href="?pay_again">Second Installments</a>
</p>
    
 <p> <a href="?stats">Fee Statistic/ Reports</a>
</p>
 


  <p> <a href="?others">Other Reports</a>
</p>

 <p> <a href="?todays">Todays Reports</a>
</p>

 <p> <a href="?registration">Registration Fee Reports</a>
</p>


       
         <p><a href="?completed_fees">Completed Fees</a></p>
      
         <p ><a href="?uncompleted_fees">UnCompleted Fees</a></p>

 <p> <a href="?scholars&link=Scholarship Providers"> Scholarship Providers</a>
</p>

<P>
<a href="?update">Finance Update Center</a></P>
 
 
 
<P>
<a href="?discount">Discount Reports</a></P>

<P>
<a href="?updatem">Update Matricule/Name</a></P>
 
<P>
<a href="?transfer">Transfer Debts</a></P>
 <P>
<a href="?recovered">Recovered Debts Reports</a></P>

------->
    </div>
    <div class="col-sm-9 text-left">
     <h3 style="border:2px solid#f00; text-align:center; color:#00F; font-size:24px">School Year:   <?php echo $ayear_name; ?> <span   style="color:#f00"><?php echo $_GET['link']; ?></span></h3>
    
    <?php
	
	if(isset($_GET['admission'])){
	include '../Fees/admission.php';
		
	}
	if(isset($_GET['otherss'])){
	include '../Acc/otherss.php';
		
	}
	if(isset($_GET['direct_entry'])){
	include '../Fees/all_programs.php';
		
	}
	if(isset($_GET['chose_sect'])){
	include '../Fees/chose_sects.php';
		
	}
	if(isset($_GET['chose_prog'])){
	include '../Fees/chose_prog.php';
		
	}
	if(isset($_GET['ffirst'])){
	include '../Admission/all_sects.php';
		
	}
	
	if(isset($_GET['now'])){
	include '../Fees/new_student.php';
		
	}
	if(isset($_GET['ydept'])){
	include '../Fees/ydept.php';
		
	}
	if(isset($_GET['pydept'])){
	include '../Fees/pydept.php';
		
	}
	if(isset($_GET['scholarship'])){
		include '../Fees/page111.php';
	}
	if(isset($_GET['dept'])){
		include 'add_dept.php';
	}
	if(isset($_GET['mat'])){
		include 'page2.php';
	}
	if(isset($_GET['pay_again'])){
		include 'pay_again.php';
	}
	if(isset($_GET['cdept'])){
		include 'change_dept.php';
	}
	if(isset($_GET['student_records'])){
		include 'student_records.php';
	}
	if(isset($_GET['continue'])){
		include 'continuing.php';
	}
	if(isset($_GET['continuing'])){
		include 'continue.php';
	}
	if(isset($_GET['scholarships_cases'])){
		include '../Fees/scholarships_cases.php';
	}
	if(isset($_GET['normal_cases'])){
		include 'normal_cases.php';
	}
	if(isset($_GET['odept'])){
		include 'new_dept.php';
	}
	if(isset($_GET['level'])){
		include 'update_level.php';
	}
	if(isset($_GET['ndept'])){
		include 'update_depart.php';
	}
	if(isset($_GET['new_paymt'])){
		include '../Fees/new_paymt.php';
	}
    if(isset($_GET['2'])){
		include '../Acc/old_students.php';
	}
	 if(isset($_GET['22'])){
		include 'page33.php';
	}
	if(isset($_GET['404'])){
		include '401.php';
	}
	if(isset($_GET['update'])){
		include '../Fees/daily_report.php';
	}
	if(isset($_GET['updatem'])){
		include '../Fees/daily_reportm.php';
	}
	if(isset($_GET['mid_term'])){
		include '../Fees/mid_term.php';
	}
	 if(isset($_GET['name'])){
		include '../Fees/update.php';
	}
	 if(isset($_GET['uname'])){
		include '../Fees/updateu.php';
	}
	if(isset($_GET['mtname'])){
		include '../Fees/giving_midterm.php';
	}
	if(isset($_GET['scholars'])){
		include 'scholars.php';
	}
	 if(isset($_GET['frecords'])){
		include 'frecords.php';
	}
	 if(isset($_GET['by_dept'])){
		include 'by_dept.php';
	}
	 if(isset($_GET['viewing_dept'])){
		include 'viewing_dept.php';
	}
	
	if(isset($_GET['by_level'])){
		include 'by_level.php';
	}
	if(isset($_GET['viewing_level'])){
		include 'viewing_level.php';
	}
	if(isset($_GET['fee_drive'])){
		include 'fee_drive.php';
	}
	if(isset($_GET['viewing_feedrive'])){
		include 'viewing_feedrive.php';
	}
	if(isset($_GET['debtors'])){
		include 'debtors.php';
	}
	if(isset($_GET['all_debtors'])){
		include 'all_debtors.php';
	}
	if(isset($_GET['update_debt'])){
		include 'update_debt.php';
	}
	if(isset($_GET['completed_fees'])){
		include 'completed_fills.php';
	}
	if(isset($_GET['uncompleted_fees'])){
		include 'uncompleted_fills.php';
	}
	if(isset($_GET['stats'])){
		include 'stats.php';
	}
	if(isset($_GET['others'])){
		include 'other_repors.php';
	}
	if(isset($_GET['todays'])){
		include '../Fees/todays_repors.php';
	}
	if(isset($_GET['all_scholars'])){
		include '../Fees/scholar_report.php';
	}
	if(isset($_GET['registration'])){
		include 'registration.php';
	}
	if(isset($_GET['my_records'])){
		include 'my_records.php';
	}
	if(isset($_GET['my_trecords'])){
		include 'my_trecords.php';
	}
	if(isset($_GET['all_records'])){
		include 'all_records.php';
	}
	if(isset($_GET['new_user'])){
		include 'register.php';
	}
	if(isset($_GET['reg_fee'])){
		include 'reg_dept.php';
	}
	if(isset($_GET['all_users'])){
		include 'all_users.php';
	}
	
	if(isset($_GET['otherst'])){
		include '../Records/other_ss.php';
	}
	if(isset($_GET['upfin'])){
		include '../Acc/fin.php';
	}
	if(isset($_GET['see'])){

		include '../Fees/see.php';
	}
	if(isset($_GET['transfer'])){
		include '../Fees/transfer.php';
	}
	if(isset($_GET['update_from'])){
		include 'update_from.php';
	}
	if(isset($_GET['recovered'])){
		include 'recovered.php';
	}
	if(isset($_GET['discount'])){
		include 'discount.php';
	}
	
	if(isset($_GET['receipts'])){
	include '../Cash/receipts.php';
	}
	if(isset($_GET['fee_receipts'])){
	include '../Cash/fee_receipts.php';
	}
	if(isset($_GET['fb'])){
	include '../Fees/fb.php';
	}
	if(isset($_GET['regs'])){
	include '../Records/regs.php';
	}
	
	if(isset($_GET['reg_receipts'])){
	include '../Cash/reg_receipts.php';
	}
	if(isset($_GET['waiver'])){
	include '../Records/waiver.php';
	}
	if(isset($_GET['waiver_receipts'])){
	include '../Cash/waiver_receipts.php';
	}
	
	if(isset($_GET['move'])){
	include '../Fees/sers.php';
	}
	
	if(isset($_GET['import_names'])){
	include '../Records/import.php';
	}	
	
	if(isset($_GET['c_list'])){
	include '../Records/c_lists.php';
	}
	if(isset($_GET['statss'])){
	include '../Provost/tstats.php';
	}
	
	if(isset($_GET['lasts'])){
	include '../Fees/lasts.php';
	}
	
	if(isset($_GET['all_lasts'])){
	include '../Fees/all_lasts.php';
	}
	if(isset($_GET['genc_lists'])){
	include '../Records/genc_lists.php';
	}
    ?>
    
    <?php } ?>
    
    
    
    
    
    
    
      <hr>
    
    </div>
    
  </div>
</div>

</body>
</html>

