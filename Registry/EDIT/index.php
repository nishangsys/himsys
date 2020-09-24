<?php
//include connection file 
include '../../includes/dbc.php';
$sql =$conn->query( "SELECT * FROM  special,segments where segments.dept_id=special.id order by special.prog_name ") or die(mysqli_error($conn));



  
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



<div class="container" style="padding:0px 10px;">

<div id="msg" class="alert" ></div>
<div style="clear:both; height:30px"></div>

<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" style="margin-top:-50px" cellspacing="0">
   <thead>
      <tr>
         <th>Program</th>
         <th>Degree Conferred</th>
         <th>Total Credit</th>
         <th>Duration</th>
		
      </tr>
   </thead>
   <tbody id="_editable_table">
      <?php while( $res=$sql->fetch_assoc()) { ?>
      <tr data-row-id="<?php echo $res['id'];?>">
         <td ><?php echo $res['prog_name'];?></td>
         <td ><?php echo $res['sname'];?></td>
         <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $res['credit'];?>"><?php echo $res['credit'];?></td>
         
          <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $res['dur'];?>"><?php echo $res['dur'];?></td>
         
         
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