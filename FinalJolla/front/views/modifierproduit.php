
<?PHP
include "../core/panierC.php";
include "../entities/panier.php";

$produitC=new panierC();

if (isset($_POST["quantitee"])) {
echo "hello world" ;	
}



	if ((isset($_POST["id"]) && isset($_POST["quantitee"]) && isset($_POST["q1"])))
		
	{ 

	$produit1C=new panierC();
  	$produit1=$produit1C->recupererproduit($_POST["q1"]);
  	$info=$produit1->fetch();
  	$qq=$info["Quantite"];
  	var_dump($qq);
  	if($_POST["quantitee"] > $qq)
  	{ 

		echo ("<script> alert(\"La quantité demandée n'est pas disponible dans le stock\") </script>");
 		echo("<script> document.location.replace(\"checkout1.php\")</script>");

	}
	else 
	{
		$produitC->modifierquantite($_POST["quantitee"],$_POST["id"]);
		header('Location: checkout1.php');
	}
	
	}
	
?>