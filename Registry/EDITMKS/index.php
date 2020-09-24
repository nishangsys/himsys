<?php
//include connection file 
include '../../includes/dbc.php';


		  $as=$conn->query("SELECT * FROM courses where roll='".$_GET['code']."'    ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 
			   $matric =$bs['matricule'];
			   $level=$bs['levels'];
			   $name=$bs['fname'];
			  
		 
          }
$sql =$conn->query( "SELECT * FROM `my_Registry` where matric='".$matric."' and levels='".$level."' and sem!='HND' order by roll ") or die(mysqli_error($conn));



  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<title>NISHANG SYSTEM</title>
</head>
<style>
body{
	line-height:1.8;
	font-size:14px;
}
table{
border-collapse:collapse;
border:1px solid#000;
}
th,td,tr{
border-collapse:collapse;
border:1px solid#000;
}
</style>
<body>


<div class="alert alert-info">
  <strong>Editing <?php echo $name; ?> Marks</strong> Note that Only
Crdit Value, Semseter and School Year Can be edited</div>

<div class="container" style="padding:0px 10px;">

<div id="msg" class="alert" ></div>
<div style="clear:both; height:30px"></div>


<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" style="margin-top:-50px" cellspacing="0">
   <thead>
      <tr>
         <th>Course Code</th>
          <th>Credit<br>
          Value</th>
         
         <th>Level</th>
         <th>Semester </th>
         <th>School Year</th>
         <th>Ca</th>
         <th>Exams</th>
		
      </tr>
   </thead>
   <tbody id="_editable_table">
      <?php while( $res=$sql->fetch_assoc()) { ?>
      <tr data-row-id="<?php echo $res['roll'];?>">
         <td class="editable-col" contenteditable="true" col-index='0' oldVal ="<?php echo $res['code'];?>"><?php echo $res['code'];?></td>
         <td class="editable-col" contenteditable="true" col-index='6' oldVal ="<?php echo $res['credit'];?>"><?php echo $res['credit'];?></td>
         
         <td class="editable-col" contenteditable="true" col-index='1' oldVal ="<?php echo $res['levels'];?>"><?php echo $res['levels'];?></td>
         <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $res['sem'];?>"><?php echo $res['sem'];?></td>
         
          <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $res['ayear'];?>"><?php echo $res['ayear'];?></td>
          
           <td class="editable-col" contenteditable="true" col-index='4' oldVal ="<?php echo $res['ca'];?>"><?php echo $res['ca'];?></td>
         
          <td class="editable-col" contenteditable="true" col-index='5' oldVal ="<?php echo $res['exam'];?>"><?php echo $res['exam'];?></td>
         
         
      </tr>
	  <?php } ?>
   </tbody>
</table>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$('td.editable-col').on('focusout', function() {
		data = {};
		data['val'] = $(this).text();
		data['id'] = $(this).parent('tr').attr('data-row-id');
		data['index'] = $(this).attr('col-index');
	    if($(this).attr('oldVal') === data['val'])
		return false;

		$.ajax({   
				  
					type: "POST",  
					url: "server.php",  
					cache:false,  
					data: data,
					dataType: "json",				
					success: function(response)  
					{   
						//$("#loading").hide();
						if(!response.error) {
							$("#msg").removeClass('alert-danger');
							$("#msg").addClass('alert-success').html(response.msg);
						} else {
							$("#msg").removeClass('alert-success');
							$("#msg").addClass('alert-danger').html(response.msg);
						}
					}   
				});
	});
});

</script>