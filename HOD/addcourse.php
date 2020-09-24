<?php
include '../includes/dbc.php';
@session_start();
$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;



if(isset($_GET['code'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $whom=$userRow['full_name'];

 
 }
	 
	  $ass=$conn->query("SELECT * from my_records where roll='".$_GET['code']."'  ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
		$lev=$bs['levels'];
		$dept=$bs['departmet'];
		
		
		 $query =$conn->query("SELECT * FROM courses WHERE matricule='".$bs['matric']."' ") or die(mysqli_error($conn));

 while($userRow=$query->fetch_array()){
 
 $matricule=$userRow['matricule'];
 $name=$userRow['fname'];
 $depts=$userRow['departmet'];
 $level=$userRow['levels'];


 
 }
		
		
		
		
		
	
	?>
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <style>
input,select{
	width:90%;
	padding:5px 5px;
}
.gst20{

			margin-top:20px;

		}

		#hdTuto_search{

			display: none;

		}

		.list-gpfrm-list a{

			text-decoration: none !important;

		}

		.list-gpfrm li{

			cursor: pointer;
			padding: 10px 10px;
			border-bottom:1px solid#000;

		}

		.list-gpfrm{

			list-style-type: none;

    		background: #d4e8d7;

		}

		.list-gpfrm li:hover{

			color: white;

			background-color: #3d3d3d;

		}

	</style>
    
    
    
    
    
            
<script src="../Records/js/jquery_search.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

	//Autocomplete search using PHP, MySQLi, Ajax and jQuery

		//generate suggestion on keyup

		$('#querystr').keyup(function(e){

			e.preventDefault();

			var form = $('#hdTutoForm').serialize();

			$.ajax({

				type: 'POST',

				url: '../Records/search_course.php',

				data: form,

				dataType: 'json',

				success: function(response){

					if(response.error){

						$('#hdTuto_search').hide();

					}

					else{

						$('#hdTuto_search').show().html(response.data);

					}

				}

			});

		});



		//fill the input

		$(document).on('click', '.list-gpfrm-list', function(e){

			e.preventDefault();

			$('#hdTuto_search').hide();

			var fullname = $(this).data('fullname');

			$('#querystr').val(fullname);

		});

	});

</script>       <br />
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" id="hdTutoForm"  >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name"  value="<?php echo $name;; ?>" readonly="readonly" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" readonly="readonly" value="<?php echo  $depts; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matric']; ?>" readonly="readonly"/></td></tr>
               
                 <tr><td>Matricule</td><td><input type="text" name="level" value="<?php echo $level; ?>" readonly="readonly"/></td></tr>
               
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $bs['ayear'];
	 
 ?>" /></td></tr>
 <tr><td>Semester</td><td>  <select class="form-control" id="sel1" name="sem" required>
    <option> </option>
    <option  value="1">First Semseter</option>
   <option  value="2">Second Semseter</option>
  </select>
  </select></td></tr>
 <tr><td>Course Code</td><td>
 <div class="input-gpfrm input-gpfrm-lg">

				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Course Code / Title" aria-describedby="basic-addon2" autocomplete="off">
                    


				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

	</div>
 
 
 </td></tr>
               
                <tr><td>Ca Mark</td><td><input type="text" name="nca" v    required="required" style="border:2px solid#f00"/></td></tr>
                
             
         <tr><td>Editing Done By</td><td><input type="text" name="user" value="<?php echo $whom; ?>"  required="required" /></td></tr>
  
 
             
            
          <input type="hidden" name="ids"  value="<?php
		 echo $who;		 ?>" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-primary btn-lg"   >SAVE Update</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$nam=$_POST['name'];
$class=$_POST['class'];
$year=$_POST['ayear'];
$matric=$_POST['matric'];
$nca=$_POST['nca'];
$nexam=$_POST['nexam'];
$fca=$_POST['fca'];
$fexam=$_POST['fexam'];
$level=$_POST['level'];

$user=$_POST['user'];
echo $sem=$_POST['sem'];
$ayears=$_POST['ayear'];
$cour=$_POST['querystr'];
$month=date('G:i:s h:i:s');
$year=date('Y');
$m=date('m');

 $query =$conn->query("SELECT * FROM course WHERE course_code='".$cour."' ") or die(mysqli_error($conn));

 while($userRow=$query->fetch_array()){
 
 $cv=$userRow['credit_value'];
 
 }
	
$check=$conn->query("SELECT * FROM my_records  WHERE matric='$matric' AND code='$cour' AND   ayear='$ayears' and sem='$sem' ") or die(mysqli_error($conn)) ;
if($check->num_rows>0){
	
	echo "<script>alert('".$nam." already has a CA system in the system for ".$cour."  in ".$ayears." . You cannot input marks again!!'); </script>";

}
else {
 $res=$conn->query("INSERT INTO my_records set ca='$nca',code='$cour',ayear='$ayears', sem='$sem',credit='$cv',matric='$matric',dept='$class',levels='$level' ") or die(mysqli_error($conn));
	 $ats=$conn->query("insert into track set sname='$nam',fca='0',fexam='$fexam',  
smat='$matric',ayear='$year',edited='$user',ip='$localIP',comp='$computer',time='$month',reason='Added Course',course='$cour',nca='$ca',nexam='$nexam',month='$m' ") or die(mysqli_error($conn)) ;



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	}
	
?>