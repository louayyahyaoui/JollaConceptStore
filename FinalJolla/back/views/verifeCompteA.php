<?PHP


		session_start();

$con=mysqli_connect("localhost","root","","jolla"); 
if (isset($_POST['mailS']))
{
	$maila=$_POST['mailS'];
	$passworda=$_POST['passwordS'];
	$sql="select * from compteadmin where MailA='".$maila."' and PasswordA='".$passworda."'  limit 1";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==1)
	{
   // echo "<script>alert('s');</script>"
		//var_dump($name);
   // echo "<script>alert('s');</script>";
		$sql="SElECT * From compteadmin where MailA='".$maila."' ";
		//$db = config::getConnexion();
		$liste=$con->query($sql);
		foreach ($liste as $row) {
			$name=$row['FirstNameA'];
			$last=$row['LastNameA'];

		}
		//var_dump($name);
   // echo "<script>alert('s');</script>";

	 $_SESSION["email"]=$name;
	 	//	var_dump($name);

	// $_SESSION["name"]=$name;
    header('Location: indexB.php');
//		echo "login";
	}
	else
	{
		  //  echo "<script>alert('s');</script>";
    header('Location: login.html');
   // echo "not,login";
	}
}

?>