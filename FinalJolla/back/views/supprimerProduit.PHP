
<?PHP
include "../core/promoC.php";
$promoC=new PromoC();
$produitc=new panierC();
$ID=$_POST["Id"];
$sql="SELECT id from promo  where idProd = $ID  ";
	$db = config::getConnexion();
	$idSuppr=$db->query($sql);
	
	foreach($idSuppr as $nn){
		$idsupp = $nn['id'];
	}
if (isset($_POST["Id"]) ){
	$promoC->supprimerPromo($idsupp);
	$produitc->supprimerproduit($_POST["Id"]);
	//echo "supprimé";
	header('Location: checkout_produit.php');
}
else {
	echo"fail";
}
?>