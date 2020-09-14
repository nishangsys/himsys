        <script src="../js/pop-up.js"></script>

  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" >
   
   
   
     <table class="table table-bordered">

              <tr><td>Student's Matricule</td><td> 
              
           <input type="text" class="form-control" id="email" placeholder="Full Names" name="names" required="required"  ></td><td>Level</td><td> 
              
           <input type="text" class="form-control" id="email" placeholder="Level" name="level" required="required"  >       
              </td><td></td><td><button type="submit" name="ok" class="myButton"   >Search</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
     
  
      </form>
  
  
   <?php
   if(isset($_POST['ok'])){
 $matric=$_POST['names'];
 $level=$_POST['level'];
  //////////select academic year//////////////
$d=$conn->query("SELECT * FROM students,resit where resit.matricule='$matric' and resit.levels='$level' AND students.matricule=resit.matricule order by resit.sex") or die(mysqli_error($conn));
$i=1;
	if(mysqli_num_rows($d)<1){
	echo	$mess="<div class='alert alert-danger'>Sorry $matric level $level Marks are not Found. Try again</div>";
	}
	else {
		
	$dm=$conn->query("SELECT * FROM students where matricule='$matric' ") or die(mysqli_error($conn));
		while($bum=$dm->fetch_assoc()){
			$name=$bum['fname'];
		}
 			 
?>
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; font-size:16px"><?php echo $name; ?> Level <?php echo $level; ?> Marks</div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Course code</th>
        <th>Matricule</th>
        <th>Level</th>
        <th>School Year</th>
        <th>Semester</th>
        
        <th>CA</th>
        <th>Exams</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
	
while($bu=$d->fetch_assoc()){
	
	?>
    <tbody>
      <tr>
      <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
      <td><?php echo $i++; ?></td>
       <td><?php echo $bu['fname']; ?></td>
        <td><?php echo $bu['matricule']; ?></td>
        <td><?php echo $bu['levels']; ?></td>
        <td><?php echo $bu['ayear']; ?></td>
        <td><?php echo $bu['sex']; ?></td>
        
        <td><?php echo $bu['c101']; ?></td>
        <td><?php echo $bu['c102']; ?></td>
        <td><a href=javascript:popcontact('../Exams/eca.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-primary btn-sm">Edit ca</button>
</a> | |
       <a href=javascript:popcontact('../Exams/exa.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-success btn-sm" >Edit Exams</button>
</a>
        |
       <a href=javascript:popcontact('../Exams/del.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-danger btn-sm" >Delete</button>
</a>
        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
         
          <?php } }  ?>
		      </div>
    </div>
    </div>
   