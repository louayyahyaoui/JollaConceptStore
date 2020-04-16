<?PHP
include "../core/promoC.php";


if (isset($_POST['idProd']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['prix_nouveau']) and isset($_POST['description'])){

	/*$targetDir = "images/";
	$fileName = basename($_FILES['image']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);*/
	$produit1C=new panierC();
	$listeProduits=$produit1C->afficherproduits();
	$promocc=new promoC();
	$listePromo=$promocc->afficherpromos();

	
    
$today=date("Y-m-d");
    $priiix=$_POST['prix_nouveau'];
	$yID=$_POST['idProd'];
    

	$sql="SELECT Prix from produit  where id = $yID  ";
	$db = config::getConnexion();
	$idPrix=$db->query($sql);
	
	foreach($idPrix as $nn){
		$prix = $nn['Prix'];
	}

	$tauxx=$promocc->calcultaux($prix,$priiix);

	if($priiix<$prix)
	{
		
	
$promo1=new promo($_POST['id'],$_POST['idProd'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix_nouveau'],$_POST['description'],$tauxx);


//var_dump($promo1);

//Partie3
$promo1C=new promoC();


if($_POST['date_fin']< $_POST['date_debut'])
{
	echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");

}
else if($today<$_POST['date_fin']){
$promo1C->ajouterPromo($promo1);
header('Location: check_out.php');
//echo ("$today=("y-m-d")");

}else
{

	echo("<script> alert(\"vérifier la date fin avec la date actuelle\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");
}
}else{
		
	echo("<script> alert(\"verifier le prix\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");


}
}

else{
	echo("<script> alert(\"verifier les champs\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");
}
//*/

?>