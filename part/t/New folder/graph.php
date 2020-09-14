<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Graph</title>

    </head>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script type="application/javascript" src="js/awesomechart.js"> </script>

<?php
mysql_select_db('staffs',mysql_connect('localhost','nishang','google1234'))or die(mysql_error());
?>
  
<body>

   
         

            <div class="container">

                <div class="row-fluid">
                   
                    <div class="span12">

                        <div class="hero-unit-table">   


                            <div class="charts_container">
                                <div class="chart_container">
<h1>Monthly Expenditure on Salaries Stats <?php ECHO $year=date('F Y') ?></h1>                                    <canvas id="chartCanvas1" width="1100" height="900">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>

                                </div>
                            </div>


	 
       

            
        </div>




                            <script type="application/javascript">

                                var chart1 = new AwesomeChart('chartCanvas1');


                                chart1.data = [
                                <?php
								$month=date('m');
								$year=date('Y');
                                $query = mysql_query("select SUM(salary),SUM(overtime),SUM(others),SUM(resp),
								SUM(rents),SUM(senior),SUM(trans),SUM(leaves),SUM(research) from payslips WHERE year='$year' GROUP BY month") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo $row['SUM(salary)']+$row['SUM(overtime)']+$row['SUM(others)']+$row['SUM(resp)']+
									$row['SUM(rents)']+$row['SUM(senior)']+$row['SUM(trans)']+$row['SUM(leaves)']+
									$row['SUM(research)'] . ','; ?>	
                                <?php }; ?>
                                ];

                                chart1.labels = [
                                <?php
                                $query = mysql_query("select * from payslips WHERE year='$year' GROUP BY month") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo "'" . $row['thismonth'] . "'" . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
                                chart1.randomColors = true;
                                chart1.animate = true;
                                chart1.animationFrames = 30;
                                chart1.draw();


                               
                            </script>


                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>



   
</body>
</html>


