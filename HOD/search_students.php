<?php



	if(isset($_POST['querystr'])){

		$conn = new mysqli('localhost', 'nishang', 'google1234', '2019_university');



		$results = array('error' => false, 'data' => '');
		$ayear=$_GET['ayear'];
		$dept=$_GET['dept'];
		$level=$_GET['level'];
 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM courses WHERE fname  LIKE '%$querystr%'  or matricule LIKE '%$querystr%' and departmet='$dept' and levels='$level' and db1='$ayear' GROUP BY fname ORDER BY fname DESC LIMIT 10";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['matricule']." '>".$ldata['fname']."   (".$ldata['matricule'].")</li>

					";

				}

			}

			else{

				$results['data'] = "

					<li class='list-gpfrm-list'>No found data matches Records</li>

				";

			}

		}

 

		echo json_encode($results);

	}

?>