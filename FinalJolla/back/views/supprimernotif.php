
<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["id"])){
	$livraisonC->supprimerNotif($_POST["id"]);
	echo "supprimé";
	header('Location: indexB.php');
}
else {
	echo"fail";
}
?>