<?PHP

session_start();
	//connection
	include '../includes/dbc.php';
	
	$a =$conn->query("SELECT * from courses where roll='".$_GET['id']."' ") or die(mysqli_error($conn));
while($dd=$a->fetch_assoc()){
 $dept=$dd['departmet'];
 
  
}

 
	$sql = "SELECT fname,matricule FROM courses WHERE departmet='".$dept."' and db1='".$_GET['ayear']."' and levels='".$_GET['level']."' order by fname";
	$query = $conn->query($sql);
 
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$level=$_GET['level'];
		$ayear=$_GET['ayear'];
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
	
	?>