<?PHP
	 
		 
$code=$_GET['three']; 

$FG=$con->query("SELECT * from gen_info where matric='$code' LIMIT 1 ") or die (mysqli_errno());
 while($row=$FG->fetch_assoc()){
?>

    <div class="col-sm-11"> 

 <form class="form-horizontal" role="form" action="" method="post" style="background:#fff; ">
 
 


 
 <h3 style="text-align:center">Other students and Experience One</h3>
 
 

      <div class="form-group">
    <label class="control-label col-sm-2" for="email"> Sponsor:</label>
    <div class="col-sm-10">
	
   <select name="sponsor" class="form-control"  /> 
      <option value="Self">Self</option>
      <option value="Sponsor">Sponsor </option>
  </select>
</div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">Sponsor's Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sname" id="email" placeholder="Sponsor's Name " value="<?php echo $row['sname'] ?>"  >
    </div>
  </div>
  
  
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Sponsor's Address :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="spaddress" id="email" placeholder="Sponsor's Address" value="<?php echo $row['saddress']; ?>" >
    </div>
  </div>  
        <div class="form-group">
    <label class="control-label col-sm-2" for="email"> Any disabilities:</label>
    <div class="col-sm-10">
	
   <select name="disability" class="form-control"  />
   <option></option> 
        <option value="no">No</option>
      <option value="yes">Yes</option>
  </select>
</div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">If yes provide details:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="adisability" id="email" placeholder="If yes provide details" value="<?php echo $row['adisability'] ?>" >
    </div>
  </div>
  
  
        <div class="form-group">
    <label class="control-label col-sm-2" for="email"> Any disabilities:</label>
    <div class="col-sm-10">
	
   <select name="criminal" class="form-control"  />
   <option></option>
    <option value=" <?php echo $row['disabilty'] ?>"><?php echo $row['disabilty'] ?></option>  
  
          <option value="no">No</option>

      <option value="yes">Yes</option>
  </select>
</div>
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="email">If yes provide details:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="acriminal" id="email" placeholder="criminality details" value="<?php echo $row['acriminal'] ?>" >
    </div>
  </div>
  





  <h3 style="text-align:center">Other students and Experience One</h3>

  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Date of Course:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="other1" id="email" placeholder="Date of Course" value="<?php echo $row['other1'] ?>" >
    </div>
  </div> 
  
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Title of Course:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tof" id="email" placeholder="Title of Course" value="<?php echo $row['other1_tittle'] ?>" >
    </div>
  </div> 
  
  
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Qualification Obtained:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="quali" id="email" placeholder="Qualification Obtained" value="<?php echo $row['quali1'] ?>" >
    </div>
  </div> 
  
  
  
  
  <h3 style="text-align:center">Other students and Experience Two</h3>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Date of Course:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="other2" id="email" placeholder="Date of Course" value="<?php echo $row['other2'] ?>" >
    </div>
  </div> 
  
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Title of Course:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tof1" id="email" placeholder="Title of Course" value="<?php echo $row['other2_tittle'] ?>" >
    </div>
  </div> 
  
  
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Qualification Obtained:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="quali1" id="email" placeholder="Qualification Obtained" value="<?php echo $row['other2_quali'] ?>" >
    </div>
  </div>
  
  <h3 style="text-align:center">Additional Personal Details</h3>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">ADDITIONAL PERSONAL DETAILS:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="gname" id="email" placeholder="Name and Address of emergency contact (guardian, sponsor or parents)" value="<?php echo $row['gnameadd'] ?>" >
    </div>
  </div>
  
  
  
  
   
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">
     
    </label>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="two">Next Step</button>
   </div>

	</div>
  </form>
  
  
<?php } ?>
 
 <?php
  if(isset($_POST['two'])){
	  	
	$_POST = array_map("ucwords", $_POST);
	

	 $other1=$_POST['other1'];
	 $tof1=$_POST['tof'];
	$quali=$_POST['quali'];
	$other2=$_POST['other2'];
	 $tof2=$_POST['tof1'];
	$quali2=$_POST['quali1'];
	$gname=$_POST['gname'];
	$sname=$_POST['sname'];
	$about=$_POST['about'];
	$sponsor=$_POST['sponsor'];
	$spaddress=$_POST['spaddress'];
	
	$disability=$_POST['disability'];
	$adisability=$_POST['adisability'];
	$criminal=$_POST['criminal'];
	$acriminal=$_POST['acriminal'];
	
	
	  $FG=$con->query("UPDATE gen_info SET other1='$other1',other1_tittle='$tof1',quali1='$quali',other2='$other2',other2_tittle='$tof2',other2_quali='$quali2',gnameadd='$gname',sname='$sname',saddress='$spaddress',disability='$disability',adisability='$adisability',criminal='$criminal',sponsor='$sponsor',acriminal='$acriminal',abouts='$about' WHERE matric='$code'");
	  
	   /*$FG=$con->query("UPDATE gen_info SET other1='$other1',other1_tittle='$tof1',other1_quali='$quali1',other2='$other2',other2_tittle='$tof2',other2_quali='$quali2',gnameadd='$gname',sname='$sname',saddress='$spaddress',disablity='$disability',adisability='$adisability',criminal='$criminal',acriminal='$acriminal',pob='12347777' WHERE matric='$code' ");*/

  	 echo "<script>alert('Step Complete. Go to the Next one')</script>";
	 echo '<meta http-equiv="Refresh" content="0; url=?continue&link=Uploading%20Photos">';  
  }
  
  ?>
 