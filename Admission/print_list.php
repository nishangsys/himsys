<?php
include  '../dbc.php';

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
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

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">

<div class="receipt"> 


<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	echo $who=$_GET['id'];
	
		
	  $select="SELECT * from daily where id='$who' ";
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

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['staffname'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['purpose'];?>.
</div>

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
<?php echo $row['rec'];?> <i>frs C. F. A</i>
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


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($row['rec']) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  








<div style=" font-size:16px; line-height:1.5; height:auto; margin-top:-30px; overflow:hidden;  color:#333; width:98%">

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>....................</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>student Signature<br />
     <b>......................</b>
     </div>
    
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
	echo $who=$_GET['id'];
	
		
	  $select="SELECT * from daily where id='$who' ";
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

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['staffname'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['purpose'];?>.
</div>

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
<?php echo $row['rec'];?> <i>frs C. F. A</i>
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


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($row['rec']) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  








<div style=" font-size:16px; line-height:1.5; height:auto; margin-top:-30px; overflow:hidden;  color:#333; width:98%">

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>....................</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>student Signature<br />
     <b>......................</b>
     </div>
    
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




