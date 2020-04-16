<?PHP
include "../core/eventsC.php";
$eventsC=new EventsC();
if (isset($_POST["id"])){
	$eventsC->supprimerEvents($_POST["id"]);
	header('Location: checkout_events1.php');
}

?>