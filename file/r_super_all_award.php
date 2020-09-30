﻿<?PHP
  
ini_set('memory_limit', '128M');
date_default_timezone_set('Asia/Bangkok');

require_once('report/tcpdf/config/lang/eng.php');
require_once('report/tcpdf/tcpdf.php');

//***************************************************************************************************//


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF 
{

    public function Header2() 
	{
        // Set font
        $this->SetFont('thsarabun', '', 14);
		$this->Cell(0, 0, ' รายงานผลการจับรางวัลใหญ่ ', 0, false, 'R', 0, '', 0, false, 'T', '');		
		
    }
	public function Header()
	{
		 $this->SetFont('thsarabun', '', 14);
		 $html = '<table><tr><td>&nbsp;Award report</td></tr></table>';
		 $this->writeHTMLCell($w = 20, $h = 0, $x = 60, $y = 5, $html, $border = 1, $ln = 1, $fill = 0, $reseth = true, $align = 'right', $autopadding = true);
   }
	
	public function Footer() 
	{
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('thsarabun', 'B,I', 12);
        // Page number
        $this->Cell(0, 10, 'หน้า '.$this->getAliasNumPage().' จาก '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('little_bear');
$pdf->SetTitle('Award');
$pdf->SetSubject('Award_little_beaR');
$pdf->SetKeywords('Award_little_beaR');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(true);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('thsarabun', '', 16);

// add a page
$pdf->AddPage('P', 'A4');

	//session_start();
	include('func.php');
	$dataBuff = new Cl_award();

$txt = "";

		  $html = '
		  	<h2 align="center">รายชื่อผู้ได้รับรางวัลใหญ่</h2>
		  	
			<table border="1">
			<thead>
				<tr align="center">
					<td width="40"><b>ลำดับ</b>
					</td>
					<td width="200"><b>รางวัล</b>
					</td>
					<td width="200"><b>ผู้ได้รับ</b>
					</td>
					<td width="120"><b>หน่วย</b>
					</td>
					<td><b>หมายเหตุ</b>
					</td>
				</tr>
			</thead>
			<tbody>
		  ';
		  
			$ReadTable = $dataBuff->SQL_Select("	          
                            select 
														 gift_pick_award.name as g_name,
														 person.id,
	 													 person.name as p_name,
														 person.unit_show
													 from gift_pick_award
													 left join person
													 on person.id = gift_pick_award.person_id
													 order by gift_pick_award.id
											");	

					while ($row = $ReadTable->fetch_assoc()) 
					{
						$html.='<tr><td width="40" align="right">'.++$i.'&nbsp;&nbsp;</td><td width="200">&nbsp;'.$row['g_name'].'</td><td width="200">&nbsp;'.$row['p_name'].'</td><td width="120">&nbsp;'.$row['unit_show'].'</td><td></td>'.'</tr>';
					}
			
			
			
		  $html .= '</tbody>
		  			</table>
					<br>
					<br>
					<table border="0">
						<tr><td width="420"></td><td width="100">ผู้ตรวจสอบ</td></tr>
						<tr><td width="480"></td><td width="140">(</td><td width="20">)</td></tr>
						<tr><td width="430"></td><td width="100">ตำแหน่ง</td></tr>
					</table>
					<p>Print time : '.date("Y/m/d")." ".date("h:i:sa").'</p>';
  

  // output the HTML content
  $pdf->writeHTML($html, true, false, true, false, '');
  
  // reset pointer to the last page
  $pdf->lastPage();
  
  //Change To Avoid the PDF Error 
  ob_end_clean();
  
  //Close and output PDF document
  $pdf->Output('capacity.pdf', 'I');
  



   
?>