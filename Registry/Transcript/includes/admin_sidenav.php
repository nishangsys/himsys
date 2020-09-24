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
                    <a href="index.html" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                 <li class="panel ">   
      <a href="?academic_year&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-briefcase "></i>  Set Academic Year
<span class="pull-right">
 </span>
 </a>
     </li> 
     
     
              
      
                
    <li class="panel ">
    
      <a href="?add_dept" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i>  Add Programs  
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                            <li class="panel ">
    
      <a href="?marks" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-plus"></i>  Mraks Sheets
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 

  <li class="panel ">
    
 <a href="?continue" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-file"></i> Continue Registration
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
      <li class="panel ">
                    <a href="?create_hod" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> Create User   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>   
                        
                          <li class="panel ">
                    <a href="?all_HODs" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> All Users   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                      
                                           
                        
                        
                        
                        
                        
                        
                         
                        <li>    
                        
                    <a href="?materials" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-file"> </i>  Upload Materials
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>  
                        
                        
                        
                          <li class="panel ">
                    <a href="?Registry" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-question-sign "> </i> Students Registry
	   
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
                    <a href="?our_list" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil   "> </i> Print List
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                      
                
                
                
                <!--
                <li class="panel ">
                    <a href="?new_user" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> My Profile   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> --->         


            </ul>

        </div>
        
        <!--END MENU SECTION -->