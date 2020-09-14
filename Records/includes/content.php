<style>
.g ul li{
	list-style:none;
	display:inline;
}
.g ul li a{
	text-decoration:none;
	font-weight:bold;
	color:#0CC;
	
}
.g ul {
	display:inline;
}

</style>
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060; font-size:14px">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> <?php echo $names; ?> </h4>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>
            <h4 style="color:#F00; text-decoration:blink">
            <span style="background:#000; color:#ff0; padding:10px 10px">Breaking News: </span> &nbsp;<?php $dn=$con->query("SELECT * FROM news where year_id='$ayear' and dept='".$pdept."'  order by id  DESC limit 2  ") or die(mysqli_error($con));
			
			$i=1; 
			while($bun=$dn->fetch_assoc()){ 
			 $title= $bun['title'];
			 $id= $bun['id'];
			echo "<span>
			<a href='?more.php&id=$id '> <span class='label label-success'>".$i++."</span> $title</a></span>";
			}
 ?>

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
					
					if(isset($_GET['function'])){
	
	include '../function/functions.php';

	}
	if(isset($_GET['sign_up'])){
	//include '../students/form_b.php';
	include '../students/my_form.php';

	}
	if(isset($_GET['mylevel'])){
	include '../students/my_term.php';
	}
	if(isset($_GET['form_b'])){
	include '../students/form_b.php';
	}
	if(isset($_GET['level'])){
	include 'chosen.php';
	}
	if(isset($_GET['mynotes'])){
	include '../students/mynotes.php';
	}
	if(isset($_GET['videos'])){
	include '../students/viewing_videos.php';
	}
	if(isset($_GET['dassignments'])){
	include '../students/download_assignments.php';
	}
	if(isset($_GET['view_assignments'])){
	include '../students/viewing_assignments.php';
	}
	if(isset($_GET['my_results'])){
	include '../students/my_results.php';
	}
	if(isset($_GET['id'])){
	include '../students/more.php';
	}
	if(isset($_GET['news'])){
	include '../students/news.php';
	}
	if(isset($_GET['online'])){
	include '../students/online.php';
	}
	
	if(isset($_GET['print_formb'])){
	include '../students/print_formb.php';
	}
		if(isset($_GET['chat'])){
	include '../students/chat.php';
	}
	
	if(isset($_GET['rating'])){
	include '../students/rates.php';
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
	include '../students/viewing_course.php';
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

     
        <!--END PAGE CONTENT -->