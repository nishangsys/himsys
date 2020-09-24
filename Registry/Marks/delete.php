	<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>

<?php
	require_once 'connection.php';
	$gpa = $_POST['gpa'];
		$code=$_GET['code'];
 $school=$_GET['school'];
  $certi=$_GET['cer'];
	if(ISSET($_POST['name'])){	
		
	$_POST = array_map("ucwords", $_POST);
	
	
		$post = addslashes($_POST['post']);
		$name = $_POST['name'];
		$gpa = $_POST['gpa'];
		$code=$_GET['matric'];
$school=$_GET['school'];
  $certi=$_GET['cer'];
		//$conn->query("INSERT INTO `mycerti` (`subject`, `grade`,`gpa`) VALUES( '$name','$post','$gpa')") or die(mysqli_error());
	
		$conn->query("DELETE FROM `mycerti` WHERE  subject='$name' AND  grade='$post' AND gpa='$gpa' AND matric='$code' AND certia='$certi' AND certib='$school' ") or die(mysqli_error($conn));
		
		$conn->query("INSERT INTO `mycerti` set subject='$name', grade='$post',gpa='$gpa',matric='$code',certia='$certi',certib='$school' ") or die(mysqli_error($conn));
			$conn->query("DELETE FROM `mycerti` WHERE   certia='$certi' AND certib='$school' AND subject='' ") or die(mysqli_error($conn));
		
		
	}
	
?>		
<?php
	
		 $code;
		$q_post = $conn->query("SELECT * FROM `mycerti` WHERE matric='".$_GET['mat']."' ORDER BY `id` ASC") or die(mysqli_error($conn));
		
?>	
		<div class = "col-md-12 content" style = "word-wrap:break-word; background-color:#fff; padding:20px;">



  <table class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th style="width:70%">Subject</th>
                <th style="width:70%">CERTICATE</th>
                <th style="width:70%">School</th>

        <th style="width:30%">Grade/GPA</th>
        
        <th>ActioN</th>
      </tr>
    </thead>
    <tbody>
    <?php while($rows  = $q_post->fetch_array()){ ?>
      <tr>
        <td><?php echo $rows['subject']; ?></td>
        <td> <?php echo $rows['certia']; ?></td>
        <td><?php echo $rows['certib']; ?></td>
           <td><?php echo $rows['grade']; ?><?php echo $rows['gpa']; ?></td>
              <td><a href="?code=<?PHP echo $_GET['code']; ?>&area=0&del=<?php echo $rows['id']; ?>">DELETE</a></td>
      </tr>
    <?php } ?> 
    </tbody>
  </table>
 <?php
  if(isset($_GET['del'])){
	  $id=$_GET['del'];
	  $df=$conn->query("DELETE FROM mycerti where id='$id' ") or die(mysqli_error($conn));
	  echo '<meta http-equiv="Refresh" content="0; url=?code='.$_GET['code'].'&area=0&mat='.$_GET['mat'].'">';  
  }
  ?>
  


  

