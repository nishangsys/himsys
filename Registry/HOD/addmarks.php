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

				url: 'do_search.php?dept=<?php echo $dept; ?>',

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
               
              
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $bs['ayear'];
	 
 ?>" /></td></tr>
 <tr><td>Semester</td><td> <input type="text" name="sem" readonly="readonly" value="<?php  echo $bs['sem'];
	 
 ?>" />
  </select></td></tr>
 <tr><td>Course Code</td><td>
 <input type="text" name="querystr" readonly="readonly" value="<?php  echo $bs['code'];
	 
 ?>" />
 
 
 </td></tr>
               
                <tr><td>Ca Mark</td><td><input type="text" name="nca" value="<?php echo $bs['ca']; ?>"    required="required" style="border:2px solid#f00"/></td></tr>
                
             
         <tr><td>Editing Done By</td><td><input type="text" name="user" value="<?php echo $whom; ?>"  required="required" /></td></tr>
  
  
  <input type="hidden" name="fca" value="<?php echo $bs['ca']; ?>" readonly="readonly"   required="required" style="border:2px solid#f00"/>
  <input type="hidden" name="fexam" value="<?php echo $bs['exam']; ?>" readonly="readonly"   required="required" style="border:2px solid#f00"/>
             
            
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


$user=$_POST['user'];
$sem=$_POST['sem'];
$cour=$_POST['querystr'];
$month=date('G:i:s h:i:s');
$year=date('Y');
$m=date('m');
$res=$conn->query("UPDATE my_records set ca='$nca'  WHERE matric='$matric' AND roll='".$_GET['code']."'") or die(mysqli_error($conn)) ;
	 $ats=$conn->query("insert into track set sname='$nam',fca='$fca',fexam='$fexam',  
smat='$matric',ayear='$year',edited='$user',ip='$localIP',comp='$computer',time='$month',reason='Updated Course',course='$cour',nca='$nca',nexam='$nexam',month='$m' ") or die(mysqli_error($conn)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	
?>