

<html>
<head>
<title>PHP Login :: Free Registration/Signup Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="../js/jquery.validate.js"></script>

  <script>
  $(document).ready(function(){
    $.validator.addMethod("username", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Username must contain only letters, numbers, or underscore.");

    $("#regForm").validate();
  });
  </script>


</head>
<br />
     
    
         
       
         <form action="" method="post" name="regForm" class="form-horizontal" id="regForm">
         
         
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Full Name" name="name" required>
      </div>
    </div>
      
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Username" name="dept" value="<?php echo $_GET['dept']; ?>" required readonly="readonly">
      </div>
    </div>
 
    
     
    
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Regsiter Staff</button>
      </div>
   
      </form>
     
	

</div>
</div>

 <?php
   if(isset($_POST['submit'])){
	   $date=date('d-m-Y');
	   $name=$_POST['name'];
	   $dept=$_POST['dept'];
	   
		   $mk=$con->query("INSERT INTO names set name='$name',dept='$dept',date='$date',sector='others' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?confirm&dept='.$dept.'">';
	   
   }

   ?>
