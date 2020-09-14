<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NISHANG SYSTEM PRINTS</title>
<link href="datatables.min.css" type="text/css" rel="stylesheet"/>
 
<script type="text/javascript" src="datatables.min.js"></script>

	
	<div class="container" style="padding:20px; background:#eee; width:75%; margin:auto">
      <div class="">
        <h1>ATTENDANCE SHEET </h1>
        <div class="">
		<table id="employee_grid" class="display" width="800" cellspacing="0">
        <thead>
            <tr>
                <td style="text-align:center; width:20px" >S/N</th>
                                <td style="text-align:center" >Name</th>
                                		<th  style="text-align:center">Date</th>
				<th style="text-align:center">Checkin</th>
                <th  style="text-align:center">Check out</th>
		
                <th  style="text-align:center">Hours<br>Used</th>
                 <th  style="text-align:center">Minutes<br>Used</th>
               
                
          
            </tr>
        </thead>
 
        <tfoot>
             <tr>
        
                <td style="text-align:center" >Name</th>
                                <td style="text-align:center" >DATE</th>

				<th style="text-align:center">Checkin</th>
                <th  style="text-align:center">Check out</th>
				<th  style="text-align:center">Minutes Used</th>
                <th  style="text-align:center">Hours<br>Used</th>
               
      
                 <th  style="text-align:center">Minutes<br>Used</th>
                         
          
        </tfoot>
    </table>
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
		 "processing": true,
         "sAjaxSource":"response.php",
		 "dom": 'lBfrtip',
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
        });
});
</script>
