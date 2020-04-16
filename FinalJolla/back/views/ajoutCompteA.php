<?PHP
include "../entities/CompteADMIN.php";
include "../core/CompteC.php";
if (isset($_POST['mailA']) and isset($_POST['firstNameA']) and isset($_POST['lastNameA']) and isset($_POST['passwordA']) and isset($_POST['rePasswordA'])  and ($_POST['passwordA'] == $_POST['rePasswordA']) and isset($_POST['mailA']) == true and empty($_POST['mailA']) == false   ){

	 $email=$_POST['mailA'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true){
$Compte1=new compteA($_POST['mailA'],$_POST['firstNameA'],$_POST['lastNameA'],$_POST['passwordA'],$_POST['rePasswordA']);


$sql="SElECT * From compteadmin";
$db = config::getConnexion();

$listeM=$db->query($sql);
$i=2;
foreach ($listeM as $ll) {
	if($email==$ll['MailA'])
	{
		$i=1;
		break;
	}
	else
	{
		$i=2;	
	}

}

if($i==2)
{
	$Compte1C=new CompteC();
$Compte1C->ajouterCompteADMIN($Compte1);

	//Partie3
header('Location: login.html');
}

else
{
	echo ("<script> alert(\" Mail deja exist\")</script>");
 	echo("<script> document.location.replace(\"register.html\")</script>");
}
//Partie2


//header('Location: afficherEmploye.php');
	
}

else{
	// header('Location: index.html');

 echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"register.html\")</script>");
 //header('Location: index.html');

}
}
else{
	// header('Location: index.html');

 echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"register.html\")</script>");
 }


?>