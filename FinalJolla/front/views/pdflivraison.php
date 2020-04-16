<?php 
include_once "../Core/livraisonC.php";

 $livraison2C=new LivraisonC();
    $idc=$livraison2C->recupererdernierliv();
    $max=$idc->fetch();
    $idrecup=$max["max"];

$liv1C=new LivraisonC();
$m=$liv1C->recupererLivraison($idrecup);

require('fpdfliv.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('images/logo3.png',10,6,30);
$pdf->SetFont('Arial','B',30);
$pdf->cell(200,10,'Facture',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Jolla Concept Store",0,0,'C');
$pdf->Ln();
$pdf->cell(325,10,"268 avenue habib bourguibaLe Kram",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"58888015 / 71277273",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(40,10,'Commande :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(60,10,'Identifiant',1,0,'C');
$pdf->cell(80,10,'Date Debut ',1,0,'C');
$pdf->cell(80,10,'Date Fin ',1,0,'C');
$pdf->Ln(); 

foreach ($m as $row) {
	$pdf->cell(60,10,$row['IDlivraison'],1,0,'C');
	$pdf->cell(80,10,$row['DateDebut'],1,0,'C');
	$pdf->cell(80,10,$row['DateFin'],1,0,'C');
	$pdf->Ln(20);
}

$pdf->cell(0,10,"Nb:Au cas d'annulation de la commande Veuillez nous envoyer un mail :jolla@gmail.com en presiciant l'identifiant de votre commande");


$pdf->Output();
?>