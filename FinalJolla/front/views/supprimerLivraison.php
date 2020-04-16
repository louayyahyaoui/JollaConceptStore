
<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["ID"])){
	$livraisonC->supprimerLiraison($_POST["ID"]);
	//echo "supprimé";
	header('Location: check_afficherlivraison.php');
}
else {
	echo"fail";
}
?>