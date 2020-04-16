<?PHP
include "../core/CompteC.php";
$compteC=new CompteC();
if (isset($_POST["Mailsu"])){
	$compteC->supprimerCompte($_POST["Mailsu"]);
	header('Location: affichageadmin.php');
}
else
{
	//	header('Location: .html');
  echo ("<script> alert(\"le compte n'est pas supprimer\")</script>");
 echo("<script> document.location.replace(\"affichageadmin.php\")</script>");
}

?>