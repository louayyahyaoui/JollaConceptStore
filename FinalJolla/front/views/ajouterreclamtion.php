<?PHP
include "../entities/Reclamtion.php";
include "../core/reclamtionC.php";


$e=0;
session_start();

if (isset($_POST['object']) and isset($_POST['type']) and isset($_POST['Message']) )
{
	if(isset($_SESSION["idclient"]))
  {
$rec1=new Reclamtion($_SESSION["idclient"],$_POST['object'],$_POST['type'],$_POST['Message'],$e);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$rec=new reclamtionC();
$rec->ajouterReclamtion($rec1);
echo "reclamtion envoyer";
header('Location: contact.html');
	
}}else{
	echo "vérifier les champs";
}
//*/

?>