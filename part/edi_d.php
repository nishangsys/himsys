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
  $date1=date('F');
  $year=date('Y');
  $matric=$_GET['edit_d'];
  

  $r=mysql_query("SELECT * FROM payslips where id='$matric'  ") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	
  ?>
<h1 > You are about to edit deductios of  <span style="color:#F00"> <?php echo $myname=$row['name']; ?> for the month of <?php echo $row['thismonth']; ?>  <?php echo $row['year']; ?></span> </span></h1> 
    
    
   <div style="float:left; width:73%; border:1px dashed#000; float:left">
  <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
    <table>
         
                           <tr><td></td><td><input type="HIDDEN" name="id"  value="<?php echo $row['id'] ?>" /></td></tr>
  <tr><td></td><td><input type="HIDDEN" name="matric"  value="<?php echo $row['matric'] ?>" /></td></tr>

               
                <tr><td>Department</td><td><input type="text" name="dept"  style="width:80%" value="<?php echo $row['dept'] ?>" readonly /></td></tr>
                  
                <tr><td>Position</td><td><input type="text" name="post"  style="width:80%" value="<?php echo $row['position'] ?>" readonly /></td></tr>
                                          


                
                                <tr><td></td><td><input type="HIDDEN" name="one"  value="<?php echo $row['one'] ?>" /></td></tr>
                                
                                   <tr><td>IRRP</td><td><input type="text" name="irpp"  style="width:60%"  value="<?php echo $row['irpp'] ?>" /></td></tr>


                                <tr><td>CNPS EMPLOYEE  </td><td><input type="text" name="cnps"  style="width:60%" value="<?php echo $row['cnps'] ?>" /></td></tr>


                                <tr><td>CNSP EMPLOYER </td><td><input type="text" name="cnps2"  style="width:60%" value="<?php echo $row['cnps2'] ?>" /></td></tr>


                                <tr><td>Additional Council Tax</td><td><input type="text" name="ccf"  style="width:60%"  value="<?php echo $row['ccf'] ?>" /></td></tr>
                                
                                     <tr><td>Audio visual Tax(Crtv) </td><td><input type="text" name="crtv"  style="width:60%"  value="<?php echo $row['crtv'] ?>" /></td></tr>


                                              <tr><td>National Housing Loans Fund </td><td><input type="text" name="nhlf"  style="width:60%"  value="<?php echo $row['nhlf'] ?>" /></td></tr>

                               

                                                                <tr><td>Advance Salary </td><td><input type="text" name="advance"  style="width:60%"  value="<?php echo $row['pre_paid'] ?>" /></td></tr>


                                <tr><td>Other Deductions</td><td><input type="text" name="other_deducts"  style="width:60%"  value="<?php echo $row['others_exp'] ?>" /></td></tr>
                                
                                 <tr><td>Reasons for other deductions</td><td><input type="text" name="reasons"  style="width:90%" value="<?php echo $row['reasons'] ?>"   /></td></tr>
                                 
                                 
                                 
                                 
                                 


                              
        
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
	$crtv=$_POST['crtv'];
	$irpp=$_POST['irpp'];	
     $cnps=$_POST['cnps'];
	  $ccf=$_POST['ccf'];
	   $nhlf=$_POST['nhlf'];
	$cnps2=$_POST['cnps2'];	
	$advance=$_POST['advance'];
	$other_deducts=$_POST['other_deducts'];
	$reasons=$_POST['reasons'];

		/* 	 
	
	 $image=mysql_query("UPDATE staffs SET response='$resp',rents='$rents',senior='$senior',
	 trans='$trans',leave='$leave',rents='$rents',others='$others',
	 overtime='$overtime',paytax='$pay' where  id='$matric' ") or die(mysql_error());
	 */
	
	 	
	 echo $image=mysql_query("UPDATE payslips set  pre_paid='$advance',others_exp='$other_deducts',reasons='$reasons',ccf='$ccf',crtv='$crtv',irpp='$irpp',cnps='$cnps',cnps2='$cnps2',nhlf='$nhlf' where  id='$ids' ") or die(mysql_error())  ;

	 
	 
				echo "<script>alert('You have successfully add deductions to $myname. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?edit_slip">';

		
	
	
	}
		
	?>
    
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>