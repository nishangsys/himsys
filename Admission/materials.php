 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>


<script src="js/code_js.js" type="text/javascript"></script>
 
<script src="js/code_js1.js" type="text/javascript"></script>
 
<script type="text/javascript">
$(document).ready(function() { 
	 $('#upload_container').submit(function(e) {	
		if($('#userImage').val()) {
			e.preventDefault();
			$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				target:   '#targetLayer', 
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
				},
				success:function (){
					$('#loader-icon').hide();
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
}); 
</script>
<?php 


	@session_start();
	



					 
if(isset($_POST['submit'] ) )
{ 

 $dept = $_POST ['program'];
$title= $_POST ['title'];
$disc= nl2br($_POST ['disc']);
$ac=$year_id;
$program=$_POST['program'];
$code=$_GET['code'];
$level=$_POST['level'];
$term=$semester;



	$photo=($_FILES['userImage']['name']);	
	$photo_temp=$_FILES['userImage']['tmp_name'];
	move_uploaded_file($photo_temp,"upload/$photo");	
	$dg=$con->query("SELECT * FROM materials where floc='$photo' and prog='$program' and year_id='$year_id' ") or die(mysqli_error($con));
	if(mysqli_num_rows($dg)>0){
		echo $message = '<div class="alert alert-danger">
  <strong>ERROR:</strong>That Filname Already Exist, Rename and Reupload</div>';
  exit;
	}
	else {
		
		$adg=$con->query("INSERT INTO materials SET floc='$photo',fdatein=now(),year_id='$year_id',class='$level',title='$title',prog='$program'") or die(mysqli_error($con));
		
echo "<script>alert('Thank you!'); </script>";
 
$message= "<div class='alert alert-success'>".$photo." Successfully Uploaded. Thank You</div>";
	}

}


?>

 <h3>Uploading Materials for <?php echo $year_id; ?> LEVEL Apllication students</h3>
  <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder=" Title" name="title" required="required">
      </div>
    </div>
  
   
  
    
    
    <div class="form-group">
     <label class="control-label col-sm-2" for="email">Browse File:</label>
      <div class="col-sm-10">
      
      
      <input name="userImage" id="userImage" type="file" class="demoInputBox" />
</div>

<div id="progress-div"><div id="progress-bar"></div></div>
<div id="targetLayer"></div>
      
      
      </div>
    </div>
   
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
      </div>
    </div>
  </form>
  <br /><br />
  
  <div id="loader-icon" style="display:none;"><img src="loading.gif" /></div>
</center>
 <h3 style="background:#6CC; padding:10px 0px">My <?php echo $_GET['notes']; ?> |<?php echo $_GET['code']; ?>| for Level <?php echo $_GET['level']; ?> Uploads</h3>

 <div class="table-responsive">
                                
      <?php $d=$con->query("SELECT * FROM materials where year_id='$year_id'  order by file_id DESC ") or die(mysqli_error($con));
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Title</th>
        <th>Materials?</th> 
        
         <th>Action</th>
        
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['title']; ?></td>
       

        <td><?php echo $bu['fdatein']; ?></td>

       <td> 
         <a href="?materials&delete=<?php echo $bu['file_id']; ?>&progg=<?php echo $_GET['progg']; ?>&material"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete <?php echo $bu['title']; ?>')"  >Delete</button></a>
       
       <?php
	   if(($bu['allow'])==2){
		   echo "<button class='btn btn-primary'>Published</button>" ;
	   }
	   else {
	   ?>
       | <a href="?materials&allows=<?php echo $bu['file_id']; ?>&progg=<?php echo $_GET['progg']; ?>&material"><button class="btn btn-warning" onclick="return confirm('Are you sure you want to publish <?php echo $bu['title']; ?>')"  >Publish </button></a>
       <?php } ?>
       
       </td>
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
  <?php
  if(isset($_GET['delete'])){
	  $id=$_GET['delete'];
	  $d=$con->query("DELETE  FROM materials where file_id='$id' ") or die(mysqli_error($con));
	  echo "<script>alert('Delete Successful')</script>";
	  echo '<meta http-equiv="Refresh" content="0; url= ?materials ">';
  }
  if(isset($_GET['allows'])){
	  $id=$_GET['allows'];
	  $d=$con->query("UPDATE materials  SET allow='2' where file_id='$id' ") or die(mysqli_error($con));
	  echo "<script>alert('Publishing Successful')</script>";
	     echo '<meta http-equiv="Refresh" content="0; url= ?materialSs ">';
  }
  ?>
  