<?PHP
//include "produit.php";
include "../core/paysC.php";


if (isset($_POST['Id']) and isset($_POST['Nom'])  )
{
  print_r($_FILES);
  $targetDir = "images/";
  $fileName = basename($_FILES['Image']['name']);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//echo $fileName."--";
//echo $targetFilePath;
  move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath); 
$Pays1=new Pays($_POST['Id'],$_POST['Nom'],$fileName);
$Pays1C=new PaysC();
$Pays1C->ajouterpays($Pays1);
echo " <br> pays ajoute";
header('Location: pays.php');


}
else{
  
  echo ("<script> alert(\"le pays existe deja \")</script>");
 echo("<script> document.location.replace(\"pays.html\")</script>");

}


?>

