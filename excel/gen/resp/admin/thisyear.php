<html>
	<head>
		<title>Embuscado Pagination</title>
                <link href="../style.css" rel="stylesheet" type="text/css" />
                <style>
				th{
					text-align:center;
				}
				</style>

	</head>

	<body>
	
	<?php
		
		include '../dbc.php';
		$today=date('d-m-Y');
		
		$rs = mysql_query("SELECT * FROM customers WHERE reg_date='$today' ORDER BY stu_name ASC  ") or die(mysql_error());
		$num=1;
	?>

	<table  width="100%">
		<tr style="background:#1188aa; color:#fff">
        <th>S/N</th>
			<th>Name</th>
			<th>Tel No</th>
			<th>Date of Birth</th>
            <th>Nationality</th>
            <th>Email of Birth</th>
            <th>ID/Passport No</th>
		</tr>

		<?php
			while ($row=mysql_fetch_assoc($rs)) {
		?>
				<tr>
                 <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
                <td><?php echo $num++; ?>
					<td width="30%"><?= htmlspecialchars($name) ?></td>
					<td><?= htmlspecialchars($tel) ?></td>
					<td><?= htmlspecialchars($dor) ?></td>
                    <td><?= htmlspecialchars($pof) ?></td>
					<td><?= htmlspecialchars($email) ?></td>
                     <td><?= htmlspecialchars($innum) ?></td>
				</tr>
		<?php
			}
		?>
	</table>
<div style="width:600px; float:left; background:#eee; margin-top:20px; height:30px;">
	<div style="width:200px; float:left; height:30px; ">Pages:</div>
			<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt=$i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
			?>			
			<td ><?= $txt ?>&nbsp;&nbsp;</td>
			<?php
				}
			?>
		</tr>
	</table>
    </div>
	<hr>
	</div>
	</body>

</html>