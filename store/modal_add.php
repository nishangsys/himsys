	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="add_drinks.php" target="_blank" data-toggle="modal" style="text-decoration:none; color:#fff; padding:5px 10px">Click Here To Add Drink</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">LastName</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" placeholder="LastName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Address" required /></td>
						</tr>
					
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			