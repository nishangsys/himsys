<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

  <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      ADD MAIN CLASS TO EXPENDITURE   <span style="color:#ff0; font-weight:bold">FOR  <?php echo $year_id; ?>
  </span><div style="clear:both"></div></div>
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$code=$_POST['code'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];
$sp=$_POST['sp'];
//$df=$con->query("DELETE FROM main_classes where name='$shape' and code='$code' ") or die(mysqli_error($con));
$o=$con->query("SELECT * FROM main_classes WHERE name='$shape' and code='$code' ") or die(mysqli_error($con));
while($cc=$o->fetch_assoc()){
	$av=$cc['qty'];
	$nqty=$av+$qty;
}
if(mysqli_num_rows($o)>0){
	$dfGu=$con->query("UPDATE main_classes SET qty='$nqty',cost='$cost' WHERE name='$shape' AND code='$code'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";
}
else {



$do=$con->query("INSERT INTO main_classes SET name='$shape',code='$code'  ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}
}
///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM main_classes where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM main_classes WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 echo $sha=$nam['name'];
	  $dis=$nam['code'];
	  $cp=$nam['cost'];
	  $dis=$nam['code'];
	  $sp=$nam['sp'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];;
	  $Dis=$_POST['code'];
	   $C=$_POST['cost'];
	   $S=$_POST['sp'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE main_classes SET name='$shape',code='$Dis' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }
 
  
?>
<DIV style="clear:both"></DIV>
        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>



                        <form class="form-inline" action="" method="post">
                                       
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"></label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Product:" style="width:300PX" >
    </div>
  </div>
  
  
  
   
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> </label>
    <div class="col-sm-10"> 
      <input type="text"  class="form-control" id="pwd" value="<?php echo $dis; ?>" name="code"  placeholder="Code:" >
    </div>
  </div>
 

  
  
  
  
  
  
  
  <button type="submit" name="OK" class="btn btn-info">Submit</button>
  
  <?php
  if($_GET['update']!=''){
	  echo '<button type="submit" name="Update" class="btn btn-primary">UPDATE</button>';
  }
  ?>
</form>
          
      <?php
	  $do12=$con->query("SELECT * from main_classes  order by name ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>Code</th>
        
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
        
         <td><?php echo $df['code']; ?></td>
        

         <td>
            <a href="?add&branch=<?php echo $branch; ?>&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
          <a href="?add&branch=<?php echo $branch; ?>&delete=<?php echo $df['id']; ?>"onclick="return (confirm('Are you sure you wish to delete this item'))">
        <button type="button" class="btn btn-danger">DELETE</button>

</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>