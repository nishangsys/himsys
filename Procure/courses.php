<?php
 $id;
   $dm=$con->query("SELECT * FROM subjects where department='".$_GET['dept']."'  ") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['ayear'];

?>
<a href="?add_course=<?php echo $deptss; ?>&dept=<?php echo $_GET['dept']; ?>">
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
        
        
        
        
        <a href="?add_dept&dept=<?php echo $_GET['dept']; ?>">
<div class="col-sm-4" >
          <div class="well" style=" border:1px solid#999; text-align:center" >
          <span style="font-size:18px; text-align:center; font-weight:bold"> 
Add a new Department
</span>

           
          </div>
          
        </div>
       
        </a>
        