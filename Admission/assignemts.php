<?php

if(isset($_POST['submit'])!=""){
	$title=$_POST['title'];
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"upload/".$name);
$query=$con->query("insert into upload(name,title)values('$mat','$title')");
if($query){
header("location:index.php");
}
else{
die(mysqli_error($con));
}
}
?>
<html>
<head>
<title></title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
<body>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1><p>Upload Your Documents</p></h1>	
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
            <tr>
            <td>
            
					<input type="text" name="title" id="title" required /></td>
            <td>
            
					<input type="file" name="photo" id="photo" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
                    </tr>
			</form>
		<br />
		<br />
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload where name='$mat' order by id desc");
			while($row=$query->fetch_assoc()){
				$name=$row['name'];
				$title=$row['title'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $title ;?>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $row['id'] ?>"><img src="../form/cancel.png"></a>
				</td>
			</tr>
            
             <?php
		if(isset($_GET['id'])){
			ECHO $id=$_GET['id'];
			$d=$conn->query("DELETE FROM upload where id='$id' limit 1");
			echo "<script>alert('File successfully deleted')</script>";
		}
		
		?>
			<?php }?>
		</table>
       
	</div>
	</div>
	</div>
</body>
</html>