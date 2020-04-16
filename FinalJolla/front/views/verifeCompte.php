<?PHP
		session_start();
		$con=mysqli_connect("localhost","root","","jolla"); 
if (isset($_POST['MailS']))
{	
	$maila=$_POST['MailS'];
	$passworda=$_POST['PasswordS'];
	$sql="select * from compter where mail='".$maila."' and password='".$passworda."'  limit 1";
//	var_dump($sql);
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==1)
	{
		$sql="SElECT * From compter where mail='".$maila."' ";
		//$db = config::getConnexion();
		$liste=$con->query($sql);
		foreach ($liste as $row) {
			$name=$row['FirstName'];
			$last=$row['LastName'];
			$idclient=$row['id_client'];
			$mailc=$row['Mail'];
			
	}
		//var_dump($name);
   // echo "<script>alert('s');</script>";
	 $_SESSION["lastname"]=$last;
	 var_dump($_SESSION["lastname"]);
	 $_SESSION["email"]=$name;
	 var_dump($_SESSION["email"]);
	 $_SESSION["idclient"]=$idclient;
	 $_SESSION["mailclient"]=$mailc;
    header('Location: index1.php');
    //echo "<script>alert('s');</script>";

//		echo "login";
	}
	else
	{
		  //  echo "<script>alert('s');</script>";
   // header('Location: index.html');
    //echo "not,login";
		echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"index.php\")</script>");
	}
}

?>