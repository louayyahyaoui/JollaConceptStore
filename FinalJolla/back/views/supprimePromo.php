<?PHP
include "../core/promoC.php";
$promoC=new PromoC();
if (isset($_POST["id"])){
	$promoC->supprimerPromo($_POST["id"]);
	header('Location: check_out.php');
}

?>