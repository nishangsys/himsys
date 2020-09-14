<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$disc=$_POST['disc'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];

  
	  $dfGu=$con->query("UPDATE rush SET year='$shape'  where roll='1'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }


//$df=$con->query("DELETE FROM rush where name='$shape' and disc='$disc' and branch='$branch'") or die(mysqli_error($con));

  /////////////for updates
  $doU=$con->query("SELECT * FROM rush WHERE roll='1' ") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 $sha=$nam['year'];
	  

 
	
  
?>

 
              <div class="row">
               <div class="col-sm-10"> 
             <h2 style="text-align:center">Setting Up Current Academic Year <span style="color:#090"></h2>          
                        <?PHP
						 echo $message;
						?>
                       <form class="form-inline" action="" method="post">
                      
  
  
  
                        
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"></label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Acdemic Year:" >
    </div>
  </div>
  
  
  
   
  
  
   <button type="submit" name="OK" class="btn btn-primary">Set as Academic Year</button>
  <?php
  if($_GET['update']!=''){
	  echo '<button type="submit" name="Update" class="btn btn-primary">UPDATE</button>';
  }
  ?>
</form>
          
      <?php
	  $do12=$con->query("SELECT * from rush where  roll='1'") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>ACADEMIC YEAR</th>
        
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$do12->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['year']; ?></td>
      


         <td>
            <a href="?academic_year&dept=<?php echo $_GET['dept']; ?>&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
      

</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
    }
  
  ?>
       
</div>
</div>