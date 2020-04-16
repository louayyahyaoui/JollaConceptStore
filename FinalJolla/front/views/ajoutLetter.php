<?PHP
include "../entities/Letter.php";
include "../core/CompteC.php";
if (isset ($_POST['mailletter']) and isset($_POST['mailletter']) == true and empty($_POST['mailletter']) == false){
	 $email=$_POST['mailletter'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true)
{
$letter1=new Letter($_POST['mailletter'] );
//Partie2

//var_dump($letter1);


//Partie3
$letter1C=new CompteC();
$letter1C->ajouterNewletter($letter1);
header('Location: index1.php');
//echo "<script>alert('verifie')</script>";
	  exit();

}else{
	echo ("<script> alert(\"votre email incorrect\")</script>");
 echo("<script> document.location.replace(\"index.php\")</script>");
}
}
?>