<?php
 $id;
   $dm=$con->query("SELECT * FROM sector where sarea='7' ") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['name'];
	  $link=$bum['link'];

?>
<a href="../<?php echo $link; ?>" target="new">
<div class="col-sm-4" >
          <div class="well" style=" border:1px solid#999; text-align:center" >
          <span style="font-size:18px; text-align:center; font-weight:bold"> 

<?php
echo $deptss;
?> 
</span>

           
          </div>
          
        </div>
        <?php } ?>
        </a>
        
        
     