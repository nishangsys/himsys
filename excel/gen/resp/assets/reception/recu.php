<html>
	<head>
		<title>Embuscado Pagination</title>
                <link href="style.css" rel="stylesheet" type="text/css" />
                <style>
				th{
					text-align:center;
				}
				</style>

	</head>

	<body>
	
    
           <iframe src="search_rec.php" style="width:950px; height:200px; overflow:hidden"></iframe>
	<?php
		define('MAX_REC_PER_PAGE', 15);
		include '../dbc.php';
		$rs = mysql_query("SELECT COUNT(*) FROM finances") or die("Count query error!");
		list($total) = mysql_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysql_query("SELECT name, room,date,yourid FROM finances WHERE yourid>0 ORDER BY name ASC LIMIT $start, 
		$max") or die("Employee query error!");
		$num=1;
	?>

	<table  width="95%">
		<tr style="background:#1188aa; color:#fff">
        <th>S/N</th>
			<th>Name</th>
			<th>Room Occupied</th>
            <th>Date of transaction</th>
            <th>Print Receipt</th>
           
		</tr>

		<?php
			while (list($name, $tel, $dor,$pof,$email,$innum) = mysql_fetch_row($rs)) {
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
					<td>Room <?= htmlspecialchars($tel) ?></td>
					<td><?= htmlspecialchars($dor) ?></td>
                    <td><a href="print.php?roll=<?= htmlspecialchars($pof) ?>" target="_blank">Print</a></td>
					
                     <td></td>
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