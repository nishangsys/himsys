<?php
	/* Libchart - PHP chart library
	 * Copyright (C) 2005-2011 Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 * 
	 */
	
	/**
	 * Multiple horizontal bar chart demonstration.
	 *
	 */
	 
	include "../../includes/dbc.php";
	 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	 $year2=$bu['extra1'];
}

	include "../libchart/classes/libchart.php";
	$select="SELECT SUM(balance),class FROM historic  WHERE year_id='$ayear' GROUP by class";
	$run=mysql_query($select)or die(mysql_error());	

	$chart = new VerticalBarChart();

	$serie1 = new XYDataSet();
	while($rows=mysql_fetch_assoc($run)){
	$serie1->addPoint(new Point($rows['class'], $rows['SUM(balance)']));
	}
	$select2="SELECT SUM(amount_paid),class FROM historic  WHERE year_id='$ayear' GROUP by class";
	$run2=mysql_query($select2)or die(mysql_error());	
	
	$serie2 = new XYDataSet();
	while($row=mysql_fetch_assoc($run2)){
	$serie2->addPoint(new Point($row['class'], $row['SUM(amount_paid)']));
	
	}
	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Amount Owed", $serie1);
	$dataSet->addSerie("Amount Paid", $serie2);
	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphCaptionRatio(0.65);

	$chart->setTitle("Yearly Amount Paid Versus Amount Owed Stats for $ayear");
	$chart->render("generated/demo7.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart line demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />

 <style>
	body{
		font-family:Arial, Helvetica, sans-serif;
		font-weight:bold;
	}
	img {
		width:100%;
		height:800px;
		opacity:2.9;
	}
	</style>
</head>
<body>
	<img alt="Line chart" src="generated/demo7.png" style="border: 1px solid gray;"/>
</body>
</html>
