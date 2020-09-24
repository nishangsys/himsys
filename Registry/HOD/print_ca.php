<?PHP
include  '../includes/dbc.php';

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRINT CA RESULTS</title>
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

</style>
</head>

<body>
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
    
    
    

    
    
    
    <div class="main_thing">
    <h2>Program: <?php echo $_GET['dept'];?> Level <?php echo $_GET['level'];?> For <?php echo $_GET['ayear'];?> </h2>
        <h3>Course : <?php $dm=$conn->query("SELECT * FROM course where course_code='".$_GET['code']."' LIMIT 1 ") or die(mysqli_error(              $conn));
		
							
					while($bum=$dm->fetch_assoc()){
						echo $title=$bum['title'];
						$course_code=$bum['course_code'];
					};?>(<?PHP echo $course_code ?>)</h3>

    
    <table>
    <th>S/N</th><th>Names </th><th>Matricule</th><th>Ca</th></tr>
    <?php
	
	$ds=$dbcon->query("Select courses.fname as fname, courses.matricule as matric, my_records.ca as ca from courses,my_records where my_records.matric=courses.matricule and my_records.ayear='".$_GET['ayear']."' and my_records.sem='".$_GET['sem']."' and my_records.code='".$_GET['code']."'  AND my_records.dept='".$_GET['dept']."' and my_records.ca>0  GROUP BY courses.matricule order by courses.fname ") or die(mysqli_error($dbcon));
	$num_of_courses=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr>
   <td><?php echo $i++; ?></td>
   <td><?php echo $rows['fname']; ?></td>
           <TD><?php echo $rows['matric']; ?></TD>
           <td><?php echo $rows['ca']; ?></td>
         </tr>
    <?php } ?>
    
    </table>
    
    
</div>
</div>

</body>
</html>
