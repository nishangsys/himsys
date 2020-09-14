
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
                    <h1>Nishang Clouds System <i class="icon-caret-right  " style="color:#F00"></i>  <i class="icon-caret-right  " style="color:#009"></i>  <span style="color:#f00"><?php echo $_GET['link']; ?>   <a href="?adding_goods&link=Adding Goods&add_good">
<button class="btn btn-success"><i class="icon-plus icon-white"></i> UPDATE front</button></a></span> | 

<a href="?record_goods&link=Adding Goods&add_good">
<button class="btn btn-primary"><i class="icon-plus icon-white"></i> NEW front</button></a></span> 



</h1>
                    
                    <?php
				
	if(isset($_GET['new'])){
	include '../front/new.php';
	}
	if(isset($_POST['ok'])){
	include '../front/ok.php';
	}
					?>
                    
                    
                    
                    </div></div>
                           
                 </div>
                    
                
                    
                    
           
        <!--END PAGE CONTENT -->