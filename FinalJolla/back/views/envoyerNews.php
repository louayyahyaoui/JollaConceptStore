<?php 
include "../config.php";
$db=mysqli_connect("localhost","root","","projet"); 
if (isset($_POST['titre']))
{
    $titre = 'Newletters'; 

  $maila=$_POST['titre'];
 // $passworda=$_POST['PasswordS'];
 //$sql="select * from newsletter where mailLetter='".$maila."'   limit 1";
  $sql="select * from newsletter";
    $db = config::getConnexion();
    $liste=$db->query($sql);
    $mail="";
foreach($liste as $row){
    $mail=$mail.$row['MailLetter'].",";
    }

$mail=substr($mail,0,-1);
//echo $mail;
    // $contenu = "oko okok"; 
  // envoi du mail HTML 
  $from = "From: Jolla <jassem.talbi@esprit.tn>\nMime-Version:"; 
  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n"; 
  // envoie du mail 
  mail($mail,$titre,$_POST['titre'],$from); 

   // echo "<script>alert('s');</script>";
   header('Location: indexB.php');
  //  echo "<script>alert('s');</script>";
       // echo'N°   '.$e_mail.' : envoyé avec succés!<br />'; 

 //echo "envoyer";

}
  else
  {
      //  echo "<script>alert('s');</script>";
   // header('Location: index.html');
    echo "not";
  }
?> 