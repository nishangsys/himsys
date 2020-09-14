<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

                
 <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     

<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>

</head>

<body>
<?php
$namess=$_GET['name'];
if(empty($namess) || $namess=''){
	 echo "<div class='alert alert-danger'>Choose an Expenditure Main Class to add</div>";
}
else{
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      REGISTERING HEADS OF   <span style="color:#ff0; font-weight:bold"><?PHP echo $supp=$_GET['name']; ?> with Code <?php echo $excode=$_GET['code'];; ?>
  
        
       <a href="print_distr.php?name=<?php echo $supp; ?>&branch=<?php echo $branch; ?>&date=<?php echo date('d-m-Y'); ?>" target="_blank">  <button type="button" class="btn btn-warning" style="color:#006" >Print Copy</button>   </a> 
      </span>
      </div>      
             
<div style="clear:both"></div>

<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$code=$_POST['code'];
$budget=$_POST['budget'];
$qty=$_POST['qty'];


$sp=$_POST['sp'];
//$df=$con->query("DELETE FROM exp_classes where name='$shape' and code='$code' ") or die(mysqli_error($con));
$o=$con->query("SELECT * FROM exp_classes WHERE name='$shape' and code='$code' ") or die(mysqli_error($con));



$do=$con->query("INSERT INTO exp_classes SET name='$shape',code='$code',budget='$budget',year_id='$year_id',heads='$supp',excode='$excode',budget1='$budget' ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}

///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM exp_classes where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

 echo '<meta http-equiv="Refresh" content="0; url=?add_class&name='.$_GET['name'].'&code='.$_GET['code'].'">';
  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM exp_classes WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 echo $sha=$nam['name'];
	  $dis=$nam['code'];
	  $cp=$nam['budget'];
	  $dis=$nam['code'];
	  $sp=$nam['sp'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];;
	  $Dis=$_POST['code'];
	   $C=$_POST['budget'];
	   $S=$_POST['sp'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE exp_classes SET name='$shape',code='$Dis',budget='$C',budget1='$C' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";
echo '<meta http-equiv="Refresh" content="0; url=?add_class&name='.$_GET['name'].'&code='.$_GET['code'].'">';
  }
 
  
?>

        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>



                        <form class="form-inline" action="" method="post">
                        
                        
  
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> Code:</label>
    <div class="col-sm-10"> 
      <input type="number"  class="form-control" id="pwd" value="<?php echo $dis; ?>" name="code"  placeholder="Code:" style="padding:0px 20px; width:180px">
    </div>
  </div>
 
                                       
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Name</label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Product:"  >
    </div>
  </div>
  
  
  
   


   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> Amount</label>
    <div class="col-sm-10"> 
      <input type="text"  class="form-control" id="pwd" value="<?php echo $cp; ?>" name="budget" required="required" placeholder="Budget :" style=" width:150px">
    </div>
  </div>
 





    
  
  
  
  
  
  
  
  
  <button type="submit" name="OK" class="btn btn-info">Submit</button>
  
  <?php
  if($_GET['update']!=''){
	  echo '<button type="submit" name="Update" class="btn btn-primary">UPDATE</button>';
  }
  ?>
</form>	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Code</th>
                          <th style="text-align:center;">Budget Head</th>
                                    <th style="text-align:center;">Allocated Budget</th>
                                    
                                        <th style="text-align:center;">Expend. Head</th>


  <th style="text-align:center;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
								<?php
								$date=date('d-m-Y');
								$supp;
								
								$result=$con->query ("select * from exp_classes where year_id='$year_id' order by name" ) or die (mysqli_error($con));
								$num=1;
								while ($row= $result->fetch_assoc () ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:120px;"> <?php echo $row ['code']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:120px;"> <?php echo number_format($row ['budget']); ?></td>
                                    
                                    	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['heads']; ?></td>
                                    
              
         <td style="text-align:center; word-break:break-all; width:200px;"> 
            <a href="?add_class&branch=<?php echo $branch; ?>&update=<?php echo $row['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
          <a href="?add_class&name=<?php echo $_GET['name']; ?>&delete=<?php echo $row['id']; ?>&code=<?php echo $_GET['code']; ?>" onclick="return (confirm('Are you sure you wish to delete this item'))">
        <button type="button" class="btn btn-danger">DELETE</button>

</a></td>		
								
                             
					</tr>		
                           
								
								<?php } }?>
                              <tbody>
                        		  
                           
                        </table>


          
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

       
</div>