<?PHP 
include "../core/reclamtionC.php";
include "../entite/Reclamtion.php";
$id=5;
$e=0;
$reclamation=new Reclamtion($id,$_POST['object'],$_POST['type'],$_POST['Message'],$e);
	$reclamationC= new reclamtionC();
	$reclamationC->modifierReclamtion($reclamation,$id);
	echo "reclamation modifie";
	header('Location: afficherReclamtion.php');

?>