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
  $matric=$_GET['undeclare'];
  

  $r=mysql_query("SELECT * FROM staffs where id='$matric'  ") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	
  ?>
<h1 > You are about to <span style="color:#F00"> UNDECLARE <?php echo $myname=$row['name']; ?> to CNPS</span> </span></h1> 
    
    
   <div style="float:left; width:73%; border:1px dashed#000; float:left">
  <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
    <table>
         
                           <tr><td></td><td><input type="HIDDEN" name="id"  value="<?php echo $row['id'] ?>" /></td></tr>

               
                <tr><td>Department</td><td><input type="text" name="dept"  style="width:80%" value="<?php echo $row['dept'] ?>" readonly /></td></tr>
                                      


                
                                <tr><td>Current Position </td><td><input type="text" name="position"  style="width:60%" readonly value="<?php echo $row['age'] ?>" /></td></tr>

        
     <tr><td></td><td><button type="submit" name="update" class="btn btn-danger" style="color:#fff" >UNDECALRE STAFF</button></td></tr>

                              
 
               </table></form>
                 </div>
                 
                    <div style="float:left; width:20%; border:1px dashed#000; float:left">
                 
                    
                    <?php if($row['photo'] != ""): ?>
                   
									<img src="../staffs/album/<?php echo $row['photo']; ?>" width="200px" height="200px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="../staffs/album/default.png" width="300px" height="200px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
                                    <?php } ?>
                    
                    </div>

                 <?php  ?>
   <?php
	 
		
		
$_POST = array_map("ucwords", $_POST);
	if(isset($_POST['update'])){
	$ids=$_POST['id'];

		 	 
	
	 $image=mysql_query("UPDATE staffs SET cnps='0' where id='$matric' and id='$ids' ") or die(mysql_error());
	 

		
				echo "<script>alert('You have successfully undeclared staff from CNPS. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?declare_cnps">';



		
	
	
	}
	

		
	?>
    
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>