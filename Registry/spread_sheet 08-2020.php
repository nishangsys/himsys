<?php  include '../includes/dbc.php'; 

//////Name of school and other details
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}


$level=$_POST['level'];
$sem=$_POST['sem'];
if($sem==1){
	$month="FIRST SEMSETER";
}
else {
	$month="SECOND SEMSETER";
}
$prog=$_POST['querystr'];
$year=$_POST['grade'];

	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year'  GROUP BY matric  order by matric ") or die(mysqli_error($dbcon));
			 $a=1;
	
	
	///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept='".$prog."'  ") or die(mysqli_error($dbcon));
    $set=$cd->num_rows;
 if($set<1){
	 echo "<script>alert('Sorry Grading system for $prog has not been Set')</script>";
	 exit;
 }
 else {
  ////while loop to get department id from sector tbl			
				while($nn=$cd->fetch_assoc()){
					$dep_id=$nn['sector'];
 					}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPREAD SHEETS</title>

<style>
body {
  background: #fff; 
  font-size:10px;
  font-family:Arial, Helvetica, sans-serif;
  line-height:1.5;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

.main{
	width:1060px;
	height:760px;
	border:none;
	margin:auto auto;
	
	
}
table{
	margin:0px;
	padding:0px;
	line-height:1.5;
}

.box1{
	float:left;
	padding:20px 5px;
	border:1px solid#fff;
	width:80%;
	height:30px;
	margin:auto;
	
}


.box2{
	float:left;
	padding:20px 5px;
	border:1px solid#fff;
	width:80%;
	height:30px;
	text-align:center;
	
	
}

.semester_box{
	float:left;
	padding:0px 0px;
	border:1px solid#000;
	width:525px;
	height:245px;
	border-top:none;
	border-bottom:none;
	
}
.patition{
	float:left; 
	height:30px;
	margin:0px;
	text-align:center;
	
	 border:1px solid#000;
	  width:40px;
}


@media print {
 .footer {page-break-after: always;}
}
table{
	width:100%;
}
th,tr,table,td{
	border:1px solid#000;
	border-collapse:collapse;
}

/* ISO Paper Size */
@page {
  size: A4 landscape;
}

/* Size in mm */    
@page {
  size: 100mm 200mm landscape;
}

/* Size in inches */    
@page {
  size: 4in 6in landscape;
}
.boxes{
	width:auto ;
	 margin:0px;
	 padding:0px;
	  float:left;
	  height:15px;
	  text-align:center;
	  border:1px solid#000;	
	  font-size:12px;
	  padding:1px 0.5px;
	  
}
</style>

</head>


<body onload="window.print();">

<?php


					
?>
	<page size="A4" layout="landscape"  >
    
        <div class="main" style="height:691px; border:; outline:#FFF; font-size:11px; ";
		  >
          
           <div class="box1" >
           
                    <img src="../Cash/header.png" style="height:140px; margin-top:-20px; width:90%; margin-left:100px " /> 

           </div>
		    <div style="height:30px; clear:both" ></div>
           <div class="box2">
          
           <h2><?php echo $prog;  ?> Level <?php echo $level;  ?> <?PHP echo $month; ?>  Spreed Sheet for <?php  echo $year; ?> School Year</h2>
           </div>
    
    
    
    <table class="table table-bordered" style="margin-top:30px; line-height:1.5">
    <thead>
      <tr>
        <th>#</th>
        <th>Matricle</th>
        <?php
	
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' and ca+exam!='' GROUP BY code  order by code ") or die(mysqli_error($dbcon));
		
	while($rows=$cls->fetch_assoc()){
		?>
	
        <th style="padding:0px; margin:0px; text-align:center"  ><h5 style="/* Safari */
-webkit-transform: rotate(-90deg);

/* Firefox */
-moz-transform: rotate(-90deg);

/* IE */
-ms-transform: rotate(-90deg);

/* Opera */
-o-transform: rotate(-90deg);

float: left; padding:30px 0px;
">
    
	<div style="clear:both; height:20px"></div>
	<p>
	<?php echo $rows['code'];?> <br>
   <?php
	
		$add=$dbcon->query("SELECT title FROM subject where subject='".$rows['code']."' order by roll DESC limit 1  ") or die(mysqli_error($dbcon));
		
	while($bcc=$add->fetch_assoc()){
		echo $tt=$bcc['title'];
	}
		?>
    
    </h5>
    <div style="clear:both" ></div>
  <div class="boxes" style="border-right:none; width:20%">Ca</div><div class="boxes" style="border-right:none;width:20%"> Exm </div><div class="boxes" style="border-right:none;width:25%"> Totl</div><div class="boxes" style="border-right:none; width:25%"> Grde</div><br />
        </th>
        <?php } ?>
         
      </tr>
    </thead>
    <tbody>
    <?php
	while($rowl=$cl->fetch_assoc()){
		?>
      <tr>
        <td style="font-size:10px"><?php echo $a++; ?></td>
        <td style="font-size:10px"><?php  echo $rowl['matric']; ?></td>
        
        <!-----First Load all the course---->
        
        <?php
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year'   and exam!='' GROUP BY code  order by code ") or die(mysqli_error($dbcon));
		
	while($rows=$cls->fetch_assoc()){
		?>
	
        <td style="margin:0PX; line-height:1; padding:0px">
		
<!----Select from marks where tbl where matric equals to this and courses code is equals to this --------->
 <?php
		$kl=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and matric='".$rowl['matric']."' and  ayear='$year' and code='".$rows['code']."' ") or die(mysqli_error($dbcon));
		
		
	while($ks=$kl->fetch_assoc()){
		?>
       	

<!----Select from marks where tbl where matric equals to this and courses code is equals to this --------->		
		
        
         <div class="boxes" style="border-right:none; border-top:none; border-bottom:none; width:20%"><?php echo $ks['ca']; ?></div>
         <div class="boxes" style="border-right:none;width:20%; border-top:none; border-bottom:none"> <?php echo $ks['exam']; ?> </div>
         <div class="boxes" style="border-right:none;width:25%; border-top:none; border-bottom:none"> <?php echo $  my_marks=$ks['ca']+$ks['exam']; ?></div>
         <div class="boxes" style="border-right:none; font-weight:bold; font-family:'Arial Black', Gadget, sans-serif; width:25%; border-top:none; border-bottom:none"><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></div>
      
    </td>
        
                <!-----First Load all the course---->

        <?php }} //// close $ks ?>
         
      </tr>
        
      </tr>
     <?php } // close $rowl=$cl->fetch_assoc());?>
    </tbody>
  </table>


	</page>
    <div class="footer"></div>
    
    
    <div style="clear:both"></div>

</body>
</html>
<?php } ?>
