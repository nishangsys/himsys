
<style>
.frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:400px;position: absolute;}
#country-list li{padding: 10px; background: #036; border-bottom: #bbb9b9 1px solid ; color:#fff}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style>
<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "../Fees/searchs.php?year_id=<?php echo $ayear; ?>",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
<div class="alert alert-info">
  <strong>All Receipts of <?php echo $ayear_name; ?></strong> I
</div>


<div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">

<form class="form-inline" action="" method="POST">
  <div class="form-group">
    <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Year:</label>
     <select class="form-control" id="sel1" name="ayear" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,years where students.year_id=years.id  GROUP BY students.year_id order by students.year_id DESC") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['year_name']; ?></option>
    <?php } ?>
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-default">Submit</button>
</form>  
  

     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                
        </h3>
        
      <?php
	 
	  if(!isset($_POST['ok'])){
	  
	   $d=$conn->query("SELECT * from levels,special,years,students  where  year_id='$ayear' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id GROUP BY dept_id,level_id order by special.prog_name ") or die(mysqli_error($conn));
$i=1;
	  }
	  else {
        $dept=$_POST['dept'];
	  $ayear=$_POST['ayear'];       
		 $d=$dbcon->query("SELECT * from levels,special,years,students  where  year_id='$ayear' AND students.level_id=levels.id and students.dept_id='$dept' and students.year_id='$ayear' and students.dept_id=special.id  AND students.year_id=years.id GROUP BY dept_id,level_id order by special.prog_name
		 ") or die(mysqli_error($dbcon));
	  }
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Prog</th> <th>Level</th>
                <th>Ayear</th>                        
                                                <th>Amt Paid</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td style="text-transform:capitalize"><?php  echo $bu['prog_name']; ?></td>
<td><?php  echo $bu['levels']; ?></td> 
<td><?php  echo $bu['year_name']; ?></td>                                                        
                                              
                                           
                                                         <td><a href="../Fees/c_lists.php?prog_id=<?php  echo $bu['dept_id']; ?>&level_id=<?php  echo $bu['level_id']; ?>&year_id=<?php  echo $bu['year_id']; ?>" target="new">  <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Print it</button></a></td>
                                           
                                                   
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                                

 

          
          
          
          
                   <div class="row">
     
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

                         
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

</div>