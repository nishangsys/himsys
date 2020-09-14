
<?php
	//include connection file 
include '../../includes/dbc.php';	
	//define index of column
	$columns = array(
		
		2 => 'fees',
		3 => 'reg',
		4 => 'others',
		5 => 'tshirt',
		6 => 'adminp',
		7 => 'sunion'
	);
	$error = false;
	$colVal = '';
	$colIndex = $rowId = 0;
	
	$msg = array('status' => !$error, 'msg' => 'Failed! updation in mysql');

	if(isset($_POST)){
    if(isset($_POST['val']) && !empty($_POST['val']) && !$error) {
      $colVal = $_POST['val'];
      $error = false;
      
    } else {
      $error = true;
    }
    if(isset($_POST['index']) && $_POST['index'] >= 0 &&  !$error) {
      $colIndex = $_POST['index'];
      $error = false;
    } else {
      $error = true;
    }
    if(isset($_POST['id']) && $_POST['id'] > 0 && !$error) {
      $rowId = $_POST['id'];
	   $rowName = $_POST['name'];
      $error = false;
    } else {
      $error = true;
    }
	
	if(!$error) {
			$sql = "UPDATE settings SET ".$columns[$colIndex]." = '".$colVal."' WHERE id='".$rowId."'";
			$status = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
			
			
			
			
			$msg = array('error' => $error, 'msg' => 'Success! Records Successfully Updated');
	} else {
		$msg = array('error' => $error, 'msg' => 'Failed! Records Not Successfully Updated');
	}
	}
	// send data as json format
	echo json_encode($msg);
	
?>
	