<?php
include "../core/reclamtionC.php";


if (isset($_POST['idclient']) and isset($_POST['idreclamation']) and isset($_POST['answers'])) {
$reclamation= new reclamtionC();

$mr=$reclamation->recpereMail($_POST['idclient']);
$id=$_POST['idreclamation'];
foreach ($mr as $row) {
$subject="answer of your reclamation(id de reclamation: ".$_POST['idreclamation'];
$header="From : Admin@gmail.com";
mail($row['Mail'],$subject,$_POST['answer'],$header);	
$reclamation->modifierReclamtion($id);
header('location: afficherreclamation.php');
}


}


?>