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
	 * Pie chart demonstration
	 *
	 */
	 		include "../../includes/dbc.php";


	include "../libchart/classes/libchart.php";

	$chart = new PieChart();
	$year=date('Y');

$all="SELECT SUM(exp), SUM(rec) from daily where year='$year' ";
		$run=mysql_query($all) or die(mysql_error());
	
	$chart->getPlot()->getPalette()->setPieColor(array(
		new Color(255, 73, 60),
		new Color(25, 135, 245)
	));
	
	
	while($row=mysql_fetch_assoc($run)){
			 $rec=$row['SUM(rec)'];
			$exp=$row['SUM(exp)'];
			$total=$rec+$exp;
		
	

	$dataSet = new XYDataSet();
	
	;
	
	$dataSet->addPoint(new Point("Percentage Income received So far",($row['SUM(exp)'])));
	
	$dataSet->addPoint(new Point("Percentage Amount Clients Owed",($row['SUM(rec)'])));
	
	
	
	$chart->setDataSet($dataSet);

	$chart->setTitle("Percentage Income received/ Amount Outstanding for the Finance Year $year");
	$chart->render("generated/pie_chart_color.png");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart pie chart color demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Pie chart color test"  src="generated/pie_chart_color.png" style="border: 1px solid #FFF; width:400px; height:400px" />
</body>
</html>
