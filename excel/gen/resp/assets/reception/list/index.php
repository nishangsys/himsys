<?php 
include('config.php'); 
$query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dependent DropDown List</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
</head>
 <link href="../style.css" rel="stylesheet" type="text/css" />
       

        
		<!--//webfonts-->
<body>
<form method="get">
	<label for="category">Parent Category</label>
    <select name="parent_cat" id="parent_cat">
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
        <?php endwhile; ?>
    </select>
    <br/><br/>
   

    <label>Sub Category</label>
    <select name="sub_cat" id="sub_cat"></select>
   
</form>
</body>
</html>
