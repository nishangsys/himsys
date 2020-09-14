<?php
//include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';
echo 111111111;
}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		
			
	}
	else {
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.bal.value = ((parseInt(form.suppo.value) - parseInt(form.paid.value)));
  
}
</script>


<body>

    
    


<?php
if(isset($_GET['yourcontri'])){
	  $cust_id=$_GET['yourcontri'];
	
	 $cus="SELECT * from member where id='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
		 
		 
		 
?>
    
    <div class="right">
    
   
    <h1 class="he">Receiving  <span style="color:#Ff0"><?php echo $row['name']; ?>'s Contribution </span></h1>
    <?php $catego=$row['cate'];
	$ok=mysql_query("SELECT * from main_cats where id='".$catego."'  ");
	while ($m=mysql_fetch_assoc($ok)){
		$yourcat=$m['amt'];
	
	
	 ?>
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table style="float:left; position:relative">
         
       
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['id']; ?>" style="width:300px" readonly="readonly" /></td></tr>
                         <tr><td></td><td><input type="hidden" name="howlong" value="<?php echo  $m['howlong']; ?>" style="width:300px" readonly="readonly" /></td></tr>
 
          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
                      <tr><td>Your Matricule</td><td><input type="text" name="mat" value="HSC<?php echo  $row['id']; ?><?PHP echo date('my'); ?>" style="width:300px; color:#f00" readonly="readonly" /></td></tr>

                   
                   <tr><td>Category</td><td><input type="text" name="cat" value="<?php echo  $m['disc']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Facilities</td><td><input type="text" name="facil" value="<?php echo  $m['facil'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Expected Amount</td><td><input type="text" name="suppo" value="<?php echo $m['amt']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
                          
              
                 <tr><td> Amount Paid</td><td><input type="text" name="paid"    onBlur="doCalc(this.form)" style="width:300px;"/></td></tr>


                
                 <tr><td> Balance</td><td><input type="text" name="bal"  style="width:300px; background:red;color:white;" required="required" readonly="readonly"  /></td></tr>

                
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Save Payments</button></td></tr>
            </table>
    
    </form>
    
    <table style="float:right; position:relative; top:0px; margin-top:-300px; right:0px; width:200px; height:200px; border:1px solid#000" >
   <tr><td> <img src="album/<?php echo $row['photo']; ?>" style="width:200px; height:220px; " /></td></tr>
    
    </table>   
    </div>
  
	
  		
           <div class="clear"></div>
		
	
			
	<?php } } 
}

}}?>	 	
</body>
</html>

<?php if(isset($_POST['saves'])){		
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		$mat=$_POST['mat'];
		$cat=$_POST['cat'];
		$facil=$_POST['facil'];
		$suppo=$_POST['suppo'];
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];
		$per=$_POST['howlong'];
		if($per=='12'){
			$howlong='1';
					$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." months"));
					$duedate2=date("d-m-Y", strtotime("$startDate +".$howlong." months"));

		}
		else if($per=='1') {
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
		if(($bal)<0){
			echo "<script>alert('ERROR. The Balance is Negative')</script>";
			
		}
		
		else{
			//
			
			$one=mysql_query("INSERT INTO members_times set matricule='$mat',name='$name',paid='$paid',owed='$bal',
			date='$date',disc='$cat',inter='$facil',duedate='$duedate',again='$duedate2'") or die(mysql_error());
			//member
			
			$update_mem=mysql_query("UPDATE member set matric='$mat' where id='$id'");
			//member_times
			$update_mem_times=mysql_query("UPDATE members_times set status='2' where id='".$id."'") or die(mysql_error());
			
			
		$histo=mysql_query("INSERT INTO historique set yourid='members',cat='$cat',howlong='$howlong',
			paid='$paid',bal='$bal',date='$date',area='4', month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='members',room='$cat',
			rec='$paid',date='$date',month='$month',year='$year',area='4',time='$mat'") or die(mysql_error());

		/*daily records
		$update_client=mysql_query("UPDATE ourclients set bal='".$exp."',paid='$paid' where yourid='".$id."'") or die(mysql_error());
		//update room status to empty
		$update_finances=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
		$histo=mysql_query("INSERT INTO historique set yourid='$id',room='$room',
			paid='$paid',added='$added',bal='$exp',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year'") or die(mysql_error());	
			*/
			
			echo "<script>alert('SUCCESS. ".$name." Payments is Receive and is owing ".number_format($bal)." Frs')</script>";
echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?memcontri">';

			
		}
	} ?>