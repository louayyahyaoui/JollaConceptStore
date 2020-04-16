
<?PHP
include "../core/livreurC.php";
$livreurC=new LivreurC();
if (isset($_POST["Cin"])){
	$livreurC->supprimerLivreur($_POST["Cin"]);
	echo "supprimé";
	//header('Location: checkout_choix.php');
}
else {
	echo"fail";
}
?>