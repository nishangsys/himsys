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

                
                 <li class="panel ">   
      <a href="?academic_year&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-briefcase "></i>  Set Academic Year
<span class="pull-right">
 </span>
 </a>
     </li> 
     
     
         
            
                        
    <li class="panel ">
    
      <a href="?add_sect" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i>  Add Section
	   
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
    
      <a href="?first" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i>  New Students
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                            <li class="panel ">
    
      <a href="?marks&link= Recording Marks" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"></i> Record Marks
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                          
                            <li class="panel ">
    
      <a href="?generate&link=Setting Pass Mark Per Program" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Set Pass Mark
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                            <li class="panel ">
    
      <a href="?successful&link=Declare Results" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-save"></i> Declare Results
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                                       
                        
                        
        
                        
                        
                         <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Admission Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="?entrance&link= Entrance Related Lists"><i class="icon-angle-right"></i> Entrance Related </a></li>
                        <li class=""><a href="?nentrance&link= Non Entrance Related Lists"><i class="icon-angle-right"></i> Non Entrance </a></li>
                    
                    </ul>
                </li>

                        
                        
                        
                          <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        <i class="icon-check-empty"></i> Printing Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="blank-nav">
                       
                        <li><a href="?our_list&link= Students due for admission"><i class="icon-angle-right"></i> Finals Lists </a></li>
                        <li><a href="?admission_letters&link=Admission Letters "><i class="icon-angle-right"></i> Admission Letters </a></li>
                        
                         <li><a href="?nentrance&link= Non Entrance Related  Lists"><i class="icon-angle-right"></i> Printed Letters </a></li>
                    </ul>
                </li>
                   
                            <li class="panel ">
                    <a href="?stats" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-bar-chart   "> </i> Statistics
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                         <li class="panel ">
                    <a href="?our_elist" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil   "> </i> Print Exams List
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