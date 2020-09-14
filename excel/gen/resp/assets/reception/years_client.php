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
 <script language="JavaScript" src="../js/pop-up.js"></script>

	<body>
	
	<?php
		define('MAX_REC_PER_PAGE', 15);
		$year=date('Y');
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
		$rs = mysql_query("SELECT room,name,month,date,howlong,level, yourid FROM finances  where year='$year' and yourid>0 GROUP BY name 
		ORDER BY month DESC LIMIT $start, 
		$max") or die(mysql_error());
		$num=1;
	?>

	<table  width="100%">
		<tr style="background:#1188aa; color:#fff">
        <th>S/N</th>
   <th>Room Occupied</th>
    <th>Name</th>
    <th>Month Checked In</th>
    <th>Date Check In</th>
   <th>For How Long</th>    
    <th>Checked Out</th>
    <th>Detailed Info</th>
		</tr>

		<?php
			while (list($room,$name,$month, $date, $howlong,$level,$yourid) = mysql_fetch_row($rs)) {
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
					<td >Room <?= htmlspecialchars($room) ?></td>
					<td><?= htmlspecialchars($name) ?></td>
                    <td><?= htmlspecialchars($month) ?></td>
					<td><?= htmlspecialchars($date) ?></td>
                    <td><?= htmlspecialchars($howlong) ?> days</td>
					<td><?= htmlspecialchars($level) ?></td>
                        <td>    <a href=javascript:popcontact('../reception/yourinfo.php?roll=<?= htmlspecialchars($yourid) ?>') style="color:#1188AA">View </a></td>

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