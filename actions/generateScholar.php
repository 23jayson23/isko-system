<?php

require_once('../TCPDF-main/tcpdf.php');
require ('db_connect.php');

// $id = $_GET['user_id'];

// $get=$conn->query("SELECT * FROM `scholar` left join `coe` on coe.emp_id_coe = employee.id where employee.id=$id") or die(mysqli_error());
		
// 		if($get->num_rows > 0 ){
// 			$data = $get->fetch_array();
// 		}	
 /**
 * undocumented class
 */

class PDF extends TCPDF
{
    public function Header(){
        $imageFile = K_PATH_IMAGES.'tesdalogo.jpg';
        $this->Image($imageFile, 90, 10, 40, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->SetY(25);
        $this->setFont('helvetica', 'B', 12);
        $this->Cell(189, 5, 'TESDA Scholarship Monitoring System', 0, 1, 'C');
        $this->SetFont('helvetica', '', 8);
        $this->Cell(189, 3, '0917-479-4370 (text only)', 0, 1, 'C');
        $this->Cell(189, 3, '8887-7777', 0, 1, 'C');
        $this->Cell(189, 3, 'contactcenter@tesda.gov.ph', 0, 1, 'C');
        $this->SetFont('helvetica', 'B', 14);
        $this->Ln(2);
        // $this->Cell(189, 3, 'CERTIFICATION', 0, 1, 'C');
    }
    public function Footer(){
        date_default_timezone_set("Asia/Manila");
        $today = date("F j, Y/g:i A", time());
        $day = date("j");
        $month = date("F");
        $year = date("Y");

        $this->SetFont('helvetica','I',8);

        $this->SetY(-20);
        $this->Cell(25,5,'Generation Date/Time: '.$today,0,0,'L');
        $this->Cell(164,5,'Page '.$this->getAliasNumPage().' of '.$this->getAliasNumPage(),0,false,'R',0,'',0,false,'T','M');
    }
}


// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('TESDA Scholarship Monitoring System');
$pdf->SetTitle('Scholar Data');
$pdf->SetSubject('Scholar Data');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

$pdf->Ln(20);
$pdf->SetFont('times','BU',15);
$pdf->Cell(189, 3, 'Scholar Information', 0, 1, 'C');
// $pdf->Ln(10);
$pdf->SetFont('times','', 11);
// if ($data['emp_status'] == '1'){
//         $html = '<p style="text-align: justify;text-indent:40px;">This is to certify that<b> MR./MS. '. $data['firstname'].' '.$data['lastname'].' </b>is a bonafide employee of Teh Hsin Enterprise Phils. Corporation with employment records, as follows:</p>';
// } else {
//     $html = '<p style="text-align: justify;text-indent:40px;">This is to certify that<b> MR./MS. '. $data['firstname'].' '.$data['lastname'].' </b>has been an employee of Teh Hsin Enterprise Phils. Corporation with employment records, as follows:</p>';
// }
// $pdf->writeHTML($html,true,false,true,false,'');

$pdf->Ln(5);
$pdf->Cell(20);
$pdf->Cell(50, 10, 'Date Hired', 0, 0,);
// $pdf->Cell(10);
// $pdf->Cell(10, 10, ':', 0, 0);
// $pdf->Cell(10);
// $pdf->Cell(50, 10, date("F d, Y", strtotime($data['birthdate'])), 0, 1);
// $pdf->Cell(20);
// $pdf->Cell(50,10,'Official Designation / Position',0,0);
// $pdf->Cell(10);
// $pdf->Cell(10, 10, ':', 0, 0);
// $pdf->Cell(10);
// $pdf->Cell(50, 10, $data['position'], 0, 1);
// $pdf->Cell(20);
// $pdf->Cell(50,10,'Dept./Div./ Section',0,0);
// $pdf->Cell(10);
// $pdf->Cell(10, 10, ':', 0, 0);
// $pdf->Cell(10);
// $pdf->Cell(50, 10, $data['department'], 0, 1);
// $pdf->Cell(20);
// $pdf->Cell(50,10,'Reporting To',0,0);
// $pdf->Cell(10);
// $pdf->Cell(10, 10, ':', 0, 0);
// $pdf->Cell(10);
// $pdf->Cell(50, 10, '___________________', 0, 1);

// $pdf->Ln(5);
// $pdf->Cell(50,5,'Other employment Details:',0,1);
// $pdf->Cell(20);
// // $pdf->Cell(50,10,'During his employment, the employee has been assigned to perform and assist on various Electrician works as per operational requirement.',0,0);
// $pdf->Ln(5);
// $pdf->Cell(20);
// $pdf->MultiCell(150, 5, 'During his/her employment, the employee has been assigned to perform and assist on various Electrician works as per operational requirement.', 0, 'L', 0, 1, '', '', true);
// $pdf->Ln(5);
// // $pdf->SetAutoPageBreak(true);
// // $html = 'This certification is being issued for <i>his/her future employment application</i>.';
// // $pdf->WriteHTML($html);
// $pdf->SetFont('times','',10);
// $certification_text = 'This certification is being issued for';
// $pdf->Cell($pdf->GetStringWidth($certification_text),5,$certification_text,0,0);
// $pdf->SetFont('times','I',10);
// $app_text = ' his/her future employment application';
// $pdf->Cell($pdf->GetStringWidth($app_text),5,$app_text,0,0);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('test_scholar', 'I');
?>