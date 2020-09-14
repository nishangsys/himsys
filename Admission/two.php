<script language="JavaScript" src="../js/pop-up.js"></script>
<H3 style="text-align:center;">Register your certificates and school where they were Obtained</H3>
<?PHP

	 
$code=$_GET['two'];
 $FG=$con->query("SELECT * from gen_info,mycerti where mycerti.matric='$code' and mycerti.matric=gen_info.matric") or die (mysqli_errno());
 while($io=$FG->fetch_assoc()){
	 $yname=$io['school'];
 }
 
 
 
?>
<form class="form-horizontal" role="form" action="" method="post" style="background:#fff; ">
 


  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Certificate :</label>
   <div class="col-sm-10"> 
      <input  class="form-control" id="email" placeholder="Certificate One Obtained"  name="certi" type="text" required="required" spellcheck="false" value="<?php echo $io['address'] ?>">
    </div>
  </div> 
  
  
  
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">School Attended :</label>
   <div class="col-sm-10"> 
      <input  class="form-control" id="email" placeholder="School Attended"  name="school" type="text" spellcheck="false" required="required" value="<?php echo $io['address'] ?>">
    </div>
  </div> 
  
 



  
  
  
  
  
  
 
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="two">Add</button>|&nbsp;&nbsp;<a href="?three=<?php echo $_GET['two']; ?>&link=Step Three" style="background:#060; color:#fff; padding:10px 10px">Next Step </a>
       
   </div>

    
    
    
    </form>
    
     
    
  <?php
  if(isset($_POST['two'])){
	  
	 $school=$_POST['school'];
	 $certi=$_POST['prog_name'];
	 $FG=$con->query("DELETE FROM mycerti where certia='$certi' and certib='$school'  and matric='$code' ");
	  $FG=$con->query("INSERT mycerti SET certia='$certi',certib='$school' ,matric='$code' ");
	  echo "<script>alert('Step Complete. Go to the Next one')</script>";
echo '<meta http-equiv="Refresh" content="0; url=?two='.$code.'&link=Step Two">';  ?>
  
  <?php } ?>
    
    
    
    <br />
    <br />
    <h3 style="text-align:center">
    My Certicates and School from Where they were Obtained
    </h3>
    
    
    
  
  
  
  
  
  
  
  
  
  
  
  
 
 
  
  
  
  
  
  
  


 <table class="table table-bordered">
  <?php
$query=$con->query("select * from mycerti where matric='$code' GROUP BY certia,certib order by id desc");
			$i=1;
		?>
    <thead>
      <tr>
      <th>#</th>
        <th>Certificate</th>
        <th>School Attended</th>
        
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
			
			while($row=$query->fetch_assoc()){
				
			?>
      <tr>
       <td><?php echo $i++; ?></td>			
	<td><?php echo $row['certia'] ;?>
	</td>
     <td>
	<?php echo $row['certib'] ;?>
	</td>
    
	<td>        
                	

    <a href=javascript:popcontact('../SuperAdmission/search/index.php?code=<?php echo $row['id'];?>&area=0&mat=<?php echo $row['matric']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;">
    <button class="btn btn-primary" >
  Register <?php echo $row['certia'] ;?> Subjects obtained from <?php echo $row['certib'] ;?> </button></a>
  
   <a href=javascript:popcontact('../SuperAdmission/search/delete.php?code=<?php echo $row['id'];?>&area=0&mat=<?php echo $row['matric']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;">
    <button class="btn btn-warning" >
 Delete Subjects/School </button></a>	
 
      <?php } ?></td>
      </tr>
      </tbody>
      </table>
  
</div>
</div>
 <?php
  if(isset($_GET['dell'])){
	  $id=$_GET['dell'];
	  $dfmmm=$conn->query("DELETE FROM mycerti where id='$id'") or die(mysqli_error($conn));
	  echo '<meta http-equiv="Refresh" content="0; url=?index.php?three='.$code.'&link=Step%20three">';  
  }
  ?>
</body>
</html>
