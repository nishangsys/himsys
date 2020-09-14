 <link rel="stylesheet" href="search/css/style.css" />
<script type="text/javascript" src="search/js/jquery.min.js"></script>
<script type="text/javascript" src="search/js/script.js"></script>
        <script src="../js/pop-up.js"></script>

  <div class="col-sm-12">
      <div class="well">
      
     
    
      
      
      <form class="form-horizontal" action="" method="post">
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Student's Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" Your Name" name="names" id="country_id" onkeyup="autocomplet()" autocomplete="off">                    <ul id="country_list_id"></ul>

      </div>
    </div>
       
            </form>
  

  
   <?php
   if(isset($_POST['names'])){
 $matric=$_POST['names'];
 $level=$_POST['level'];
  //////////select academic year//////////////
$d=$conn->query("SELECT * FROM students where fname='$matric' GROUP BY levels,roll ") or die(mysqli_error($conn));
$i=1;
	if(mysqli_num_rows($d)<1){
	echo	$mess="<div class='alert alert-danger'>Sorry $matric level $level Marks are not Found. Try again</div>";
	}
	else {
	
 			 
?>
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; font-size:16px">Adding students to <?php echo $matric; ?></div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Course code</th>
        <th>Matricule</th>
        <th>Level</th>
        <th>School Year</th>
      
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
       
        <td>
       <a href=javascript:popcontact('../Exams/addmarks.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-success btn-sm" >Add Course</button>
</a>
        |
       <a href=javascript:popcontact('../Exams/del_name.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-danger btn-sm" >Delete Name</button>
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
   