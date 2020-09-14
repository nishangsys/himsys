<div class="alert alert-success">
  <h4> Chosing a Level <?php echo $_GET['mylevel']; ?> Program to Post a Materials</h4>
</div>
<?php
 $id;
   $dm=$con->query("SELECT * FROM classes order by class") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['class'];
     
?>
<a href="?levels=<?php echo $_GET['mylevel']; ?>&progg=<?php echo $deptss; ?>&material=">
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
        </div>
        