<?php
/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'../images/logo7.png';
		$this->Image($image_file, 10, 10, 55, '', 'png', '', 'M', false, 300, '', false, false, 1, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'N', 10);
		// Title
		$this->Cell(10, 5, ' Phone No. +91 7411853951, Emal : storescraft@storescraft.com, Skype :storescraft', 0, false, 'M', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 061', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
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

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

$tbl_header ='<table border="1" cellpadding="4">';
$tbl_footer = '</table>';
$tbl = '<tr><th style="background-color:red; color:white;">Pname</th><th>Brand</th><th>Manufracturer</th><th>Description</th><th>Short desc</th><th>Price</th></tr>';

if (!$link = mysql_connect('localhost', 'root', '')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('codeigniter', $link)) {
    echo 'Could not select database';
    exit;
}

foreach($result as $key => $val)
{
   echo $val;


$sql    = "SELECT ID, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image FROM products WHERE ID ='183'";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
      $pn = $row['ID'] ;
  $image = $row['image'];
  $suk = $row['category'];
  $cat = $row['brand'];
  $brands = $row['Product'];
  $manuf = $row['Productprice'];
  $desc = $row['Manfacturer'];
  $s_desc = $row['SKU'];
  $price = $row['unit_present'];
  $dt = $row['Description']; 
  $St = $row['ShortDescription']; 
  $IM = $row['uid']; 

$html = <<<EOF
<style>
table.first {
		color: #003300;
		font-family: helvetica;
		font-size: 8pt;
	}
	td {
		
		background-color: #F6E1BB;
		color:#606060;
		font-size:11px;
	}
	.image_display{
		width:150px;
		text-align:center;
	}
	.description_cell{
		width:340px;
	}
</style>

<table cellspacing="1" cellpadding="5" class="first">
<tr>
	<td class="image_display"><img src="http://localhost/CodeIgniter/uploads/$image" width="100" height="100"/></td>
	<td  rowspan="2" class="description_cell">
	<b>Description :</b>$dt <br />
	<b>Units:</b>$price <br />
	<b>Catagory :</b>$cat <br />
	<b>Product Name: </b>$brands <br />
	<b>Price :</b>$manuf<br />
	<b>Manfacturer :</b>$desc <br />
	</td>	
</tr>

</table>


EOF;

$pdf->writeHTML($html, true, false, true, false, '');

}
}

$pdf->lastPage();

$pdf->Output('example_061.pdf', 'I');
?>