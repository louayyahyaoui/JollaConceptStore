<?PHP
//include "../entities/Compte.php";
//include "../core/CompteC.php";
require_once __DIR__ . '/vendor/autoload.php';


//Partie2
$fmail=$_POST['mail'];
$ffirstname=$_POST['firstname'];
$flastname=$_POST['lastname'];
$fpassword=$_POST['password'];
 $mpdf=new \Mpdf\Mpdf();
 $data='';
 $data .='<h1>your detail</h1>';
 $data .='<strong> mail</strong> ' .$fmail. '<br/>';
 $data .='<strong> first name</strong> ' .$ffirstname. '<br/>';
 $data .='<strong> last name</strong> ' .$flastname. '<br/>';
 $data .='<strong> last password</strong> ' .$fpassword. '<br/>';
 $mpdf->WriteHTML($data);
 $mpdf->Output('myfile.pdf','D');
//var_dump($Compte1);
//    header('Location: login.html');

// echo '<a href='.index.html'> </a>';

?>