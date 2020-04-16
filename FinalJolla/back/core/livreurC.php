<?PHP
include "../config.php";
class LivreurC {
function afficherLivreur ($livreur){
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "Adresse: ".$livreur->getAdresse()."<br>";
		echo "Ville: ".$livreur->getVille()."<br>";
		echo "NomEntreprise: ".$livreur->getNomEntreprise()."<br>";
		echo "Telephone: ".$livreur->getTelephone()."<br>";
		echo "Gouvernerat: ".$livreur->getGouvernerat()."<br>";
		echo "Email: ".$livreur->getEmail()."<br>";
		echo "Pays: ".$livreur->getPays()."<br>";
		echo "CodePostal: ".$livreur->getCodePostal()."<br>";
			
	}
	
	function ajouterLivreur($livreur){
		$sql="INSERT INTO  livreur (Cin,Nom,Prenom,Adresse , Ville,NomEntreprise,Telephone,Gouvernerat,Email,Pays,CodePostal) VALUES (:Cin, :Nom,:Prenom , :Adresse ,:Ville , :NomEntreprise,:Telephone, :Gouvernerat, :Email,:Pays, :CodePostal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Cin=$livreur->getCin();
        $Nom=$livreur->getNom();
        $Prenom=$livreur->getPrenom();
        $Adresse=$livreur->getAdresse();
        $Ville=$livreur->getVille();
        $NomEntreprise=$livreur->getNomEntreprise();
        $Telephone=$livreur->getTelephone();
        
        $Gouvernerat=$livreur->getGouvernerat();
        $Pays=$livreur->getPays();
        $Email=$livreur->getEmail();
        $CodePostal=$livreur->getCodePostal();
      
		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse); 
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':NomEntreprise',$NomEntreprise);
		$req->bindValue(':Telephone',$Telephone);
		
		$req->bindValue(':Gouvernerat',$Gouvernerat);
		$req->bindValue(':Pays',$Pays);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':CodePostal',$CodePostal);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivreurs($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livreur where idliv=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($cin){
		$sql="DELETE FROM livreur where Cin= :Cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivreur($livreur,$cin){
		$sql="UPDATE livreur SET Cin=:cinn, Nom=:Nom,Prenom=:Prenom,Adresse=:Adresse,Ville=:Ville , NomEntreprise=:NomEntreprise, Telephone=:Telephone,  Gouvernerat=:Gouvernerat, Email=:Email,Pays=:Pays,  Codepostal=:CodePostal WHERE Cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCin();
        $Nom=$livreur->getNom();
        $Prenom=$livreur->getPrenom();
        $Adresse=$livreur->getAdresse();
        $Ville=$livreur->getVille();
        $NomEntreprise=$livreur->getNomEntreprise();
        $Telephone=$livreur->getTelephone();
        
        $Gouvernerat=$livreur->getGouvernerat();
         $Email=$livreur->getEmail();
        $Pays=$livreur->getPays();
       
        $CodePostal=$livreur->getCodePostal();
       
		/*$datas = array( ':Cin'=>$cin,':cinn'=>$cinn, ':Nom'=>$Nom,':Prenom'=>$Prenom, ':Adresse'=>$Adresse,':Ville'=> $Ville, ':NomEntreprise'=>$NomEntreprise, ':Telephone'=>$Telephone,  ':Gouvernerat'=>$Gouvernerat, ':Email'=>$Email,':Pays'=>$Pays, ':CodePostal'=> $CodePostal);*/
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse);	
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':NomEntreprise',$NomEntreprise);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':Gouvernerat',$Gouvernerat);
	$req->bindValue(':Email',$Email);
		$req->bindValue(':Pays',$Pays);
	
		$req->bindValue(':CodePostal',$CodePostal);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}






















	
	function recupererLivreur($cin){
		$sql="SELECT * from livreur where Cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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
	
}

?>