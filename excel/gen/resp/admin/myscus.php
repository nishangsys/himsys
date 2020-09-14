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
		$rs = mysql_query("SELECT stu_name, tel,dor,pof, email,innum FROM customers group by stu_name ORDER BY stu_name ASC LIMIT $start, 
		$max") or die("Employee query error!");
		$num=1;
	?>

	<table  width="100%">
		<tr style="background:#1188aa; color:#fff">
        <th>S/N</th>
			<th>Name</th>
			<th>Tel No</th>
			<th>Date of Birth</th>
            <th>Nationality</th>
            <th>Email </th>
            <th>ID/Passport No</th>
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
					<td width="30%"><?php  echo  htmlspecialchars($name) ?></td>
					<td><?php  echo  htmlspecialchars($tel) ?></td>
					<td><?php  echo  htmlspecialchars($dor) ?></td>
                    <td><?php  echo  htmlspecialchars($pof) ?></td>
					<td><?php  echo  htmlspecialchars($email) ?></td>
                     <td><?php  echo  htmlspecialchars($innum) ?></td>
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
			<td ><?php  echo  $txt ?>&nbsp;&nbsp;</td>
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