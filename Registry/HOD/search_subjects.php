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

			$sql = "SELECT * FROM course WHERE course_code  LIKE '%$querystr%'  or title LIKE '%$querystr%'   GROUP BY course_code ORDER BY course_code DESC LIMIT 5";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-fullname='".$ldata['course_code']." '>".$ldata['title']."   (".$ldata['course_code'].")</li>

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