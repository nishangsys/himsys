<?php
@session_start();
include '../includes/dbc.php';
///////////////session varibales
 $user=$_SESSION['user_name'];
$dept=$_SESSION['full_name'];
echo $levels=$_SESSION['banned'];
 $depts= $_SESSION['address'];
 $id=$_SESSION['id'];	
 $photo=$_SESSION['website'];
 

if($levels!='18'){
	
echo '<div class="alert alert-danger">
  <strong>Message:</strong> Platform Account is Opened to Students Only
</div>';

echo '<meta http-equiv="Refresh" content="0; url= ../login.php ">';
 }
 else {
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
}

///////////////select semester////////////
$d=$con->query("SELECT * FROM rush where roll='2'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $semester=$bu['year'];
}


////////////////SELECT DEPARTMNT//////////////
 $dm=$con->query("SELECT * FROM users where id='$id'  ") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 echo $deptss=$bum['address'];
}

////////////////CLIENT NAME
$d=$con->query("SELECT * FROM school where id='1' ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $school=$bu['school'];
	
}
?> 
 
  <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img  src="../img/logo.jpg" alt="" style="border-radius:30px 30px 30px 30px; border:2px solid#060" />
                        
                        </a>
                       <span style="color:#060; font-weight:bold; font-size:19px;">
                       &nbsp;&nbsp; <?php echo $school; ?> FINANCE CONTROL</span>
                       
                       </span>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">


                   
                    <!--END TASK SECTION -->

                   
                    <!-- END ALERTS SECTION -->
<?php } ?>