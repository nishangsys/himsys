<?php
@session_start();
include '../includes/dbc.php';
$_SESSION['id'];
$query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $who=$userRow['user_name'];
 $level=$userRow['banned'];
 
 }
 
 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];
	 $year2=$bu['extra1'];
}

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
 
 
if($level=='11' or $level=='12' or $level=='20' or $level=='8'  or $level=='4'){
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
                       &nbsp;&nbsp; <?php echo $client; ?> FINANCE CONTROL SYSTEM VERSION 1.0 </span>
                       
                       </span>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">


                   
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task 
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    
                    <!-- END ALERTS SECTION -->
<?php } 

else {
	echo '<div class="alert alert-danger" style="font-size:16px">YOU ARE NOT PERMITTED TO VIEW THIS PAGE</div>';
	exit;
}

?>