
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


     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                
        </h3>
        <?php
		 $ayear;
		 $d=$dbcon->query("SELECT * from levels,special,years,students,our_accounts,daily  where  year_id='$ayear' AND   daily.exp='' and daily.rec>0 AND daily.method=our_accounts.id  AND daily.cust_id= students.matricule AND students.level_id=levels.id and students.dept_id=special.id AND daily.cust_id='".$_GET['id']."' AND students.year_id=years.id  
		 ") or die(mysqli_error($dbcon));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Student</th> <th>Receipt Num</th>
                <th>Purpose</th>                                <th>Amt Paid</th>
                                                                                                                            

                                            <th>Date</th>
                                            
                                                <th>Amt Paid</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td style="text-transform:capitalize"><?php  echo $bu['staffname']; ?></td>
<td><?php  echo $bu['matricule']; ?></td> <td><?php  echo $bu['reason']; ?></td>                                                        
                                                         <td><?php  echo $bu['rec']; ?></td>
                                                              <td><?php  echo $bu['date']; ?></td>
                                           
                                                         <td><a href="../Cash/print.php?id=<?php  echo $bu['id']; ?>" target="new">  <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Print it</button></a></td>
                                           
                                                   
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

       <?php
	   /*
	   if(isset($_GET['delete'])){
	   $id=$_GET['delete'];
	   $name=$_GET['name'];
	   $year_id=$_GET['ayear'];
	   $result12= $dbcon->query("delete from historic where roll='$id' " ) or die(mysqli_error($dbcon)) ;
	     $result123= $dbcon->query("delete from students where fname='$name' and year_id='$ayear' " ) or die(mysqli_error($dbcon)) ;
		 echo "<script>alert('Delete Successfull')</script>";
	   }
	   */
	   ?>
</div>