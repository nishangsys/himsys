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
                    <a href="index.html" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                
                    <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-save"></i> Edited Reports 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        &nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                    
                    <?php
					$d=$con->query("SELECT * FROM track GROUP BY reason") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){



?>
                        <li class=""><a href="?reports&link=<?php echo $bu['reason']; ?> Reports&reason=<?php echo $bu['reason']; ?>"><i class="icon-angle-right"></i> <?php echo $bu['reason']; ?> </a></li>
                     <?php } ?>
                    
                    </ul>
                </li>

                            <li class="panel ">
    
      <a href="?exams&link=Record Exams Marks" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"></i> Record Exams Marks
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                            <li class="panel ">
    
      <a href="?single&link=Single Mark Input" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"></i> Single Mark Input
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                          
                            <li class="panel ">
    
      <a href="?edit&link=Edit Marks" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Edit Marks
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                            <li class="panel ">
    
      <a href="?upload&link=Upload Resits Results
	   " data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-save"></i> Upload Resits Results
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                <li class="panel ">
                    <a href="?new_account&link=Create a new User" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> Create a new User   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>      


            </ul>

        </div>
        
        <!--END MENU SECTION -->