
<?PHP
include "../core/paysC.php";
$paysc=new PaysC();
if (isset($_POST["id"])){
	$paysc->supprimerpays($_POST["id"]);
	echo "supprimé";
	header('Location: Pays.php');
}
else {
	echo"fail";
}
?>