<?php 
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/commande.php";
include "../core/commandeC.php";
session_start();
if(isset($_SESSION["idclient"]) and isset($_SESSION["mailclient"]) and isset($_SESSION["email"]) and isset($_SESSION["lastname"]))
{


  $produitC=new panierC();
  $produit1=$produitC->recupererpanier($_SESSION["idclient"]);
  $count=$produitC->countpanier($_SESSION["idclient"]);
                  foreach($count as $row)
                    {
                      $c=$row["cnt"];
                    }
if($c==0)
{
  echo ("<script> alert(\"vous n'avez rien commander \") </script>");
echo("<script> document.location.replace(\"checkout1.php\")</script>");
}
else
{
  $tab=array();
  $somme=0;

  foreach ($produit1 as $row) 
  {
    array_push($tab,$row['prix']*$row['quantite']);
    $somme+=$row['prix']*$row['quantite'];
  }
$today=date("Y-m-d");
$commande1C=new commandeC();
$commande1= new commande($somme,$today);
$commande1C->ajoutercommande($commande1,$_SESSION["idclient"]); 
$from = "From: Jolla <jassem.talbi@esprit.tn>\nMime-Version:"; 
    $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n"; 
  // envoie du mail 
  $titre="Commande" ; 
  $text="Vous venez de passer une commande montant ".$somme." ";
var_dump($_SESSION["mailclient"])  ;
mail($_SESSION["mailclient"],$titre,$text,$from);
$Description="Mr/Mme    ".$_SESSION["email"]."       " .$_SESSION["lastname"]."    a effectue une commande ";
$Notification1=new Notification($Description);
$commande1C->ajouternotif($Notification1);
$lastID=$commande1C->recupererdernierID();
$max=$lastID->fetch();
$max_row=$max["max"];
var_dump($max_row); 

 $produit1=$produitC->recupererpanier($_SESSION["idclient"]);
    
    foreach($produit1 as $row)
    {$idproduit=$row["id"];
      $newq=$row["quantite"];
      $produit2=new panier($row["id"],$row["nom"],$row["prix"],$row["quantite"],$row["image"]);
      $produitC->ajoutercontenupanier($produit2,$max_row,$_SESSION["idclient"]);
      $louay=$produitC->recupererproduit($idproduit);
foreach ($louay as $row)
{
$q=$row["Quantite"];  
}
$siwar=$q-$newq;
$jassrm=$produitC->modifierp($siwar,$idproduit) ;
    }
    
    header('Location: checkout_livraison.php');
    $maha=$produitC->supprimerpanier($_SESSION["idclient"]);
     
}
}
else
{
echo ("<script> alert(\"vous n'etes pas connectés\") </script>");
    echo("<script> document.location.replace(\"index.html\")</script>");
}
?>