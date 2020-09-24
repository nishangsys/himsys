<?php

    



session_start();
	//connection
	include '../includes/dbc.php';
	
	$ssql = $conn->query("SELECT * from levels,special,years,students  where  students.level_id=levels.id and students.dept_id='".$_GET['prog_id']."' and students.year_id='".$_GET['year_id']."' and students.dept_id=special.id  AND  level_id='".$_GET['level_id']."' AND students.year_id=years.id GROUP BY students.year_id order by students.fname
	") or die(mysqli_error($conn));
	while($rows=$ssql->fetch_assoc()){
		 $dept=$rows['prog_name'];
		 $level=$rows['levels'];
		$ayear=$rows['year_name'];
	}
	
	$sql = "SELECT * from levels,special,years,students  where  students.level_id=levels.id and students.dept_id='".$_GET['prog_id']."' and students.year_id='".$_GET['year_id']."' and students.dept_id=special.id  AND  level_id='".$_GET['level_id']."' AND students.year_id=years.id GROUP BY students.matricule order by students.fname	
	";
	$query = $conn->query($sql);
	
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$filename = " $dept Level $level Class List for $ayear ".".csv";;

		$f = fopen('php://memory', 'w');

		$headers = array( 'Name', 'Matricule' );
    	fputcsv($f, $headers, $delimiter);

    	while($row = $query->fetch_array()){
	        $lines = array($row['fname'], $row['matricule']);
	        fputcsv($f, $lines, $delimiter);
	    }
	    
	    fseek($f, 0);
	    header('Content-Type: text/csv');
	    header('Content-Disposition: attachment; filename="' . $filename . '";');
	    fpassthru($f);
	    exit;
	}
	else{
		$_SESSION['message'] = 'Cannot export. Data empty';
		header('location:index.php');
	}
	
	
	






?>