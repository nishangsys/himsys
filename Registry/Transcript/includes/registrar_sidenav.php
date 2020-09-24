  <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
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



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../img/default.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $who; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="?dashb" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Edited Marks Reports
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="pagesr-nav">

                    
                    <?php
					$d=$con->query("SELECT * FROM track GROUP BY reason") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){



?>
                        <li class=""><a href="?reports&link=<?php echo $bu['reason']; ?> Reports&reason=<?php echo $bu['reason']; ?>"><i class="icon-angle-right"></i> <?php echo $bu['reason']; ?> </a></li>
                     <?php } ?>
                    
                    </ul>
                </li>

                        
                        
                        
                            <li class="panel ">
    
      <a href="?others&link=Access Other Sectors" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-user"></i> Access Other Sectors
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                                       
                        
                        
        
                        
                        
               
                  <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Teachers-Hours
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                    
                     <li class=""><a href="?hndbt&link= Add MBA Teachers"><i class="icon-angle-right"></i> Add HND/BTECH Teachers </a></li>
                     
                     
                        <li class=""><a href="?all_teachings&link= Entrance Related Lists"><i class="icon-angle-right"></i> View Subjects-Teachers </a></li>
                        <li class=""><a href="?search&link= Search Lecturer"><i class="icon-angle-right"></i> Record hours Taught </a></li>
                          <li class=""><a href="?view&link= Search Lecturer"><i class="icon-angle-right"></i> View Hours Registry </a></li>
                          
                          <li class=""><a href="?view_mba&link= Search Lecturer"><i class="icon-angle-right"></i> View MBA Hours Taught </a></li>
                          
                           <li class=""><a href="?mba&link= Add MBA Teachers"><i class="icon-angle-right"></i> Add MBA Teachers </a></li>
                           
                             <li class=""><a href="?hours_mba&link= Add MBA Teachers"><i class="icon-angle-right"></i> Record MBA Hours </a></li>
                    
                    </ul>
                </li>
                     
                        
                        
                        
                   
                            <li class="panel ">
                    <a href="?attest" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-open   "> </i> Print Attestaions
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                         <li class="panel ">
                    <a href="?tstats&link=Enrollment Statistics" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-bar-chart   "> </i> Enrollment Statistics
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                         
           <li class="panel ">
                    <a href="?dashb&link= Best Program Enrollments" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-open   "> </i> Best Prog Enrollments
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>   

                
               
               

                        
                               


            </ul>

        </div>
        
        <!--END MENU SECTION -->