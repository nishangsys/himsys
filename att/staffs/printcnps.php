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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CNPS LIST</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
  @page { size: portrait; }
  .sub{
	  width:95%;
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
  .O{
	  width:5%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  float:left;
	  height:25px;
  }
   .t{
	  width:40%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  float:left;
	  height:25px;
  }
   
   .th{
	  width:25%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  float:left;
	  height:25px;
  }
   .fo{
	  width:20%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  float:left;
	  height:25px;
  }
</style>
</head>

<body>
<div class="sub">
	<div class="head1">
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="../logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:79%; float:left;  padding-bottom:20px;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold;padding:5px 0px;  ">  <?php echo $clients; ?><br /> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px; padding:5px 0px;   "> <?php echo $AD; ?><br /></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    
    
    
    <?php
	
	 $Y = mysql_query("SELECT count(name) as yes FROM staffs  where cnps='2'") or die(mysql_error());
	  while($r=mysql_fetch_assoc($Y)){
		   $r['yes'];
	  }
	  $Yg= mysql_query("SELECT count(name) as notts FROM staffs where cnps!='2'") or die(mysql_error());
	  while($r=mysql_fetch_assoc($Yg)){
		  $r['notts'];
	  }
	 
	 $r = mysql_query("SELECT * FROM staffs,staff_details where staffs.cnps='2' and staffs.id=staff_details.yourid order by staffs.name") or die(mysql_error());

  $i=1;
 
	?>
    
    
    <div class="head2">
   <H1 style="clear:both">LIST OF DECLARED STAFF TO CNPS</H1>
   <div class="O" style="background:#000; color:#fff">S/N</div>
    <div class="t" style="background:#000; color:#fff">Name</div>
     <div class="th" style="background:#000; color:#fff">Function</div>
      <div class="fo" style="background:#000; color:#fff">CNPS Num</div>

<?php
 while($row=mysql_fetch_assoc($r)){
	
?>
<div class="clear"></div>
<div class="O"><?php echo $i++; ?></div>
    <div class="t"><?php echo $row['name']; ?></div>
     <div class="th"><?php echo $row['funct']; ?></div>
      <div class="fo"><?php echo $row['regno2']; ?></div>

 <?PHP } ?>   
    </div>


</div>
</body>
</html>
