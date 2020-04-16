<?PHP

include "../core/eventsC.php";

if (isset($_POST['name']) and isset($_POST['address']) and isset($_POST['phone']) and isset($_POST['informations'])and isset($_POST['DateDebut'])and isset($_POST['DateFin'])){
	$targetDir = "images/";
	$fileName = basename($_FILES['photo']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  //echo $fileName."--";
  //echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['tmp_name'],$targetFilePath);

	$events1=new Events($_POST['id'],$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['informations'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['photo']);

$today=date("Y-m-d");
$datef=$_POST['DateFin'];

$events1C=new EventsC();

if($_POST['DateFin']< $_POST['DateDebut'] )
{
	echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");

}
else
if ($datef> $today){
$events1C->ajouterEvents($events1);
//echo"ajout avec success";

header('Location: checkout_events1.php');
}else
{
echo("<script> alert(\"vérifier la date !!\")</script>");
	echo("<script> window.location.replace(\"check_out.php\")</script>");


}	
}else{
	echo "vérifier les champs";
}
//*/

?>



