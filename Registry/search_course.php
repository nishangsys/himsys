<?php



	if(isset($_POST['querystr'])){

		include '../includes/dbc.php';



		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM subjects WHERE title  LIKE '%$querystr%'  or code LIKE '%$querystr%'  GROUP BY code";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['code']." '>".$ldata['title']."   (".$ldata['code'].")</li>

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