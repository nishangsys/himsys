<html>
	<head>
		<title>Embuscado Pagination</title>
                <link href="../style.css" rel="stylesheet" type="text/css" />
                <style>
				th{
					text-align:center;
				}
				</style>
                

	<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
<script type="text/javascript">

    function do_this(){

        var checkboxes = document.getElementsByName('users[]');
        var button = document.getElementById('toggle');

        if(button.value == 'select'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select';
        }
    }
</script>

</head>
	<body>
	
	<?php
	include '../dbc.php';
		define('MAX_REC_PER_PAGE', 45);
		
		$rs = mysql_query("SELECT COUNT(*) FROM products") or die("Count query error!");
		list($total) = mysql_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysql_query("SELECT pro_id,product, price,serial,quatity FROM products  ORDER BY product  LIMIT $start, 
		$max") or die(mysql_error());
		$num=1;
	?>
   <form name="frmUser" method="post" action="">
	<table  width="100%">
		<tr style="background:#088389; color:#fff">
    

<td><input type="checkbox" id="toggle" value="select" onClick="do_this()" />Select all</td>
<th>Product</th>
<th>Selling Price</th>
<th>Qunatity</th>
<th>Cost Price</th>
<th>Total</th>
<th>hidden</t>
<?php
$i=1;

while($row = mysql_fetch_array($rs)) {
	
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">

		<?php
while($row = mysql_fetch_array($rs)) {
			?>
				

<td><input type="checkbox" name="users[]"  value="<?php echo $row["pro_id"]; ?>" ></td>
<td><?php echo $row["product"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["quatity"]; ?></td>
<td><?php echo $row["serial"]; ?></td>
<td><?php echo $row["total"]; ?></td>
				</tr>
		<?php
			$i++;
}
}
		?>
        <tr class="listheader" style="position:absolute; right:100px; top:50%">
<td colspan="4"><input type="button" style=" position: fixed;
    bottom: 0;
    right: 0; top:20px; " name="update" value="Update Selected" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete" style="width:100px; padding:10px 10px"  onClick="setDeleteAction();" /></td>
</tr>
	</table>
<div style="width:98%; float:left; background:#088389; 
margin-top:20px; height:auto; color:#fff; font-size:14px; font-weight:bold; overflow:hidden">
	<div style="width:100%;color:#fff; font-size:14px; font-weight:bold; float:left; height:auto; overflow:hidden; padding:10px 10px; ">Pages:</div>
			<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt=$i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\"><span style='color:#fff; font-size:18px'>$txt..</span></a>";
			?>			
			<td ><?php  echo  $txt ?>&nbsp;&nbsp;</td>
			<?php
				}
			?>
		</tr>
	</table>
    </form>
    </div>
	<hr>
	</div>
	</body>

</html>