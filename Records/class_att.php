<script type="text/javascript" src="script/functions.js"></script>


<?php


	 $prog_id=$_POST['country'];
	$level_id=$_POST['state'];
	 $subject_id=$_POST['city'];
	 $year_id=$_POST['ayear'];
	 $date_id=$_POST['date'];
	 
	  $month=$_POST['month'];
	 $year=$_POST['year'];
	 
	 
	  $period_id=$_POST['period'];
	 
	 $saa=$conn->query("SELECT * FROM semesters,date_weeks where date_weeks.id='$date_id' and semesters.s_num=date_weeks.sem ") or die(mysqli_error($conn));
	$i=1;
		while($bbs=$saa->fetch_assoc()){
			$date=$bbs['date'];
		}
	$aa=$dbcon->query("SELECT * FROM students WHERE level_id='$level_id' AND 
	year_id='$year_id' AND dept_id='$prog_id' GROUP BY matricule ") or die(mysqli_error($dbcon));
	$hn=$aa->num_rows;
		
		 while($rows=$aa->fetch_assoc()){
			 $matric=$rows['matricule'];
			 
			 $ac=$dbcon->query("SELECT * FROM students_register WHERE level_id='$level_id' AND date_id='$date_id' AND 
	year_id='$year_id' AND matric='".$matric."' and  course_id='$subject_id' AND period_id='$period_id'  ") or die(mysqli_error($dbcon));
	     $hmm=$ac->num_rows;
		 	if($hmm<1){
				
				
				 $ok=$dbcon->query("INSERT INTO students_register SET level_id='$level_id',period_id='$period_id',
	year_id='$year_id' ,matric='".$matric."',course_id='$subject_id',date_id='$date_id',dept_id='$prog_id' ,month='$month',year='$year' ") or die(mysqli_error($dbcon));
	
			}
			else {
				
			}
			
			
			
		 }
		$t=$dbcon->query("SELECT * FROM subjects,levels,special WHERE subjects.id='$subject_id' AND 
	levels.id=subjects.level_id AND special.id=subjects.prog_id ") or die(mysqli_error($dbcon));
	 $t->num_rows;
			while($rt=$t->fetch_assoc()){
				 $course_title=$rt['title'];
				  $course_code=$rt['code'];
				 $level_name=$rt['levels'];
				 $pro_name=$rt['prog_name'];
			}
	?>
    <h3><?php echo $course_title; ?>(<?php echo $course_code; ?>) for <?php echo $pro_name; ?> Level <?php echo $level_name; ?> Attendance on <?php echo $date; ?></h3>
	<table class="table table-condensed table-hover table-striped bootgrid-table">
		<thead>
		  <tr>
          <th>S/N</th>			
			<th>Name</th>
			<th>Matricule</th>
            <th>Date</th>
			<th>Absent/Present</th>				
		  </tr>
		</thead>
		<tbody>
		 <?php
		 	 $ac=$dbcon->query("SELECT * FROM students,students_register WHERE  date_id='$date_id' AND students_register.level_id='$level_id' AND students_register.period_id='$period_id' AND 
	students_register.year_id='$year_id' AND students_register.course_id='$subject_id' AND students_register.matric=students.matricule
	AND students_register.year_id=students.year_id
	ORDER BY students.fname ") or die(mysqli_error($dbcon));
	$i=1;
		 while($rows=$ac->fetch_assoc()){
			
		 ?>
			  <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $rows['fname']; ?></td>
              <td><?php echo $rows['matricule']; ?></td>
              <td><?php echo $date; ?></td>			  
				  <td contenteditable="true" data-old_value="<?php echo $rows["status"]; ?>" onBlur="saveInlineEdit(this,'status','<?php echo $rows["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $rows["status"]; ?></td>
                  <!--
				  <td contenteditable="true" data-old_value="<?php echo $rows["status"]; ?>"  onBlur="saveInlineEdit(this,'employee_salary','<?php echo $rows["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $rows["status"]; ?></td>
				  <td contenteditable="true" data-old_value="<?php echo $rows["employee_age"]; ?>"  onBlur="saveInlineEdit(this,'employee_age','<?php echo $rows["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $rows["employee_age"]; ?></td>
                  --->
			  </tr>
		<?php
		}
		?>
		</tbody>
	</table>		  

