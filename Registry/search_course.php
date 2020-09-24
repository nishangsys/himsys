<?php



	if(isset($_POST['querystr'])){

		$conn = new mysqli('localhost', 'nishang', 'google1234', '2019_university');



		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM subject WHERE title  LIKE '%$querystr%'  or subject LIKE '%$querystr%'  GROUP BY subject";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['subject']." '>".$ldata['title']."   (".$ldata['subject'].")</li>

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