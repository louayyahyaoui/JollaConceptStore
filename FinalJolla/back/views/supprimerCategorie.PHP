
<?PHP
include "../core/CategorieC.php";
$categorie1c=new CategorieC();
if (isset($_POST["Id"])){
	$categorie1c->supprimerCategorie($_POST["Id"]);
	echo "supprimé";
	header('Location: checkoutCategorie.php');
}
else {
	echo"fail";
}
?>