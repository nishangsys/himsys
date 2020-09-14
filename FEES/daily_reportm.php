
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


  <?php
  if(isset($_POST['ok'])){
	  $matric=$_POST['user_name'];
	  		$result= $dbcon->query("select  * from historic where matricule='$matric' and year_id='$ayear' order by student_name" ) or die (mysqli_error($dbcon));
  }
  else {
	  		$result= $dbcon->query("select  * from historic where student_name!='' and year_id='$ayear' order by student_name" ) or die (mysqli_error($dbcon));
  }
  ?>
	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                                          <th style="text-align:center;">Matricule</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                         
                            
                                   
                   <th style="text-align:center;">Action</th>
                                                  

                                </tr>
                            </thead>
                            <tbody>
								<?php
							
							
								$num=1;
								while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row['student_name']; ?></td>
                                                        <td style="text-align:center; word-break:break-all; width:130px;"> <?php echo $row ['matricule']; ?></td>

								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['amountpaid']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $lev=$row ['time']; ?></td>
                                    
								
                                       
			
            <td style="text-align:center; word-break:break-all; width:100px;">					
                   
       <a href="?uname=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>&levelss=<?php echo $lev; ?>">      <button type="button" class="btn btn-primary btn-sm">UPDATE</button> </a>    </td>     
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
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