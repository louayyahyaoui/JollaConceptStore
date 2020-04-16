<?PHP
include "../config.php";

class CompteC {

function afficherCompte ($compte){
		echo "Mail: ".$compte->getMail()."<br>";
		echo "FirstName: ".$compte->getFirstName()."<br>";
		echo "LastName: ".$compte->getLastName()."<br>";
		echo "PassWord: ".$compte->getPassWord()."<br>";
		echo "RePassWord: ".$compte->getRePassWord()."<br>";
	}
	function ajouterCompte($compte){
		$sql="insert into compter  (Mail,FirstName,LastName,PassWord,RePassWord) values (:mail,:firstname,:lastname,:password,:repassword)  ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Ml=$compte->getMail();
        $FName=$compte->getFirstName();
        $LName=$compte->getLastName();
        $Pa=$compte->getPassWord();
        $Re=$compte->getRePassWord();
		$req->bindValue(':mail',$Ml);
		$req->bindValue(':firstname',$FName);
		$req->bindValue(':lastname',$LName);
		$req->bindValue(':password',$Pa);
		$req->bindValue(':repassword',$Re);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
		function ajouterNewletter($Letter){
		$sql="insert into newsletter  (MailLetter) values (:mailletter)  ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ML=$Letter->getMailLetter();
       
        //$Pa=$compte->getPassWord();
        //$Re=$compte->getRePassWord();
		$req->bindValue(':mailletter',$ML);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function ajouterCompteADMIN($compteA){
		$sql="insert into compteadmin (MailA,FirstNameA,LastNameA,PasswordA,RePasswordA) values (:MailA,:FirstNameA,:LastNameA,:PasswordA,:RePasswordA)  ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Ml=$compteA->getMailA();
        $FName=$compteA->getFirstNameA();
        $LName=$compteA->getLastNameA();
        $Pa=$compteA->getPassWordA();
        $Re=$compteA->getRePassWordA();
		$req->bindValue(':MailA',$Ml);
		$req->bindValue(':FirstNameA',$FName);
		$req->bindValue(':LastNameA',$LName);
		$req->bindValue(':PasswordA',$Pa);
		$req->bindValue(':RePasswordA',$Re);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function verifieCompte(){
		$sql=" SElECT * From compter  where PassWord=PasswordS and Mail=MailS ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $Ml=$compte->getMail();
        $Pa=$compte->getPassWord();
		$req->bindValue(':Mail',$Ml);
		$req->bindValue(':PasswordS',$Pa);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherCompteclient(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From compter order by id_client DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	} 
	function afficherCompteadmin(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From compteadmin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	} 
	 function supprimerCompte($mail){
		$sql="delete from compteadmin where MailA= :Mailsu";
		$db = config::getConnexion();
       
		try{
		$req=$db->prepare($sql);
       // $Ml=$mail->getMailA();
		$req->bindValue(':Mailsu',$mail);
        $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
	function affichernotif(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From notification order by Id_Not ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

      function afficherNews(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From newsletter order by MailLetter ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

        function supprimernotif($id){
		$sql="DELETE FROM Notification where Id_Not= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
	
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function countnotification()
	{
		$sql="select count(*) as cnt from notification ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
/*	function modifierEmploye($employe,$cin){
		$sql="UPDATE Compte SET Mail=:mail, FirstName=:firstname,LastName=:lastname,PassWord=:password,RePassword=:RePassword WHERE Mail=:mail";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	} */
	 /*function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} */
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/
}

?>