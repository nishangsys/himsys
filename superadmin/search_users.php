<?php



	if(isset($_POST['querystr'])){

			include '../includes/dbc.php';

		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM users  WHERE user_name  LIKE '%$querystr%'  or full_name LIKE '%$querystr%'  GROUP BY full_name ORDER BY full_name DESC LIMIT 10";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['full_name']." '>".$ldata['full_name']."   </li>

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