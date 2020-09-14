
      <!--PAGE CONTENT -->
        <div id="content" >
             
            <div class="inner" style="min-height: 1200px;">
                <div class="row">
                    <div class="col-lg-9">
                  
                      
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    <h1>HIMS management System <i class="icon-caret-right  " style="color:#F00"></i>  <i class="icon-caret-right  " style="color:#009"></i>  <span style="color:#f00"><?php echo $_GET['link']; ?>   



</h1>
                    
                    <?php
					if(isset($_GET['dashboard'])){
	include '../content/reports.php';
	}
	
	
	if(isset($_GET['create_user'])){
	include '../superadmin/register.php';
		}
		
		if(isset($_GET['Accounts'])){
	include '../superadmin/other_users.php';
		}
		if(isset($_GET['update_name'])){
	include '../content/update_name.php';
		}
	if(isset($_GET['my_license'])){
	include '../content/license.php';
		}
		
	
					?>
                    
                    
                    
                    </div></div>
                           
                 </div>
                    
                
                    
                    
           
        <!--END PAGE CONTENT -->