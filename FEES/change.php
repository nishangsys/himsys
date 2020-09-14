<?php
include '../includes/dbc.php';
  $a1=mysql_query("SELECT * FROM rushs where roll='1'") or die(mysql_error());
 while ($ad=mysql_fetch_assoc($a1)){
	 $ad1[''];
	$year_id=$ad['year'];
	 $as=$ad['extra'];
	$ass=$ad['extra2'];
 }


?>

<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
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

	
  
  <?php
  if(isset($_GET['name'])){
	 $name=$_GET['name'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=$dbcon->query("SELECT * from students WHERE roll='$id'   ") or die(mysqli_error($dbcon));
	 while($ad=$a->fetch_assoc()){
		 $owe=$ad['amount_paid'];

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['fname']; ?>" required="required">
      </div>
    </div>
    
    
    
    
    
   
  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="form-group">
      <label class="control-label col-sm-2" for="email">OLD Dept:</label>
      <div class="col-sm-10">
  <select class="form-control" name="OLclass" style="width:300px" >
    <option value="<?php echo $ad['departmet']; ?>"><?php echo $ad['departmet']; ?></option>
     
   
  </select>
</div>
</div>
      
        
       
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Matricule:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="matricule" required="required">
      </div>
    </div>
  
      
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="levels" value="<?php echo $ad['levels']; ?>" >
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ad['ayear']; ?>" readonly>
      </div>
    </div>
    
    
     
   
    
      <input type="hidden" name="feeamt" value="<?php echo $fees=$_GET['fees']; ?>" />
    
     <input type="hidden" name="owed" value="<?php echo $owe; ?>" />
    
     <input type="hidden" name="new_bal" value="<?php echo $fees-$owe ?>" />
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>

<?php
if(isset($_POST['do'])){
	$matricule=$_POST['matricule'];
	$levels=$_POST['levels'];
	$roll=$_GET['id'];
 $query55=$dbcon->query("UPDATE students set matricule='$matricule',levels='$levels'   where roll='$roll'  " )  or die(mysqli_error($dbcon));



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=edit.php">';	
	
 	
 exit;
	
}
?>

