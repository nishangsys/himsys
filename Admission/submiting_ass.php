<?php

if(isset($_POST['submit'])!=""){
	$title=$_POST['title'];
	$yname=$_POST['names'];
	$matric=$_POST['matric'];
	$year_id=$_POST['year_id'];
	$code=$_POST['code'];
	$date=date('d-m-Y h:i:s');
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"upload/".$name);
$query=$con->query("insert into upload_ass set name='$name',code='$code',mat='$matric',date=now(),yourname='$yname',year_id='$year_id',type='$title' ")or 
die(mysqli_error($con));

$message='<div class="alert alert-danger" style="font-size:16px;">
  <strong>Info!</strong> Assignment Successfully Submitted. Thank You.
</div>';
}
?>
 
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<h3>Submitting
        <?php
		
		echo $subject=$_GET['subj'];
		?>
        ( <?php
		echo $code=$_GET['submit_ass'];
		?>)
       Assignment
        
        </h3>
        <br />
        <div class="alert alert-warning">
  <strong>Warning!</strong> All Documents to be uploaded must be save as your Name and subject Code e.g Isaac NUR 205.
</div>

    

<div class="panel-body">
                  
     <?php echo $message; ?>             
                  
                   <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" >Assignment Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Title of assignment" required="required" name="title">
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email" name="title">Upload File:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="email" placeholder="Enter email" name="photo" required="required" >
      </div>
    </div>
    
          <input type="hidden" class="form-control" id="email"  name="names" value="<?php echo $names; ?>" >
            <input type="hidden" class="form-control" id="email"  name="matric" value="<?php echo $user; ?>" >
            
             <input type="hidden" class="form-control" id="email"  name="year_id" value="<?php echo $year_id; ?>" >
                  <input type="hidden" class="form-control" id="email"  name="code" value="<?php echo $_GET['subj']; ?>" >
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>



 <table class="table table-bordered">
  <?php
$query=$con->query("select * from upload_ass where mat='$user' and code='".$_GET['subj']."' order by id desc") or die(mysqli_error($con));
			$i=1;
		?>
    <thead>
      <tr>
      <th>#</th>
        <th>Title</th>
        <th>Date Uploaded</th>
        <th>Download</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
			
			while($row=$query->fetch_assoc()){
				
			?>
      <tr>
       <td><?php echo $i++; ?></td>			
	<td><?php echo $row['type'] ;?>
	</td>
     <td>
	<?php echo $row['date'] ;?>
	</td>
     <td><a href="download.php?filename=<?php echo $row['name']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success" >Download</button></a></td>
	<td>        
                	
  <a href="?submit_ass=<?php echo $_GET['submit_ass']; ?>&year_id=<?php echo $_GET['year_id']; ?>&subj=<?php echo $_GET['subj']; ?>&id=<?php echo $row['id'];?>" ><button class="btn btn-danger" onclick="return confirm('Are You sure')">Delete this File</button></a>	
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
   <?php
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$submit_ass= $_GET['submit_ass'];
			$year_id=$_GET['year_id'];
			$subj=$_GET['subj'];
			$d=$con->query("DELETE FROM upload_ass where id='$id' limit 1") or die(mysqli_error($con));
			echo "<script>alert('File successfully deleted')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=index.php?submit_ass='.$submit_ass.'&year_id='.$year_id.'&subj='.$subj.'">';
	 
		}
		
		?>
			

</div>
        </div>
        </div>
     