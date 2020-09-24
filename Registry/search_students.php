<?php



	if(isset($_POST['querystr'])){

		include '../includes/dbc.php';

		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM students WHERE fname  LIKE '%$querystr%'  or matricule LIKE '%$querystr%'  GROUP BY matricule ORDER BY fname DESC LIMIT 10";

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

					<li class='list-gpfrm-list'>No found data matches Registry</li>

				";

			}

		}

 

		echo json_encode($results);

	}

?>