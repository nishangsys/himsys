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
	
	<?php
		define('MAX_REC_PER_PAGE', 15);
		include '../dbc.php';
		$rs = mysql_query("SELECT COUNT(*) FROM customers") or die("Count query error!");
		list($total) = mysql_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysql_query("SELECT stu_name,reg_date,category,client_id FROM customers ORDER BY stu_name LIMIT $start, 
		$max") or die(mysql_error());
		$num=1;
	?>

	<table  width="100%">
		<tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>DATE REGISTERED</td>
    <TD>SEX</TD>
    <td>ASSIGN ROOM</td>
           
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
					<td> <?= htmlspecialchars($tel) ?></td>
					<td><?= htmlspecialchars($dor) ?></td>
                    <td>
                        <a href="frontpage.php?old=<?= htmlspecialchars($pof) ?>"  style="color:#f00">RE-Register me</a></td>

					
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