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
    
      <a href="?edits&link=Edit Students" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"></i> Edit Students
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                  
                         <li class="panel ">
    
      <a href="?promote&link=Moving student to next Level" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-file"></i> Move to New Level
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>         
                        
                        
                         <li class="panel ">
    
      <a href="?others&link= Add Missing Names" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-plus"></i> Add Missing Names
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                       <!---    <li class="panel ">
    
      <a href="?resit&link=Print Resit Forms" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-open"></i> Resit Forms
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> --->
                        
                        
                          
                            <li class="panel ">
    
      <a href="?c_list&link=Setting Pass Mark Per Program" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Class Lists
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                        
                        
                        
                                       
                        
                        
        
                        
                        
                     
                        
                        
                        
                            <li class="panel ">
                    <a href="?stats" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-bar-chart   "> </i> Statistics
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                         <li class="panel ">
                    <a href="?change_dept&link=Change Department/Level" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil   "> </i> Change Department/Level
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                             
                         <li class="panel ">
                    <a href="?chose_week&link=Record Attendance" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-calendar   "> </i> Record Attendance
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>     
                        
                        
                                         
      <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> Attendance Reports
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-primary">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="?daily_att&link=Daily Attendance Reports"><i class="icon-angle-right"></i> Daily Reports </a></li>
                        <li><a href="?monthly_att&link=Daily Attendance Reports"><i class="icon-angle-right"></i> Month Reports  </a></li>
                      
                      
                          <li><a href="?review_exp&link=Records Expenditure"><i class="icon-angle-right"></i> View Expenditure  </a></li>
                      
                    </ul>
                </li>  
                        
                        


            </ul>

        </div>
        
        <!--END MENU SECTION -->