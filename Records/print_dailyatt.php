<?php
include  '../includes/dbc.php';
$date_id=$_POST['date'];
	$prog_id=$_POST['prog'];
	$level_id=$_POST['level'];
	$newDate = date("d-m-Y", strtotime($date_id));
	$aa=$conn->query("SELECT * FROM date_weeks where date='$newDate' ") or die(mysqli_error($conn));
	
		while($bb=$aa->fetch_assoc()){
			 $n_date_id=$bb['id'];
			 $date=$bb['date'];
		}

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
 <?php
 
 $t=$dbcon->query("SELECT * FROM levels,special,students_register WHERE  students_register.dept_id='$prog_id'
 AND students_register.level_id='$level_id' AND 
	levels.id=students_register.level_id AND special.id=students_register.dept_id GROUP BY students_register.dept_id ") or die(mysqli_error($dbcon));
	
			while($rt=$t->fetch_assoc()){
				 
				 $level_name=$rt['levels'];
				$pro_name=$rt['prog_name'];
			}
	?>
    <h3 style="text-align:center"> <?php echo $pro_name; ?> Level <?php echo $level_name; ?> Attendance on <?php echo $dayName=date("l", strtotime($date)); ?> <?php echo $date; ?></h3>
 
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Matricule</th>
		<?php
         $check=$dbcon->query("SELECT * FROM students_register,subjects WHERE students_register.level_id='$level_id' AND 
    students_register.date_id='$n_date_id' AND students_register.dept_id='$prog_id' AND students_register.course_id=subjects.id
     GROUP BY students_register.course_id,students_register.period_id order by  students_register.course_id
   ") or die(mysqli_error($dbcon));
  
    while($ok=$check->fetch_assoc()){
        
        ?>
        <th style="max-width:80px"><?php echo $ok['code']; ?>
        <br><span style="font-size:10px"><?php echo $ok['title']; ?></span> </th>

       <?php } ?>
      </tr>
    </thead>
    <tbody>
    <?php 
	 
	
	
	 $ac=$dbcon->query("SELECT * FROM students,students_register WHERE students_register.level_id='$level_id' AND 
	students_register.date_id='$n_date_id' AND students_register.dept_id='$prog_id' AND students_register.matric=students.matricule
	AND students_register.year_id=students.year_id GROUP BY students_register.matric
	ORDER BY students.fname ") or die(mysqli_error($dbcon));
	$i=1;
	while($rows=$ac->fetch_assoc()){
	
	?>
      <tr>
      <td><?php echo $i++;?></td>
        <td><?php echo $rows['fname']; ?></td>
              <td><?php echo $rows['matricule']; ?></td>
        		<?php
         $check=$dbcon->query("SELECT * FROM students_register,subjects WHERE students_register.level_id='$level_id' AND 
    students_register.date_id='$n_date_id' AND students_register.dept_id='$prog_id' AND students_register.course_id=subjects.id
	AND students_register.matric='".$rows['matricule']."' 
      GROUP BY students_register.course_id,students_register.period_id order by  students_register.course_id
   ") or die(mysqli_error($dbcon));
   
    while($ok=$check->fetch_assoc()){
        
        ?>
        <td><?php $course_id= $ok['course_id']; 
		$check_it=$dbcon->query("SELECT * FROM students_register WHERE 
    students_register.date_id='$n_date_id' AND  students_register.matric='".$rows['matricule']."' AND course_id='$course_id'
	   AND students_register.period_id='".$ok['period_id']."'   
   ") or die(mysqli_error($dbcon));
   			while($see=$check_it->fetch_assoc()){
				 
				 if($see['status']=='P'){
					 echo "&#10003";
				 }
				 else {
				 echo "&#10060";
				 }

			}
		?></td>

       <?php } ?>

      </tr>
     <?php } ?>
    </tbody>
  </table>




</page>

   <?php ?>
</body>
</html>




