
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 1200px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> Welcome HOD  <?php echo $_GET['dept']; ?></h4>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>
            <h4 style="color:#F00; text-decoration:blink">
            Breaking News:
            </h4>
            </p>
          </div>
        </div>
      </div>
                      
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
	
	
	
	
	if(isset($_GET['confirm'])){
     include '../HOD/all_tutors.php';
	}
	if(isset($_GET['prepare'])){
     include '../HOD/my_requi.php';
	}
	if(isset($_GET['new_requi'])){
     include '../procure/new_requi.php';
	}
	
	if(isset($_GET['prepare_it'])){
     include '../procure/prepare_it.php';
	}
	
	
	
	
	
	if(isset($_GET['my_profile'])){
	include '../my_profile.php';
	}
					
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                   

        </div>
        <!--END PAGE CONTENT -->