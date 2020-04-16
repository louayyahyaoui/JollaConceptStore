<?php 
include_once "../Core/panierC.php";
//session_start();
 

$produit1C=new panierC();
$listeProduits=$produit1C->afficherproduits();

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('logo3.png',10,10,30);
$pdf->Ln() ;

$pdf->Ln() ;
$pdf->SetFont('Arial','B',30);


$pdf->cell(200,20,'Product Recaptulation',0,0,'C');
$pdf->Ln() ;

$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Jolla Concept Store",0,0,'C');
$pdf->Ln();
$pdf->cell(325,10,"268 avenue habib bourguibaLe Kram",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"58888015 / 71277273",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(80,20,'Products out of stock:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,'Reference',1,0,'C');
$pdf->cell(40,10,'Nom',1,0,'C');
$pdf->cell(40,10,'Type',1,0,'C');

$pdf->Ln(); 

foreach ($listeProduits as $row) 
{
	$q=$row['Quantite'];
	if($q==0)
	{

    $pdf->cell(40,10,$row['Id'],1,0,'C'); 
	$pdf->cell(40,10,$row['Nom'],1,0,'C');
	$pdf->cell(40,10,$row['Type'],1,0,'C');
	$pdf->Ln();
	}
	
}



$pdf->SetFont('Arial','B',20);
$pdf->cell(97,20,'Products soon out of stock:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,'Reference',1,0,'C');
$pdf->cell(40,10,'Name',1,0,'C');
$pdf->cell(40,10,'Type',1,0,'C');
$pdf->cell(40,10,'Quantity',1,0,'C');


$pdf->Ln(); 


$produit2C=new panierC();
$liste=$produit2C->afficherproduits();

foreach ($liste as $nn) 
{
	$q=$nn['Quantite'];
	if(($q<5) &&($q!=0))
	{

    $pdf->cell(40,10,$nn['Id'],1,0,'C'); 
	$pdf->cell(40,10,$nn['Nom'],1,0,'C');
	$pdf->cell(40,10,$nn['Type'],1,0,'C');
	$pdf->cell(40,10,$q,1,0,'C');

	$pdf->Ln();
	}
	
}


$pdf->Output();
?>