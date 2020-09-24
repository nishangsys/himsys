<?PHP
include  '../includes/dbc.php';
 
	
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sem_name;?> RESULTS</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
}
  @page { size: portrait; }
  .sub{
	  width:645px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	  margin-top:50px;
	 
  }
  table{
	   width:100%;
  }
 table,tr,td,th{
	 border:1px dashed#000;
	 border-collapse:collapse;
	 padding:5px 5px;
	 font-size:12px;
	 line-height:1.5;
	
 }
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
  .left_box{
	  float:left;
	  height:125px;
	  width:445px;
	  border:1px solid#000;
	  
  }
  .right_box{
	  float:left;
	  height:115px;
	  width:185px;
	  border:1px solid#000;
	  font-size:10px;
	  padding:5px 5px;
	  
  }
  .left_box_textbox{
	  width:98%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  height:20px;
	  
  }
  .for_grades{
	width:20px;
	 margin:0px;
	 padding:0px;
	  float:left;
	  line-height:1.5;
	 
}
.span{
	font-weight:bold;
	font-style:italic;
}
.sn{
	width:20px;
	height:25px;
	float:left;
	border:1px dashed#000;
	clear:both;
}
.main_thing{
	width:100%;
	height:auto;
	overflow:hidden;
	padding-bottom:0px;
	border:1px dashed#000;
	clear:both;
	
}
.footer_box{
	width:98%;
	padding:5px 5px;
	margin-top:20px;
	border:1px solid#000;
	height:25px;
}
.footer_box_left{
	width:50%;
	float:left;
	padding:0px 5px;
	border-right:1px solid#000;
	
	
}
.footer_box_right{
	width:40%;
	
	float:left;
	
}


@media print {
 .footers {page-break-after: always;}
}
h3{
	text-align:center;
	font-size:24px;
	color:#f00;
	border:2px solid#00F;
}

/* ISO Paper Size */
@page {
  size: A4 portrait;
}

/* Size in mm */    
@page {
  size: 100mm 200mm portrait;
}

/* Size in inches */    
@page {
  size: 4in 6in portrait;
}
.number{
	background:#FF0;
	border:1px solid#000;
	border-radius:20px 20px 20px 20px;
	color:#000;
	height:30px;
	padding:5px 5px;
	position:absolute;
	bottom:20px;
	right:200px;
}
</style>
</head>


<body onload="window.print();">
<div class="sub">
	<div class="head1">
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="../img/logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:80%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold ; padding:10px 0px; ">   BIAKA UNIVERSITY INSTITUTE OF BUEA(BUIB)
  <br />
  <span style="font-size:14px; font-style:italic"><br />The Audacity to be different</span> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px;   ">Website : www.biakahc.org </div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px; padding:5px 0px; text-transform:uppercase  "> p.o box 77 bokoko ,buea</div></div>


    
    </div>
    
    
    <?php 

	
	

$a =$con->query("SELECT * FROM gen_info oder by names") or die(mysqli_error($con));


?>
            <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
        <th>Name</th>
        <th>DOB</th>
        <th>POB</th>
        
         <th>PROG</th>
        <th>SEX</th>
        <th>TEL</th>
         <th>CODE</th>
      </tr>
    </thead>
    <tbody>
    <?PHP
	$o=1;
	while($rows=$a->fetch_assoc()){
	  $name=$rows['names'];
	    $prog=$rows['choiceone'];
		$dob=$rows['dob'];
	    $pob=$rows['pob'];
		$sex=$rows['gender'];
	    $tel=$rows['tel'];
		 $MATRIC=$rows['matric'];

?>
     
     
       <tr>
      <th></th>
        <th><?php echo $o++;?></th><th><?php
		echo $name;
		
?></th>
        <th><?php echo $dob; ?></th>
        <th><?php echo $pob; ?></th>
        
         <th><?php echo $prog; ?></th>
        <th><?php echo $sex; ?></th>
        <th><?php echo $tel; ?></th>
         <th><?php echo $MATRIC; ?></th>
      </tr>
      <?PHP } ?>
    </tbody>
  </table>
          

  <table class="table table-striped">
    <thead>




</thead>
</table>


</div>
<div class="footers" style="font-size:9px;"><?php echo $page++; ?></div>


</body>
</html>
