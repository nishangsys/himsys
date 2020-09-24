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
	<?php include '../Cash/header.php'; 
	
	 $select=$conn->query("SELECT * from levels,special,subjects where subjects.id='".$_GET['code']."'  AND subjects.prog_id=special.id AND subjects.level_id=levels.id  ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		 $dept=$rows['prog_name'];
		 $level=$rows['levels'];
		 $subject=$rows['title'];
		 $code=$rows['code'];
	}
	
	$d=$conn->query("SELECT * FROM years where id='".$_GET['ayear']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$year_name=$bu['year_name'];
					}
					
					?>
		
		
    
    
    

    
    
    
    <div class="main_thing">
    <h2>Program: <?php echo $dept;?> Level <?php echo $level;?> For <?php echo $year_name;?> </h2>
        <h3>Course : <?php  echo $subject; ?>(<?PHP echo $code ?>)</h3>

    
    <table>
    <th>S/N</th><th>Names </th><th>Matricule</th><th>Ca</th></tr>
    <?php
	
	$ds=$dbcon->query("Select  * from students,my_marks where my_marks.dept_id='".$_GET['dept']."' 
	AND my_marks.level_id='".$_GET['level']."' AND my_marks.year_id='".$_GET['ayear']."' AND 
	my_marks.sem='".$_GET['sem']."' AND my_marks.code='".$code."' AND students.matricule=my_marks.matric AND 
	students.year_id=my_marks.year_id ") or die(mysqli_error($dbcon));
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
