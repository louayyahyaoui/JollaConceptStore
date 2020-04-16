<?PHP
include "../core/reclamtionC.php";
$reclamtionC1=new reclamtionC();
    $id=5;
	$reclamtionC1->supprimerReclamtion($id);
	header('Location: afficherReclamtion.php');
	echo "reclamtion supprimee";
	header('Location: afficherReclamtion.php');


?>