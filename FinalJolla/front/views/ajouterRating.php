<?php
include "../entities/rating.php";
include "../core/panierC.php";
session_start();
$ic=$_SESSION["idclient"];
if (isset($_POST['itemId']) and isset($_POST['rating']) and isset($_POST['title']) and isset($_POST['comment'])) {
if (isset($_SESSION["idclient"])) {
	$rating= new Rating($_POST['itemId'],$ic,$_POST['rating'],$_POST['title'],$_POST['comment']);
$ratingC= new panierC();
$ratingC->verifier($rating,$ic,$_POST['itemId']);
header('location: single.php?details='.$_GET['details']);
}


}
else echo "erreur";


?>