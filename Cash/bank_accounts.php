

   <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               ADDING A  <?php echo $client; ?> BANK ACCOUNT <span style="color:#f00; font-weight:bold">
                            </div>
  
  
  
  
  
  
  
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$acc_num=$_POST['acc_num'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];
$sp=$_POST['sp'];
//$df=$con->query("DELETE FROM our_accounts where name='$shape' and acc_num='$acc_num' ") or die(mysqli_error($con));
$o=$con->query("SELECT * FROM our_accounts WHERE name='$shape' and acc_num='$acc_num' ") or die(mysqli_error($con));
while($cc=$o->fetch_assoc()){
	$av=$cc['qty'];
	$nqty=$av+$qty;
}
if(mysqli_num_rows($o)>0){
	$dfGu=$con->query("UPDATE our_accounts SET qty='$nqty',cost='$cost' WHERE name='$shape' AND acc_num='$acc_num'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";
}
else {



$do=$con->query("INSERT INTO our_accounts SET name='$shape',acc_num='$acc_num'  ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}
}
///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM our_accounts where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  if(isset($_GET['suspend'])){
	 $id=$_GET['suspend'];
	  $dfG=$con->query("UPDATE our_accounts SET status='1' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Completed. Thank You</div>";

  }
  
    if(isset($_GET['close'])){
	echo $id=$_GET['close'];
	  $dfG=$con->query("UPDATE our_accounts SET status='3' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Completed. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM our_accounts WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	  $sha=$nam['name'];
	  $dis=$nam['acc_num'];
	  $cp=$nam['cost'];
	  $dis=$nam['acc_num'];
	  $sp=$nam['sp'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];;
	  $Dis=$_POST['acc_num'];
	   $C=$_POST['cost'];
	   $S=$_POST['sp'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE our_accounts SET name='$shape',acc_num='$Dis' where id='$id'") or die(mysqli_error($con));
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
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Class Name:" style="width:300PX" >
    </div>
  </div>
  
  
  
   
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> </label>
    <div class="col-sm-10"> 
      <input type="text"  class="form-control" id="pwd" value="<?php echo $dis; ?>" name="acc_num"  placeholder="Acc  Number:" >
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
	  $do12=$con->query("SELECT * from our_accounts WHERE status='' order by name ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>Acc  Number</th>
        
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
        
         <td><?php echo $df['acc_num']; ?></td>
        

         <td>
            <a href="?bank_accounts&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
          <a href="?bank_accounts&suspend=<?php echo $df['id']; ?>"onclick="return (confirm('Are you sure you want to Suspend this account'))">
        <button type="button" class="btn btn-warning" >Suspend Account</button>

</a>|   <a href="?bank_accounts&delete=<?php echo $df['id']; ?>"onclick="return (confirm('Are you sure you want to Close this account'))">
        <button type="button" class="btn btn-danger" >Close Account</button>

</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>