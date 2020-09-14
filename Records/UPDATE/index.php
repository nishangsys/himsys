<?php
//include connection file 
include '../../includes/dbc.php';
$sql =$con->query( "SELECT * FROM `settings` order by prog ") or die(mysqli_error($con));



  
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

<div id="msg" class="alert"></div>
<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" style="margin-top:-50px" cellspacing="0">
   <thead>
      <tr>
         <th>Program</th>
         <th>id</th>
         <th>Fees</th>
         <th>Registratiion</th>
		 <th>Section</th>
         <th>T-shirt</th>
         <th>Student Union</th>
      </tr>
   </thead>
   <tbody id="_editable_table">
      <?php while( $res=$sql->fetch_assoc()) { ?>
      <tr data-row-id="<?php echo $res['id'];?>">
         <td class="editable-col" contenteditable="true" col-index='0' oldVal ="<?php echo $res['prog'];?>"><?php echo $res['prog'];?></td>
         <td class="editable-col" contenteditable="true" col-index='1' oldVal ="<?php echo $res['ids'];?>"><?php echo $res['ids'];?></td>
         <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $res['fees'];?>"><?php echo $res['fees'];?></td>
         
          <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $res['reg'];?>"><?php echo $res['reg'];?></td>
          <td class="editable-col" contenteditable="true" col-index='4' oldVal ="<?php echo $res['others'];?>"><?php echo $res['others'];?></td>
          <td class="editable-col" contenteditable="true" col-index='5' oldVal ="<?php echo $res['tshirt'];?>"><?php echo $res['tshirt'];?></td>
          
          <td class="editable-col" contenteditable="true" col-index='5' oldVal ="<?php echo $res['adminp'];?>"><?php echo $res['adminp'];?></td>
          <td class="editable-col" contenteditable="true" col-index='6' oldVal ="<?php echo $res['sunion'];?>"><?php echo $res['sunion'];?></td>
        
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