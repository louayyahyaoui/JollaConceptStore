<?PHP
include "../entities/livreur.php";

include "../core/livreurC.php";
 
$livraison2C=new LivreurC();
    $idc=$livraison2C->recupererdernierliv();
    $max=$idc->fetch();
    $max_row=$max["max"];
    
 
session_start();
if (isset($_POST['Cin']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Adresse']) and isset($_POST['Ville']) and isset($_POST['NomEntreprise'])and isset($_POST['Telephone']) and isset($_POST['Gouvernerat']) and isset($_POST['Email']) and isset($_POST['Pays']) and isset($_POST['CodePostal']) )
{
  if(isset($_SESSION["idclient"]))
  {


$livreur1=new Livreur($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Ville'],$_POST['NomEntreprise'],$_POST['Telephone'],$_POST['Gouvernerat'],$_POST['Email'],$_POST['Pays'],$_POST['CodePostal']);
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1,$_SESSION["idclient"], $max_row);
//echo " <br> livreur ajoute";
/****************notif*************************/
$Description="Mr/Mme    ".$_POST['Nom']."       " .$_POST['Prenom']."    a effectue une livraison ";
$Notification1=new Notification($Description);

$livraison2C->ajouternotif($Notification1);


/*--------------------------*/
$titre = 'Message '; 
$mail=$_POST['Email'];
//$mail=substr($mail,0,-1);
$message="Vous avez ajoute une livraison sous le nom de ";
//echo $mail;
    // $contenu = "oko okok"; 
  // envoi du mail HTML 
  $from = "From: Jolla <jassem.talbi@esprit.tn>\nMime-Version:"; 
  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n"; 
  // envoie du mail 
  mail($mail,$titre,$message,$from); 




/************************************/




/*******************notif********************/



echo "sahiiiiiit";
 header('Location: index1.php');


}




    }
else{
  echo "try again  ";
  echo ("<script> alert(\"try again \") </script>");
   echo("<script> document.location.replace(\"Livrer.php\")</script>");

}



?>

