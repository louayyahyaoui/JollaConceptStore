<?PHP
include "../core/panierC.php";
$produitC=new panierC();
if (isset($_POST["id"]))
{
$produitC->supprimerproduit(($_POST["id"]));
	header('Location: checkout1.php');
}

?>