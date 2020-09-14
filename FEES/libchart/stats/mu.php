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
	 * Line chart demonstration
	 *
	 */
	include "../../includes/dbc.php";
	include "../libchart/classes/libchart.php";
	
	$year=date("Y");
	$month=date("m");

	$chart = new LineChart();
	$select="SELECT SUM(exp),month FROM daily  WHERE year='$year'  GROUP by month";
	$run=mysql_query($select)or die(mysql_error());	

	$dataSet = new XYDataSet();
	while($rows=mysql_fetch_assoc($run)){
	$dataSet->addPoint(new Point($rows['month'], $rows['SUM(exp)']));
		
	$chart->setDataSet($dataSet);


	$chart->setTitle("Expenditure Trend for the $year financial Year");
	$chart->render("generated/demo5.png");
	}
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
		height:1000px;
		opacity:2.9;
	}
	</style>
</head>
<body>
	<img alt="Line chart" src="generated/demo5.png" style="border: 1px solid gray;"/>
</body>
</html>
