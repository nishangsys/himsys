 <link rel="stylesheet" href="../Exams/search/css/style.css" />
<script type="text/javascript" src="../Exams/search/js/jquery.min.js"></script>
<script type="text/javascript" src="../Exams/search/js/script.js"></script>
        <script src="../js/pop-up.js"></script>

  <div class="col-sm-12">
      <div class="well">
      
     
    
      
      
      <form class="form-horizontal" action="" method="post">
      
      <div class="form-group">
       <label class="control-label col-sm-2" for="email"> Student's Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" Your Name" name="names" id="country_id" onkeyup="autocomplet()" autocomplete="off">                    <ul id="country_list_id"></ul>
<button type="submit" class="btn btn-primary btn-lg" name="search" >Search</button>
      </div>
    </div>
       
            </form>
  

  
   <?php
   if(isset($_POST['search'])){
 $matric=$_POST['names'];
 $level=$_POST['level'];
$ayear;
  //////////select academic year//////////////
$do=$conn->query("SELECT * FROM students where fname='$matric' and year_id='$ayear'  order by id DESC LIMIT 1 ") or die(mysqli_error($conn));

$d=$conn->query("SELECT * FROM levels,special,years,students where fname='$matric' and year_id!='$ayear' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id order by students.id DESC LIMIT 1 ") or die(mysqli_error($conn));
$i=1;
	if(mysqli_num_rows($do)>0){
	echo	$mess="<div class='alert alert-danger'>Sorry $matric has Alreday been registered this $ayear. Try Another</div>";
	}
	else {
	
 			 
?>
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; text-transform:uppercase; font-size:16px">Receiving FEES For from  <?php echo $matric; ?> For  <?php echo $ayear; ?> School Year </div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Course code</th>
            <th>Program</th>
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
       <td><?php echo $bu['prog_name']; ?></td>
        <td><?php echo $bu['matricule']; ?></td>
        <td><?php echo $bu['levels']; ?></td>
        <td><?php echo $bu['year_name']; ?></td>
       
        <td>
       <a href=javascript:popcontact('../Acc/moving.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-success btn-bg" >Move to Next Level <?php echo $bu['levels']+100; ?></button>
</a> |

 <a href=javascript:popcontact('../Acc/m_man.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-primary btn-bg" >Move  Manually </button>
</a> |
<!--
        <a href=javascript:popcontact('../Exams/del_name.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-danger btn-bg" style="margin-top:30px" >Delete Name</button>--->
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
   