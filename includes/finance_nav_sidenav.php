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
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../photos/<?php echo $photo; ?>" style="width:80px; height:80px; border-radius:20px 20px 20px 20px" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $user; ?></h5>
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
                    <a href="?dept=<?php echo $_GET['dept'];?>" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
      
     
              
       
     
       <li>    
                        
                    <a href="?new_requi&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"> </i>  New Rquisitions 
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>    
     
      <li class="panel ">   
      <a href="?prepare&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-cog"></i>  Add Departments
<span class="pull-right">
 </span>
 </a>
     </li> 
                
    <li class="panel ">   
      <a href="?adding_course&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-book"></i>  Add students 
<span class="pull-right">
 </span>
 </a>
     </li> 
                        
      <li class="panel ">
                    <a href="?create_tutor&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-key"></i> Register a Tutor   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>   
                        
                          <li class="panel ">
                    <a href="?all_tutors&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> All My Totors   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                      
                                           
                        
                        
                        
                        <li>    
                        
                    <a href="?assign&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"> </i> Assign students    
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>     
                        <li>
                        <a href="?tutor_course&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-open "> </i> Tutor-students    
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>     
                        
                        
                           
                        
                        
                         
                
              

            </ul>

        </div>
        
        <!--END MENU SECTION -->