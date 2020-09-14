<?php
@session_start();
include '../includes/dbc.php';
$query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $who=$userRow['user_name'];
 $whom=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year11=$bu['extra'];
	 $year22=$bu['extra2'];
}
$CC=$year11;
 $ssyear=substr($CC,2,2);

///////////////select semester////////////
$d=$con->query("SELECT * FROM rush where roll='2'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $semester=$bu['year'];
}

///////////////select semester////////////
$d=$con->query("SELECT * FROM sector where area='$level'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $secto=$bu['name'];
}
 if(empty($level)){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

 
if($level=='11' or $level=='12' or $level=='20' or $level=='8' or $level=='4'){

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
                 
                        
                        </a>
                       <span style="color:#060; font-weight:bold; font-size:19px;">
                       &nbsp;&nbsp; <?php echo $school; ?> HIMS SCHOOL MANAGEMENT SYSTEM</span>
                       
                       </span>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">


                   
                    <!--END TASK SECTION -->

                   
                    
                    <!-- END ALERTS SECTION -->
<?php } ?>