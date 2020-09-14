<?PHP
include  '../includes/dbc.php';
session_start();
$cus1=$con->query("SELECT * from client ") or die (mysqli_error());
 while ($rows=$cus1->fetch_assoc()){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
 }
$mat=$_GET['id'];
	
	$d=$con->query("SELECT * from requisitions,requisition_name where requisitions.tab='$mat' and requisitions.qty>0  and  requisitions.tab=requisition_name.id  ") or die(mysqli_error($con));
	while($rows=$d->fetch_assoc()){
		$yname=$rows['agent'];
		$date=date('d-m-Y');
		
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
<IMG src="../img/logo.jpg" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:79%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  ">  <?php echo $clients; ?> REQUISITION </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    
    
   
    <div style="clear:both"></div>
    
    <div class="head2">
     <h1 style="text-align:center; margin-top:-20px">REQUISITION N<sup><u>0</u></sup>
     
     <?php
	 $t=$_GET['id'];
	 if($t<10){
		 echo "00"."$t";
	 }
	 else  if($t<100){
		 echo "0"."$t";
	 }
	 else{
		 echo $t;
	 }
	 ?>
     
     </h1>
    
    <?php
	$d=$conn->query("SELECT * from staffs where id='".$_GET['yid']."'  ") or die(mysqli_error($conn));
	while($row=$d->fetch_assoc()){
		$name=$row['name'];
	?>
    
                        
                        
                            <div style="width:15%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; clear:both">Department</div>
                             <div style="width:37%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; "><i>  <?PHP echo $row['age'];  ?>  </i> </div>

  <div style="width:18%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; ">Requested On</div>
                        <div style="width:19%; height:20px; float:left; border:1px dashed#000; padding:5px 5px; "><?PHP echo $row['age'];  ?> <?PHP echo $year;  ?> </i></div>
             
<?php } ?>

         

  <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:0px 5px;text-align:center; font-weight:bold; ">S/N</div>
  
    <div style="width:35%; height:20px; float:left; text-align:center; border:1px dashed#000;font-weight:bold; padding:0px 5px; ">Description</div>
      <div style="width:10%; height:20px; float:left; border:1px dashed#000;text-align:center;font-weight:bold; padding:0px 5px; ">Qty</div>
      
      <div style="width:15%; height:20px; float:left; border:1px dashed#000;text-align:center;font-weight:bold; padding:0px 5px; ">Price</div>
        <div style="width:21%; height:20px; float:left; border:1px dashed#000;text-align:center; font-weight:bold; padding:0px 5px; "> Total </div>

<!--BASIC SALARY---->

 
    <?php
	$d=$con->query("SELECT * from requisitions where tab='".$_GET['id']."'  and requisitions.qty>0 ") or die(mysqli_error($con));
	$i=1;
	while($row=$d->fetch_assoc()){
	?>
    
          

  <div style="width:5%; height:20px; float:left; border:1px dashed#000; padding:0px 5px;text-align:center "><?php echo $i++; ?></div>
  
    <div style="width:35%; height:20px; float:left; text-align:left; border:1px dashed#000; padding:0px 5px; "><?php echo $row['product']; ?></div>
      <div style="width:10%; height:20px; float:left; border:1px dashed#000;text-align:center; padding:0px 5px; "><?php echo $row['qty']; ?></div>
      
      <div style="width:17%; height:20px; float:left; border:1px dashed#000;text-align:center padding:0px 5px; "><?php echo $row['price']; ?></div>
        <div style="width:21%; height:20px; float:left; border:1px dashed#000;text-align:center; font-weight:bold; padding:0px 5px; "> <?php echo $row['price']*$row['qty']; ?> </div>

    
    <?php } ?>



<!--GROSS---->

 <div style="width:97%; height:20px; margin-top:20PX; float:left; border:1px dashed#000; padding:2px 5px;text-align:LEFT;  ">
 TOTAL <span style="margin-right:20px ; float:right">
<?php
	$d=$con->query("SELECT SUM(price*qty) as total from requisitions where tab='".$_GET['id']."' and requisitions.qty>0  ") or die(mysqli_error($con));
	$i=1;
	while($row=$d->fetch_assoc()){
		echo number_format($row['total']);
	}
	?>
     </span></div>
  
   
 
        
                 
                   <div style="width:97%; margin-top:15PX; height:20px; float:left;  padding:2px 5px;text-align:LEFT;  ">
                   <span style="margin-left:20PX;"><u></u><br /><br />Requested by : <i><?php echo $yname; ?>


  <span style="float:right">Requested on : <i><?php echo $date; ?></i><br />
</span>



</div>












    
    </div>


</div>
</body>
</html>
<?PHP } ?>