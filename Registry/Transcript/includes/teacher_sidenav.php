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
                <a class="user-link" href="?my_profile">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../photos/<?php if(empty($photo)){
						echo "default.png";
					}
					else {
						echo "$photo";
}?>"style="width:80px; height:80px; border-radius:20px 20px 20px 20px"  />
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
                    <a href="?" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                <li class="panel ">
                    <a href="?my_profile" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> My Profile   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>          


      <li class="panel ">
                    <a href="?allmy_course" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"> </i>  My Courses    
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                                  
                        
                        <li class="panel ">
                    <a href="?my_course" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class=" icon-folder-open-alt"></i>  Upload Notes  
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>  
                        
                          
                        <li class="panel ">
                    <a href="?my_course" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-film"></i>  Upload Video Lectures   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>
                        
                        
                            
                        <li class="panel ">
                    <a href="?my_course" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-tasks"> </i>  Post Assignment  
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>
                        
                      <li class="panel ">
                    <a href="?online" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-comments-alt "> </i> Online Forum
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>
                        
                           <li class="panel ">
                    <a href="?chat" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-comment"> </i> Chat Room
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                             
                        


            </ul>

        </div>
        <!--END MENU SECTION -->