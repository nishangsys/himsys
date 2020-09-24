<?php
require('fpdf.php');
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(255,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(125,30,20); /////for Top row lines legth and sizes

	
	//Header
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	
	$this->SetFont('Arial','',10);
	$a=1;
	foreach ($data as $eachResult) 
	{ //width
		$this->Cell(10);
		$this->Cell(125,6,$eachResult["fname"],1);///// for lines 
		$this->Cell(30,6,$eachResult["matric"],1);
		$this->Cell(20,6,$eachResult["ca"],1);
		
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();


$header=array('Name','Matricule','Ca');
//Data loading
//*** Load MySQL Data ***//
$objConnect = mysql_connect("localhost","nishang","google1234") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("university");

  $dm=mysql_query("SELECT * FROM subjects where id='".$_GET['code']."'  ") or die(mysql_error());
		
							
					while($bum=mysql_fetch_assoc($dm)){
						$title=$bum['title'];
						$course_code=$bum['code'];
					}
					
					 $select=mysql_query("SELECT * from levels,special,subjects where subjects.id='".$_GET['code']."'  AND subjects.prog_id=special.id AND subjects.level_id=levels.id  ") or die(mysql_error());
	while ($rows=mysql_fetch_assoc($select)){
		 $dept=$rows['prog_name'];
		 $level=$rows['levels'];
		 $subject=$rows['title'];
		 $code=$rows['code'];
	}
	$d=mysql_query("SELECT * FROM years where id='".$_GET['ayear']."'  ") or die(mysql_error());
							
					while($bu=mysql_fetch_assoc($d)){
						$year_name=$bu['year_name'];
					}
	
 $strSQL = "Select students.fname as fname, students.matricule as matric, my_marks.ca as ca from students,my_marks where my_marks.matric=students.matricule and my_marks.year_id='".$_GET['ayear']."' and my_marks.sem='".$_GET['sem']."' and my_marks.code='".$course_code."'  and my_marks.ca>0  GROUP BY students.matricule order by students.fname";
$objQuery = mysql_query($strSQL);
$resultData = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) {
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//


           
					$dept_name=$dept;///get department name
					$ayear=$year_name;//get academic year;
					$level=$level ." Ca Marks ";

//*** Table 1 ***//

$pdf->AddPage();




	$pdf->SetFont('Helvetica','',14);
	$pdf->Cell(8);
	$pdf->Write(5, "Program: $dept_name  Level $level for $ayear" );
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(8);
	$pdf->Cell(57);
	
	
	$pdf->Cell(0);
    $pdf->SetFontSize(12);
	$pdf->Write(5, "Course : $title ($course_code) Ca Marks   " );

	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>