<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<p>
  <?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$tel=$_POST['tel'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];

//$df=$con->query("DELETE FROM suppliers where name='$shape' and tel='$tel' and branch='$branch'") or die(mysqli_error($con));




$do=$con->query("INSERT INTO suppliers SET name='$shape',tel='$tel',branch='$branch',town='$cost' ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}

///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM suppliers where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM suppliers WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 echo $sha=$nam['name'];
	  $dis=$nam['tel'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];
	  $cont=$_POST['tel'];
	   $ville=$_POST['cost'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE suppliers SET name='$shape',tel='$cont',town='$ville' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }
 
  
?>
</p>
<p>&nbsp; </p>
              <div class="row">
                       
         <H3 style="text-align:center">SUPPLIERS DASHBOARD</H3 >                <?PHP
						 echo $message;
						?>
                        <form class="form-inline" action="" method="post">
                      
  
  
  
                        
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"></label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Supplier Name:" >
    </div>
  </div>
  
  
  
   
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> :</label>
    <div class="col-sm-10"> 
      <input type="number"  class="form-control" id="pwd" value="<?php echo $dis; ?>" name="tel" required="required" placeholder="Telephone No" >
    </div>
  </div>
 

    
                         <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">:</label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="cost" placeholder="Suppling From" >
    </div>
  </div>  <button type="submit" name="OK" class="btn btn-info">Add Suppliers</button>
  <?php
  if($_GET['update']!=''){
	  echo '<button type="submit" name="Update" class="btn btn-primary">UPDATE</button>';
  }
  ?>
</form>
          
      <?php
	  $do12=$con->query("SELECT * from suppliers where branch='$branch' order by name ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>SUPPLY NAME</th>
        <th>CONTACT</th>
        <th>TOWN</th>
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
        <td><?php echo $name=$df['name']; ?></td>
         <td><?php echo $df['tel']; ?></td>
         <td><?php echo $df['town']; ?></td>


         <td>
            <a href="?suppliers&branch=<?php echo $branch; ?>&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
          <a href="?suppliers&branch=<?php echo $branch; ?>&delete=<?php echo $df['id']; ?>"onclick="return (confirm('Are you sure you wish to delete this item'))">
        <button type="button" class="btn btn-danger">DELETE</button>

</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>