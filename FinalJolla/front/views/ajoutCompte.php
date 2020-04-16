<?PHP
include "../entities/Compte.php";
include "../core/CompteC.php";

if (isset($_POST['mail']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['password']) and isset($_POST['repassword']) and ($_POST['password'] == $_POST['repassword']) and isset($_POST['mail']) == true and empty($_POST['mail']) == false ){


	 $email=$_POST['mail'];
	 
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true)
{
$Compte1=new compte($_POST['mail'],$_POST['firstname'],$_POST['lastname'],$_POST['password'],$_POST['repassword']);

	require_once __DIR__ . '/vendor/autoload.php';


$sql="SElECT * From compter";
$db = config::getConnexion();

$listeM=$db->query($sql);
$i=2;
foreach ($listeM as $ll) {
	if($email==$ll['Mail'])
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
		$fmail=$_POST['mail'];
	$ffirstname=$_POST['firstname'];
	$flastname=$_POST['lastname'];

	$fpassword=$_POST['password'];
	 $mpdf=new \Mpdf\Mpdf();
	 $data='';
	 $data.='<img src="logo3.png" alt="logo Jolla">';
	 //$data->Image('logo3.png',10,6,30);
	 $data .='<h1>your detail</h1>';
	 $data .='<strong> mail</strong> ' .$fmail. '<br/>';
	 $data .='<strong> First Name</strong> ' .$ffirstname. '<br/>';
	 $data .='<strong> last Name</strong> ' .$flastname. '<br/>';

	 $data .='<strong>  password</strong> ' .$fpassword. '<br/>';
	 $mpdf->WriteHTML($data);
	 $mpdf->Output('myfile.pdf','D');



	//Partie3
	$Compte1C=new CompteC();
	$Compte1C->ajouterCompte($Compte1);

   $Description="Mr/Mme  le client    ".$_POST['firstname']."       " .$_POST['lastname']."    a ajoute un compte ";
$Notification1=new Notification($Description);

$Compte1C->ajouternotif($Notification1);





}

else
{
	echo ("<script> alert(\" Mail deja exist\")</script>");
 	echo("<script> document.location.replace(\"index.php\")</script>");
}
//Partie2


//header('Location: afficherEmploye.php');
	
}

else{
	// header('Location: index.html');

 echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"index.php\")</script>");
 //header('Location: index.html');

}
}
else{
	// header('Location: index.html');

 echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"index.php\")</script>");
 }


?>