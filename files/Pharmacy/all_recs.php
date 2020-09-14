<?php
include 'includes/dbc.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
 <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
   
	<script type="text/javascript" src="../js/bootstrap.min.js"> bootstrap.min.js</script>
	<script type="text/javascript" src="../js/jquery.min.js"> jquery.min.js</script>
    
</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      SALES REPORTS FOR TODAY   <span style="color:#ff0; font-weight:bold"><?PHP echo $supp=$_GET['distributing']; ?> TODAY <?php echo date('d-m-Y'); ?>
  
        
       <a href="print_distr.php?name=<?php echo $supp; ?>&branch=<?php echo $branch; ?>&date=<?php echo date('d-m-Y'); ?>" target="_blank">  <button type="button" class="btn btn-warning" style="color:#006" >Print Copy</button>   </a> 
      </span>
      </div>             
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	
                    
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      SALES REPORTS FOR TODAY   <span style="color:#ff0; font-weight:bold"><?PHP echo $supp=$_GET['distributing']; ?> TODAY <?php echo date('d-m-Y'); ?>
  
        
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



$do=$con->query("INSERT INTO exp_classes SET name='$shape',code='$code',budget='$budget',year_id='$ayear'  ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}

///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM exp_classes where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

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
	  $dfGu=$con->query("UPDATE exp_classes SET name='$shape',code='$Dis',budget='$C' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

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
      <input type="number"  class="form-control" id="pwd" value="<?php echo $dis; ?>" name="code" required="required" placeholder="Code:" style="padding:20px 20px; width:180px">
    </div>
  </div>
 
                                       
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Name</label>
    <div class="col-sm-10"> 
      <input type="text" required="required" class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Product:" style="padding:20px 20px" >
    </div>
  </div>
  
  
  
   


   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> Amount</label>
    <div class="col-sm-10"> 
      <input type="text"  class="form-control" id="pwd" value="<?php echo $ayear; ?>" name="budget" required="required" placeholder="Budget :" style="padding:20px 20px; width:150px">
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

                              <th style="text-align:center;">Customer's Name</th>
                          <th style="text-align:center;">Qty Receive</th>
                                    <th style="text-align:center;">Total Revenue</th>
                                          <th style="text-align:center;">Total Owed</th>                                    <th style="text-align:center;">Recieve on</th>
                                

                                </tr>
                            </thead>
                            <tbody>
								<?php
								$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select SUM(daily.owed),daily.date,SUM(daily.rec),SUM(daily.price*daily.qty),SUM(daily.qty),SUM(daily.owed),names.name,SUM(daily.rec) from names,daily where names.id=daily.cust_id and daily.date='$date' GROUP BY daily.cust_id order by daily.id ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.qty)']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.rec)']; ?></td>
                                    
                               <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.owed)']; ?></td>
								
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['date']; ?></td>
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                                
                            <?PHP
	
								$ab= mysql_query("select SUM(daily.owed),SUM(daily.rec),SUM(daily.price*daily.qty),SUM(daily.qty),SUM(daily.owed),names.name,SUM(daily.rec) from names,daily where names.id=daily.cust_id and daily.date='$date' GROUP BY daily.date" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($ab) ){
							?>    
                                <tr style="background:#3CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> </td>

						
								<td style="text-align:center; word-break:break-all; width:450px;color:#f00; font-weight:bold"> TOTAL</td>
								<
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.qty)']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.rec)']; ?></td>
                                    
                               <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(daily.owed)']; ?></td>
								
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['date']; ?></td>
								
                               <?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

       
</div>