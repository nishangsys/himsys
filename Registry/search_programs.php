<?php



	if(isset($_POST['querystr'])){

		$conn = new mysqli('localhost', 'nishang', 'google1234', 'school_finance');



		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM special WHERE certi LIKE '%$querystr%'   GROUP BY certi ORDER BY certi DESC LIMIT 10";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['certi']." '>".$ldata['certi']."    </li>

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