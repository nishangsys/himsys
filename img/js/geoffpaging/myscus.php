<html>
	<head>
		<title>Embuscado Pagination</title>
	</head>

	<body>
	<div style="width:500px">
	<?php
		define('MAX_REC_PER_PAGE', 10);
		$db = mysql_connect("localhost", "root", "") or die("Couldn't connect to db!");
		mysql_select_db("db_embuscado_tester") or die("Couldn't select db!");
		$rs = mysql_query("SELECT COUNT(*) FROM employee") or die("Count query error!");
		list($total) = mysql_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysql_query("SELECT name, designation, salary FROM employee ORDER BY salary ASC LIMIT $start, 
		$max") or die("Employee query error!");
	?>

	<table border="1" width="100%">
		<tr>
			<th>Name</th>
			<th>Designation</th>
			<th>Salary</th>
		</tr>

		<?php
			while (list($name, $designation, $salary) = mysql_fetch_row($rs)) {
		?>
				<tr>
					<td width="30%"><?= htmlspecialchars($name) ?></td>
					<td><?= htmlspecialchars($designation) ?></td>
					<td><?= htmlspecialchars($salary) ?></td>
				</tr>
		<?php
			}
		?>
	</table>

	<table border="0" cellpadding="5" align="center">
		<tr>
			<td>Pages:</td>
			<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt=$i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
			?>			
			<td align="center"><?= $txt ?></td>
			<?php
				}
			?>
		</tr>
	</table>
	<hr>
	</div>
	</body>

</html>