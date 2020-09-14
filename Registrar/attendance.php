  <meta http-equiv="refresh" content="1">


 <div class="row">
 
        <div class="col-sm-12">




    <div class="container" id="tourpackages-carousel">
      
      <div class="row">
    <?PHP
	$today=date('d-m-Y');
           $dm=$staffdb->query("SELECT * from staff_reg,staffs where staff_reg.date='$today' and staff_reg.matric=staffs.matric order by staff_reg.id DESC") or die(mysqli_error($staffdb ));
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['photo'];
		
		  
		  ?>    
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="../STAFFS/staffs/album/<?php 
			if (empty($X)){
				echo "default.PNG";
			}
			else {
				echo $dfm['photo'];
			}
			?>" alt="" style="width:130px; height:130px">
              <div class="caption">
                <h4><?php echo substr($dfm['name'],0,20); ?></h4>
                <p><span style="color:#006">Came:</span> <?php echo $dfm['checkin']; ?><br />
                <span style="color:#f00">Went:</span><?php echo $dfm['checkout']; ?></p>
            </div>
          </div>
        </div>
        <?php } ?>

        
      </div><!-- End row -->
      
    </div><!-- End container -->











































          </div>
          </div>