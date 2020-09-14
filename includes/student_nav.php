<?php
@session_start();
include '../includes/dbc.php';
include '../function/functions.php';
 $user=$_SESSION['user_name'];
$dept=$_SESSION['full_name'];

 $levels=$_SESSION['user_level'];

if($levels!='5'){
	
echo '<div class="alert alert-danger">
  <strong>Message:</strong> Platform Account is Opened to Students Only
</div>';

echo '<meta http-equiv="Refresh" content="0; url= ../login.php ">';
 }
 else {

$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
}
$d=$con->query("SELECT * FROM rush where roll='2'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $semester=$bu['year'];
}


////////////////Name
$d=$con->query("SELECT * FROM students where matricule='$user' and year_id='$ayear'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $names=$bu['fname'];
	 $level=$bu['levels'];
	  $ydept=$bu['departmet'];
}

////////////////CLIENT NAME
$d=$con->query("SELECT * FROM school where id='1' ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $school=$bu['school'];
	
}

$dd=$con->query("SELECT * FROM subjects where year_id='$ydept' ") or die(mysqli_error($con));
while($bu=$dd->fetch_assoc()){
	 $pdept=$bu['department'];
	
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

                    <a href="?my_profile" class="navbar-brand">
                    <img  src="../img/logo.jpg" alt="" style="border-radius:30px 30px 30px 30px; border:2px solid#060" />
                        
                        </a>
                       <span style="color:#060; font-weight:bold; font-size:19px;">
                       &nbsp;&nbsp; <?php echo $school; ?> E-LEARNING PLATFORM</span>
                       
                       </span>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success"><?php $dn=$con->query("SELECT COUNT(ayear) as allm FROM news where year_id='$ayear' and dept='".$pdept."'  ") or die(mysqli_error($con));

			while($bun=$dn->fetch_assoc()){ 
			echo  $total= $bun['allm'];
			}; ?></span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                        <?php $dn=$con->query("SELECT * FROM news where year_id='$ayear' and dept='".$pdept."'  ") or die(mysqli_error($con));

			while($bun=$dn->fetch_assoc()){ 
			?>
                            <li>
                                <a href="?more&id=<?php echo $bun['id'];?>">
                                    <div>
                                       <strong><?php echo $bun['title'];?></strong>
                                        <span class="pull-right text-muted">
                                            <em><?php echo $bun['date'];?></em>
                                        </span>
                                    </div>
                                    <div>
                     <?php echo substr($bun['content'],0,50);?>

                                    </div>
                                </a>
                                 <?php } ?>
                            </li>
                         
                            
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info"><?php $dn=$con->query("SELECT COUNT(yourid) as allm FROM chat where year_id='$ayear' and sentby like '%".$ydept."%' and levels='$level'  ") or die(mysqli_error($con));

			while($bun=$dn->fetch_assoc()){ 
			echo  $total= $bun['allm'];
			}; ?></span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">
<?php $dn=$con->query("SELECT * FROM chat where year_id='$ayear' and sentby like '%".$ydept."%' and levels='$level' order by id DESC LIMIT 10  ") or die(mysqli_error($con));

			while($bun=$dn->fetch_assoc()){ 
			?>
                            <li>
                                <a href="?chat">
                                    <div>
                                        <i class="icon-comment" ></i> <?php echo substr($bun['message'],0,50);?>
                                    <span class="pull-right text-muted small"> <?php echo $bun['date'];?></span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                    </li>
                    
                    <!-- END ALERTS SECTION -->
<?php } ?>

  <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="?my_profile"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="?"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->

