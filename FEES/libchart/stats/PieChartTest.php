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

	include "../libchart/classes/libchart.php";
	
	
			include "../../includes/dbc.php";
	 $year=date("Y");
	 
	 $select="SELECT COUNT(pof) as total from customers ";
	   $runs=mysql_query($select) or die ('could not updated:'.mysql_error());
	   while($row=mysql_fetch_assoc($runs)){
		  $gtot=$row['total'];
	   }	  
	$sel="SELECT COUNT(pof),pof  FROM customers where pof='Cameroonian' ";
	   $run1=mysql_query($sel) or die ('could not updated:'.mysql_error());

	

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	
	
	while($rows=mysql_fetch_assoc($run1)){
		 $tot=$rows['COUNT(pof)'];
	$dataSet->addPoint(new Point($rows['pof']."------> ".ROUND($tot)/($gtot )*100));
	
	$chart->setDataSet($dataSet);

	$chart->setTitle("Percenatge of each ");
	$chart->render("generated/demo3.png");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Nishang Sofwares</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
    
     <style>
	img {
		width:80%;
		height:600px;
	}
	</style>
    </head>
<body>
	<img alt="Pie chart"  src="generated/demo3.png" style="border: 1px solid gray;"/>
</body>
</html>
