<?PHP

session_start();
	//connection
	include '../includes/dbc.php';
	
	$ssql = $conn->query("SELECT * FROM students,levels,special,years WHERE students.dept_id='".$_GET['id']."' 
	AND students.level_id='".$_GET['level']."' AND students.year_id='".$_GET['ayear']."'
	AND students.level_id=levels.id AND students.dept_id=special.id	and students.year_id=years.id 
	") or die(mysqli_error($conn));
	while($rows=$ssql->fetch_assoc()){
		 $dept=$rows['prog_name'];
		 $level=$rows['levels'];
		$ayear=$rows['year_name'];
	}
	
	$sql = "SELECT * FROM students,levels,special WHERE students.dept_id='".$_GET['id']."' 
	AND students.level_id='".$_GET['level']."' AND students.year_id='".$_GET['ayear']."'
	AND students.level_id=levels.id AND students.dept_id=special.id	
	";
	$query = $conn->query($sql);
	
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$filename = " $dept Level $level for $ayear ".".csv";;

		$f = fopen('php://memory', 'w');

		$headers = array( 'Name', 'Matricule', 'Ca Marks');
    	fputcsv($f, $headers, $delimiter);

    	while($row = $query->fetch_array()){
	        $lines = array($row['fname'], $row['matricule'],'');
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

/*

	$select=$conn->query("SELECT * from levels,special,years,students  where students.dept_id='".$_GET['id']."' AND year_id='".$_GET['ayear']."' AND students.level_id='".$GET['level']."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		echo $dept=$rows['prog_name'];
		echo $level=$rows['levels'];
		echo $ayear=$rows['year_name'];
	}
 
	$sql = "
	SELECT * from levels,special,years,students  where students.dept_id='".$_GET['id']."' AND year_id='".$_GET['ayear']."' AND students.level_id='".$GET['level']."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id
	";
	$query = $conn->query($sql);
 
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		
		$filename =" $dept Level $level for $ayear ".".csv";
 
		$f = fopen('php://memory', 'w');
 
		$headers = array( 'Name', 'Matricule');
		;
    	fputcsv($f, $headers, $delimiter);
 
    	while($row = $query->fetch_array()){
	        $lines = array( $row['fname'], $row['matricule']);
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
	
	*/
	
	?>