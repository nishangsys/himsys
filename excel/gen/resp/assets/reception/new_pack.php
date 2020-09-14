<?php
//include '../dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
        
<link href="../jss/examples.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.common.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.kendo.min.css" rel="stylesheet"/>
		<!--//webfonts-->
</head>






        <script src="../jss/jquery.min.js"></script>
        <script src="../jss/kendo.all.min.js"></script>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

<script type="text/javascript">
function doCalc(form) {
	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.disc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<body>

 <div class="right">   
 
<?php
if(isset($_GET['changed'])){
	  $cust_id=$_GET['changed'];
	
	 $cus="SELECT * from members_times,member where members_times.matricule='".$cust_id."' and members_times.matricule=member.matric  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		 $totpai=$row['howlong'];
		 
		 
?>
    
    
    
    
    <h1 class="he">Updating  <span style="color:#Ff0"><?php echo $row['name']; ?> 's Package</span></h1>
    

    
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table>
                                 <tr><td></td><td><input type="hidden" name="mat" value="<?php echo $row['matric']; ?>"   /></td></tr>
                                 <tr><td></td><td><input type="hidden" name="name" value="<?php echo $row['name']; ?>"   /></td></tr>

         
                             <tr><td></td><td><input type="hidden" name="cat_d" value="<?php echo $row['cate']; ?>"   /></td></tr>

               
                   <tr><td>Amount Owed</td><td><input type="text" name="owed" value="<?php echo $row['owed']; ?>"  style="width:300px" readonly /></td></tr>
               
                 <tr><td>Amount Paid</td><td><input type="text" name="paid" value="<?php echo $row['paid']; ?>"  style="width:300px" readonly /></td></tr>  
           
                 <tr><td>Current Package</td><td><input type="text" name="curr" value="<?php echo $row['disc']; ?>(<?php echo $row['inter']; ?>)" style="width:300px" readonly /></td></tr> 

                 
                  <tr><td>New Package</td><td>   <?php		  
			   $amou="SELECT * from main_cats order by id  ";
	$run=mysql_query($amou) or die (mysql_error());				 
		 ?><select name="cate<?php echo $i; ?>" />            
               
               <?php				
					while ($row=mysql_fetch_array($run)){						
							$cate=$row['disc'];
							$facil=$row['facil'];
							$id=$row['id'];	
							$ho=$row['ins'];													
							echo "<option value='".$row['id']."'>$cate ($facil)  $ho</option>";
							
					}		

			   ?>
               </select>
               </td></tr>  
                
                  <tr><td></td><td><button type="submit" name="update" class="myButton">Save Update</button></td></tr>
            </table>
    
    </form><?php
	 
		
		 $address=$_POST['address'];
		
	//$imageProperties =($_FILES['userImage']['tmp_name']);
	if(isset($_POST['update'])){
		$cat_id=$_POST['cat_id'];
		$name=$_POST['name'];
		 $paid=$_POST['paid'];
		 $owed=$_POST['owed'];		 
		$mat=$_POST['mat'];
		$cate=$_POST['cate'];
 $cus="SELECT * from main_cats where id='".$cate."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		  $totpai=$rows['amt'];
		  $one=$rows['disc'];
		   $two=$rows['facil'];
		  $three=$rows['howlong'];

	}
	if($three=='12'){
			$howlong='1';
					$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." months"));
					$duedate2=date("d-m-Y", strtotime("$startDate +".$howlong." months"));

		}
		else if($three=='1') {
			$howlong='1';
					$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." years"));
					$duedate2=date("d-m-Y", strtotime("$startDate +".$howlong." years"));

		}
		else {
		$howlong='1';
					$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." days"));
					$duedate2=date("d-m-Y", strtotime("$startDate +".$howlong." days"));

		}
		 
		$date=date('d-m-Y');
		//$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." days"));
		//$duedate2=date("d/m/Y", strtotime("$startDate +".$howlong." days"));
		
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
	if($owed>0){
				echo "<script>alert('ERROR.".$name." is still owing $owed. Let him Finish his debts First')</script>";
				exit;

	}
		else {
		
		
		
		 $members=mysql_query("UPDATE members_times set date='$date',duedate='$duedate',
		 disc='$one',inter='$two',again='$duedate2',owed='$totpai',status='2'  where matricule='$mat'") or die(mysql_error())
		;
				echo "<script>alert('SUCCESS.".$name." Package has been Changed. Thank You')</script>";
				echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?members_payagain">';

		}
		
	}
	

	

		
	?>
    
   
    </div>
   
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } } }?> 	
