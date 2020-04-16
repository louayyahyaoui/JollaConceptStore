<?php
include "../core/CategorieC.php";


if (isset($_POST['nom']))     
{
  echo " <br> Categorie ajoute";
$categorie1=new Categorie($_POST['nom']);
$categorie1c=new CategorieC();
$categorie1c->rechercherCategorie($categorie1);
//echo " <br> Categorie ajoute";
header('Location: checkoutCategorie.php');


}
else{
  
  echo"try again ";

}
?>
