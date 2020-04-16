<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";


if ( isset($_POST['DateDebut']) and isset($_POST['DateFin'])   )
{

$livraison1=new livraison($_POST['DateDebut'],$_POST['DateFin']);
$livraison1C=new LivraisonC();
$var = strftime('%Y-%m-%d',strtotime('+2 day'));
//$dure=$_POST['DateFin']-$_POST['DateDebut'];

if($_POST['DateFin']< $var)
{

	echo ("<script> alert(\"il faut que la date fin soit supperieur a la date debut \")</script>");
	echo ("<script> document.location.replace(\"checkout_livraison.php\")</script>");

}
else
{  $livraison2C=new LivraisonC();
    $idc=$livraison2C->recupererdernierID();
    $max=$idc->fetch();
    $max_row=$max["max"];
	session_start();
	if(isset($_SESSION["idclient"]))
	{
    $idclient=$_SESSION["idclient"];
	
    
	$livraison1C->ajouterLivraison($livraison1,$max_row,$idclient);
     echo $var;
     echo $_POST['DateFin'];
   // header('Location: check_afficherlivraison.php');
	 header('Location: Livrer.php');
   }

 }


}

else{
	echo ("<script> alert(\"erreur \") </script>");
 		echo("<script> document.location.replace(\"checkout_livraison.php\")</script>");
}


?>

