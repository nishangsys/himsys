

   <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               ADDING INCOME CLASSES   <span style="color:#f00; font-weight:bold">FOR  <?php echo $ayear; ?> Academic Year
                            </div>
  
  
  
  
  
  
  
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$code=$_POST['code'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];
$sp=$_POST['sp'];
//$df=$con->query("DELETE FROM income_classes where name='$shape' and code='$code' ") or die(mysqli_error($con));
$o=$con->query("SELECT * FROM income_classes WHERE name='$shape' and code='$code' ") or die(mysqli_error($con));
while($cc=$o->fetch_assoc()){
	$av=$cc['qty'];
	$nqty=$av+$qty;
}
if(mysqli_num_rows($o)>0){
	$dfGu=$con->query("UPDATE income_classes SET qty='$nqty',cost='$cost' WHERE name='$shape' AND code='$code'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";
}
else {



$do=$con->query("INSERT INTO income_classes SET name='$shape',code='$code'  ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}
}
///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM income_classes where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM income_classes WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
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
	  $dfGu=$con->query("UPDATE income_classes SET name='$shape',code='$Dis' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }
 
  
?>
<DIV style="clear:both"></DIV>
        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>



   
      <?php
	  $do12=$con->query("SELECT * from daily where rec>0 group by reason,year   order by reason ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>Finance Year</th>
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
        <td><?php echo $name=$df['reason']; ?></td>
        
       
        
           <td><?php echo $ayear; ?></td>
       

         <td>
     |   <a href="A4.php?class=<?php echo $name; ?>&year_id=<?php echo $ayear; ?>" target="new">
        <button type="button" class="btn btn-danger">Print</button>    
        

</a> </td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>