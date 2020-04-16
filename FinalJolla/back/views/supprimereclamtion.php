<?php include "../core/reclamtionC.php";




$reclamtionC1=new reclamtionC();
   
    	$reclamtionC1->supprimerReclamtion($_GET['id']);
    
	header('Location: afficherreclamation.php');
    	



?>