<?php
include  '../dbc.php';
require_once 'functions/functions.php';

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
body{
	font-size:16px;
	
	 
}
.ff{
	width:50px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	  margin-left:5px;
	  float:left;
	 
}
.s{
	width:100px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.t{
	width:160px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.f{
	width:190px;
	height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
</style>
</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">

<div class="receipt"> 
<div class="mainbox">

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	  $who=$_GET['id'];
	
		
	  $select="SELECT * from daily where id='$who' and exp!='' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
	
	?>
    
    <div style=" float:left; width:800px; margin-top:-10px;TEXT-ALIGN:CENTER; background:#fff url(../img/vertical_logo%20(1).png) no-repeat center; border-bottom:1px ;  height:50px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
 CASH RECEIPT


</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Paid to:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['receiver'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
<?php echo $row['reason'];?> </div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>


<div style=" float:left; width:170px; height:25px;font-size:17px;"> Academic year:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['year'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php  $p=$row['exp'];
	if(empty($p)){
		echo $paid=$row['exp'];
	}
	else {
		echo $paid=$row['exp'];
	}?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $row['date'];?>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($paid) ; ?></i></div>
    
  
  
  
  
  
  <div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Sector</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo $row['staffname'] ; ?></i></div>
    
  </div>  
  
  <div style=" clear:both; height:30px"></div>
  
<div style="float:left; margin:10px 30px; height:30px; ">

______<?php echo $row['paidto'] ; ?>_________<br /><br />Bursar Signature
</div>





  
<div style="float:right; margin:10px 30px; height:30px;">

_____<?php echo $row['receiver'] ; ?>________<br /><br />Receiver Signature
</div>


</div>
</div>
</div></div>
</div>



<?php } }  ?>



<div class="mainbox">

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	 $who=$_GET['id'];
	
		
	  $select="SELECT * from daily where id='$who' and exp!='' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
	
	?>
    
    <div style=" float:left; width:800px; margin-top:-10px;TEXT-ALIGN:CENTER; background:#fff url(../img/vertical_logo%20(1).png) no-repeat center; border-bottom:1px ;  height:50px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
 CASH RECEIPT


</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Paid to:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['receiver'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
<?php echo $row['reason'];?> </div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>


<div style=" float:left; width:170px; height:25px;font-size:17px;"> Academic year:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['year'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php  $p=$row['exp'];
	if(empty($p)){
		echo $paid=$row['exp'];
	}
	else {
		echo $paid=$row['exp'];
	};?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
DATE
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo $row['date'];?>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($paid) ; ?></i></div>
    
    
    
  
  
  <div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Sector</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo $row['staffname'] ; ?></i></div>
  </div>  







<div style=" clear:both; height:30px"></div>
  
<div style="float:left; margin:10px 30px; height:30px; ">

__<?php echo $row['paidto'] ; ?>_________________<br /><br />Bursar Signature
</div>





  

  
<div style="float:right; margin:10px 30px; height:30px;">

_____<?php echo $row['receiver'] ; ?>________<br /><br />Receiver Signature
</div>


</div>
</div>
</div></div>



<?php } }  ?>


















</div>
</div>
   <?php ?>
</body>
</html>




