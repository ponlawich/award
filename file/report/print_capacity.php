<?
ini_set('memory_limit', '128M');
date_default_timezone_set('Asia/Bangkok');

require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    public function Header2() {
        // Set font
        $this->SetFont('thsarabun', '', 14);
		$this->Cell(0, 0, 'แบบฟอร์ม ๒', 0, false, 'R', 0, '', 0, false, 'T', '');		
		
    }
	public function Header(){
		$this->SetFont('thsarabun', '', 14);
		 $html = '<table><tr><td>&nbsp;แบบฟอร์ม ๒</td></tr></table>';
		 $this->writeHTMLCell($w = 20, $h = 0, $x = 270, $y = 5, $html, $border = 1, $ln = 1, $fill = 0, $reseth = true, $align = 'right', $autopadding = true);
  }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('MITC');
$pdf->SetTitle('RTARF KPI');
$pdf->SetSubject('RTARF KPI');
$pdf->SetKeywords('RTARF KPI');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
$pdf->setPrintHeader();
$pdf->setPrintFooter(false);

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
$pdf->AddPage('L', 'A4');

// create some HTML content

session_start();
//include('checklogin.php');
//include('includes/connect450.inc.php');
//include('includes/connectmysql.inc.php');
include('includes/function.inc.php');

$sql = "select * from kpi_info where person_id = '".$_SESSION['cid']."' order by id_info desc limit 1";
$query = @mysql_query($sql);
$result = @mysql_fetch_array($query);
$sql2 = "select * from kpi_capacity where person_id = '".$_SESSION['cid']."' and info_id = '".$result['id_info']."'";
$query2 = @mysql_query($sql2);
$result2 = @mysql_fetch_array($query2);
$comment_arr = explode("|", $result2[ca_comment]);
$mark_arr = explode("|", $result2[ca_mark]);
$sql3 = "select * from kpi_assess where person_id = '".$result['assess_id']."'";
$query3 = @mysql_query($sql3);
$result3 = @mysql_fetch_array($query3);

$html = '<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr style="font-size:18pt">
    <td width="100%" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="40%" valign="bottom"><table border="1" align="center" cellpadding="10" cellspacing="0">
            <tr>
              <td><div align="center"><strong>แบบประเมินพฤติกรรมการปฏิบัติราชการ  (สมรรถนะ)</strong></div></td>
            </tr>
          </table></td>
          <td width="25%" valign="bottom"><div align="center">ปีงบประมาณ '.toThaiNumber($result['budget_year']).'</div></td>
          <td width="12%" valign="bottom">รอบการประเมิน</td>
          <td width="10%" valign="bottom"><div align="center">1<img src="images/box_check.jpg" width="15" height="15" /> รอบที่ ๑</div></td><td width="10%" valign="bottom">1<img src="images/box.jpg" width="15" height="15" /> รอบที่ ๑</div></td><td width="10%" valign="bottom">1<img src="images/box_check.jpg" width="15" height="15" /> รอบที่ ๒<img src="images/box.jpg" width="15" height="15" /> รอบที่ ๒';
		  $html .= '</td>
        </tr>
      </table>
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr style="font-size:18pt">
          <td width="30%">ชื่อผู้รับการประเมิน (ยศ-ชื่อ-สกุล)</td>
          <td width="32%"></td>
          <td width="38%">ลงนาม <u>1</u></td>
        </tr>
        <tr style="font-size:18pt">
          <td>ชื่อผู้บังคับบัญชา / ผู้ประเมิน (ยศ-ชื่อ-สกุล)</td>
          <td>1</td>
          <td>ลงนาม <u>1</u></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br/><br/>
<table width="100%" border="1" cellspacing="0" cellpadding="10">
  <tr valign="middle">
    <td width="34%" valign="top"><div align="center"><strong>    สมรรถนะ</strong></div></td>
    <td width="7%" valign="middle"><div align="center"><strong>ระดับที่<br />
    คาดหวัง</strong></div></td>
    <td width="7%" valign="middle"><div align="center"><strong>คะแนน<br />
    (ก)</strong></div></td>
    <td width="7%" valign="middle"><div align="center"><strong>น้ำหนัก<br />
    (ข)</strong></div></td>
    <td width="15%" valign="middle"><div align="center"><strong>คะแนนถ่วงน้ำหนัก
      (ค)<br />
    (ค = ก x ข)</strong></div></td>
    <td width="30%" valign="middle"><div align="center"><strong>บันทึกการประเมินโดยผู้ประเมิน  (ถ้ามี และในกรณี<br />
      พื้นที่ไม่พอ 
    ให้บันทึกลงในเอกสารหน้าหลัง)</strong></div></td>
  </tr>
  <tr>
    <td><strong>สมรรถนะหลัก</strong><br />
    ๑. ความมีวินัยและเสียสละ</td>
    <td><div align="center"><br />1</div></td>
    <td><div align="center"><br />1</div></td>
    <td><div align="center"><br />
    ๐.๒</div></td>
    <td><div align="center"><br />1</div></td>
    <td><div align="left"><br/>1</div></td>
  </tr>
  <tr>
    <td>๒. จริยธรรม</td>
    <td><div align="center">1</div></td>
    <td><div align="center">1</div></td>
    <td><div align="center">๐.๒</div></td>
    <td><div align="center">1</div></td>
    <td><div align="left">1</div></td>
  </tr>
  <tr>
    <td>๓.  การมุ่งผลสัมฤทธิ์</td>
    <td><div align="center"><table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr style="font-size:18pt">
    <td><div align="center"><strong>บันทึกเพิ่มเติมประกอบแบบสรุปการประเมินพฤติกรรมการปฏิบัติราชการ  (สมรรถนะ)</strong></div></td>
  </tr>
  <tr>
    <td><p>๑. ความมีวินัยและเสียสละ <br />
    ____________________________________________________________________________________________________________________________________<br />
____________________________________________________________________________________________________________________________________</p>
    </td>
  </tr>
  <tr>
    <td><p>๒. จริยธรรม <br />
    ____________________________________________________________________________________________________________________________________<br />
____________________________________________________________________________________________________________________________________</p></td>
  </tr>
  <tr>
    <td><p>๓. การมุ่งผลสัมฤทธิ์ <br />
    ____________________________________________________________________________________________________________________________________<br />
____________________________________________________________________________________________________________________________________</p></td>
  </tr>
  <tr>
    <td><p>๔. ความร่วมแรงร่วมใจ <br />
    ____________________________________________________________________________________________________________________________________<br />
____________________________________________________________________________________________________________________________________</p></td>
  </tr>
  <tr>
    <td>๕.  การสั่งสมความเชี่ยวชาญในงานอาชีพ<br />
    ____________________________________________________________________________________________________________________________________<br />
____________________________________________________________________________________________________________________________________<br /></td>
  </tr>
</table>';
  
  // output the HTML content
  $pdf->writeHTML($html, true, false, true, false, '');
  
  // reset pointer to the last page
  $pdf->lastPage();
  
  // ---------------------------------------------------------
  
  //Change To Avoid the PDF Error 
  ob_end_clean();
  
  //Close and output PDF document
  $pdf->Output('capacity.pdf', 'I');
  
  //============================================================+
  // END OF FILE                                                
//============================================================+</p>
