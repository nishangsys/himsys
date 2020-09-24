<?php



	if(isset($_POST['querystr'])){

		include '../includes/dbc.php';


		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM special WHERE prog_name LIKE '%$querystr%' GROUP BY prog_name";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['prog_name']." '>".$ldata['prog_name']."  </li>

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