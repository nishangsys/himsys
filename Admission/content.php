
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> SUPER ADMIN LOGIN</h4>
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
	if(isset($_GET['new_user'])){
	include 'chosen.php';
	}
	if(isset($_GET['level'])){
	include 'chosen.php';
	}
	if(isset($_GET['add_dept'])){
	include 'add_dept.php';
	}
	if(isset($_GET['create_hod'])){
	include 'create_hod.php';
	}
	if(isset($_GET['new_account'])){
	include 'new_account.php';
	}
	if(isset($_GET['assign'])){
	include 'assign_course.php';
	}
	if(isset($_GET['chosen'])){
	include 'new_user.php';
	}
	if(isset($_GET['view'])){
	include 'viewing_course.php';
	}
	if(isset($_GET['assignments'])){
	include 'my_ass.php';
	}
	if(isset($_GET['submit_ass'])){
	include 'submiting_ass.php';
	}
	if(isset($_GET['my_profile'])){
	include 'my_profile.php';
	}
					
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->