
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
	
	/*
	 * Vertical bar chart demonstration
	 *
	 */

	include "../libchart/classes/libchart.php";
	
	
	
	include "../../dbc.php";
	$year=date("Y");
	$select="SELECT SUM(rec),month FROM daily  WHERE year='$year' GROUP by month";
	$run=mysql_query($select)or die(mysql_error());	
	$chart = new VerticalBarChart();

	$dataSet = new XYDataSet();
	while($rows=mysql_fetch_assoc($run)){
		
$dataSet->addPoint(new Point( $rows['month'], $rows['SUM(rec)']));
	$chart->setDataSet($dataSet);
	$year=date("Y");
	 
	

	$chart->setTitle("Monthly Finance Records for $year(Total Revenue Vrs Month)");
	$chart->render("generated/demo1.png");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Chart Representation</title>
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
	<img alt="Vertical bars chart" src="generated/demo1.png" style="border: 1px solid gray;"/>
    <br />
    X axis= Month<br />
    Y axis= Total Revenue
</body>
</html>
