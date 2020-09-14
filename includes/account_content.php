
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
               <h3>You're Viewing <span style="color:#F00; font-weight:bold"> <i class="icon-fast-forward "> </i> <?php echo $_GET['link']; ?></span></h3>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	if(isset($_GET['add_mclass'])){
	   include '../accounts/add.php';
   }
   if(isset($_GET['income_class'])){
	   include '../accounts/income_class.php';
   }

 if(isset($_GET['add_class'])){
	   include '../accounts/add_class.php';
   }
   if(isset($_GET['moreexp'])){
	   include '../accounts/moreexp.php';
   }
   if(isset($_GET['add_classes'])){
	   include '../accounts/add_classes.php';
   }
	
	
	
	if(isset($_GET['deposits'])){
		include '../Cash/deposits.php';
	}
		if(isset($_GET['my_deposits'])){
		include '../Cash/depositing.php';
	}
		if(isset($_GET['withdrawal'])){
		include '../Cash/withdrawals.php';
	}
	if(isset($_GET['my_withdrawal'])){
		include '../Cash/withdrawing.php';
	}
	if(isset($_GET['my_withdrawal'])){
		include '../Cash/withdrawing.php';
	}
	
	
	if(isset($_GET['print_class'])){
		include '../Cash/print_class.php';
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_GET['view_more'])){
	include '../Cash/this_class.php';
	}
	
	if(isset($_GET['current_ayear'])){
	include '../Cash/current_ayear.php';
	}	
	if(isset($_GET['bydept'])){
	include '../Cash/bydept.php';
	}
	if(isset($_GET['bylevel'])){
	include '../Cash/bylevel.php';
	}
	if(isset($_GET['viewl'])){
	include '../Cash/view_level.php';
	}

	if(isset($_GET['viewd'])){
	include '../Cash/view_dept.php';
	}
	
	
					
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->