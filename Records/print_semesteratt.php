<?php
include  '../includes/dbc.php';
  $year=$_POST['year'];
	 $sem=$_POST['sem'];
	$level_id=$_POST['level'];
	$prog=$_POST['prog'];
	
	

	$aa=$conn->query("SELECT * FROM semesters,years,date_weeks,levels,special,students_register where date_weeks.sem='$sem' AND semesters.s_num=date_weeks.sem AND date_weeks.id=students_register.date_id  AND levels.id=students_register.level_id AND date_weeks.year_id='$year' AND special.id =students_register.dept_id AND students_register.year_id=years.id GROUP BY  students_register.year_id ") or die(mysqli_error($conn));
	
	
		while($bb=$aa->fetch_assoc()){
			 $month_name=$bb['s_name'];
			$year_name=$bb['year_name'];
			 $month=$bb['month'];
			 $ayear=$bb['year_id'];
			 $level_name=$bb['levels'];
			 $prog_name=$bb['prog_name'];
		}
		
		$aa=$conn->query("SELECT COUNT(period_id) as total,date_weeks.sem FROM students_register,date_weeks where date_weeks.sem='$sem' AND date_weeks.year_id=students_register.year_id AND students_register.year_id='$ayear' ") or die(mysqli_error($conn));
	echo $total_periods=$aa->num_rows;
	 $tot_hours=$total_periods*2;
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="print">
  @page { size: landscape; }
  table{
	  border-collapse:collapse;
  }
  tr,td{
	  border:1px solid#000;
  }
  }
  @import "bourbon";

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
.rt{
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    letter-spacing: 3px;
    
    position: absolute;
    bottom: 0;
    left: 0;
    margin-left: -30px;
    
    @include transform(rotate(270deg));
    @include transform-origin(0 0);
  }
</style>


  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />

</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">
 <img src="../Cash/header.png" />
 
    <h3 style="text-align:center"> <?php echo $prog_name; ?> Level <?php echo $level_name; ?>  <?php echo $month_name; ?> <?php echo $year_name; ?> Attendance </h3>
 
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Matricule</th>
		 <th>Total Hours</th>
         <th>Hours Present</th>
         <th>Hours Absence</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	 
	
	
	 $ac=$dbcon->query("SELECT * FROM students,date_weeks,students_register WHERE students_register.level_id='$level_id' AND date_weeks.sem='$sem' AND date_weeks.year_id=students_register.year_id AND 
	 students_register.year_id='$ayear' AND students_register.dept_id='$prog' AND students_register.matric=students.matricule
	AND students_register.year_id=students.year_id GROUP BY students_register.matric
	ORDER BY students.fname ") or die(mysqli_error($dbcon));
	$i=1;
	while($rows=$ac->fetch_assoc()){
	
	?>
      <tr>
      <td><?php echo $i++;?></td>
        <td><?php echo $rows['fname']; ?></td>
        <td><?php echo $rows['matricule']; ?></td>
        	
      <td><?php echo $tot_hours; ?></td>
      
         <td><?php 
		$check_it=$dbcon->query("SELECT * FROM students_register,date_weeks WHERE date_weeks.sem='$sem' and date_weeks.year_id=students_register.year_id AND  date_weeks.id=students_register.date_id AND 
   students_register.matric='".$rows['matricule']."' AND  students_register.year_id='".$ayear."'   AND status='P' GROUP BY students_register.matric
   ") or die(mysqli_error($dbcon));
   			 $total_my=$check_it->num_rows;
			 echo $present=$total_my*2;
		?></td>
        <td><?php echo $tot_hours-$present; ?></td>
      

      </tr>
     <?php } ?>
    </tbody>
  </table>




</page>

   <?php ?>
</body>
</html>




