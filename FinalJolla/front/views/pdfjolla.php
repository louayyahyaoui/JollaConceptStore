<?php 
include_once "../Core/commandeC.php";
//session_start();
 if(isset($_POST["idc"]) )
{
$idrecup=$_POST["idc"];
}

$commande1C=new commandeC();
$m=$commande1C->recuperercommande($idrecup);
$commandes=$commande1C->recuperercontenucommande($idrecup);

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('logo3.png',10,6,30);
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
$pdf->cell(80,10,'Montant',1,0,'C');
$pdf->Ln(); 
$pdf->cell(60,10,$idrecup,1,0,'C');
foreach ($m as $row) {
	$pdf->cell(80,10,$row['montantCommande'],1,0,'C');
}

$pdf->Ln(20);
$pdf->SetFont('Arial','B',20);
$pdf->cell(70,10,'Contenu Commande :',0,0,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Ln();
$pdf->cell(40,10,'nom',1,0,'C');
$pdf->cell(60,10,'prix',1,0,'C');
$pdf->cell(70,10,'quantite',1,0,'C');
$pdf->Ln();
foreach ($commandes as $row) 
{
	$pdf->cell(40,10,$row['nom'],1,0,'C'); 
	$pdf->cell(60,10,$row['prix'],1,0,'C');
	$pdf->cell(70,10,$row['quantite'],1,0,'C');
	$pdf->Ln();
}
$pdf->cell(10,10,"Nb:Au cas d'annulation de la commande Veuillez nous envoyer un mail :jolla@gmail.com en presiciant l'identifiant de votre commande");


$pdf->Output();
?>