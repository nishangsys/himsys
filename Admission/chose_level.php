<div class="alert alert-info">
  <strong>Message:</strong> Choose a Level
</div>
<?php
 $id;
   $dm=$con->query("SELECT * FROM levels order by levels") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['levels'];
     
?>
<a href="?mylevel=<?php echo $deptss; ?>&dept=<?php echo $_GET['dept']; ?>&name=<?php echo $_GET['mycourse']; ?>">
<div class="col-sm-3" >
          <div class="well" style=" border:1px solid#999; text-align:center" >
          <span style="font-size:18px; text-align:center; font-weight:bold"> 
          
Choose Level
<?php
echo $deptss;
?> 
</span>

           
          </div>
          
        </div>
        <?php } ?>
        </a>
        </div>
        