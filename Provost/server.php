<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'nishang', 'google1234' , 'university');

	$sql = $conn->prepare("SELECT * FROM students WHERE fname or matricule LIKE ?  ");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["fname"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

