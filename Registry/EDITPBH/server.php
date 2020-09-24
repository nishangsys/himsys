
<?php
	//include connection file 
include '../../includes/dbc.php';	
	//define index of column
	$columns = array(
		
		1 => 'levels',
		2 => 'sem',
		3 => 'ayear',
		4 => 'exam',
		5 => 'mhnd'
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
      $error = false;
    } else {
      $error = true;
    }
	
	if(!$error) {
			$sql = "UPDATE  my_marks SET ".$columns[$colIndex]." = '".$colVal."' WHERE roll='".$rowId."'";
			$status = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			$msg = array('error' => $error, 'msg' => 'Success! Registry Successfully Updated');
	} else {
		//$msg = array('error' => $error, 'msg' => 'Failed! Registry Not Successfully Updated');
	}
	}
	// send data as json format
	echo json_encode($msg);
	
?>
	