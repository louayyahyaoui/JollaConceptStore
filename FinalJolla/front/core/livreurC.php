<?PHP
include "../config.php";
include "../entities/notification.php";

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
	
	function ajouterLivreur($livreur ,$id,$idli){
		$sql="INSERT INTO  livreur (Cin,Nom,Prenom,Adresse , Ville,NomEntreprise,Telephone,Gouvernerat,Email,Pays,CodePostal,idclient,idliv) VALUES (:Cin, :Nom,:Prenom , :Adresse ,:Ville , :NomEntreprise,:Telephone, :Gouvernerat, :Email,:Pays, :CodePostal , :idclient,:idli)";
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
         $req->bindValue(':idclient',$id);
		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse); 
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':NomEntreprise',$NomEntreprise);
		$req->bindValue(':Telephone',$Telephone);
		 $req->bindValue(':idli',$idli);
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
	
	function afficherLivreurs($id,$idli){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livreur where idclient=$id and idliv=$idli";
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



	
	function recupererClient($id){
		$sql="SELECT * from compter where id_client=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}









      function recupererdernierliv()
	{
		$sql="SELECT MAX(IDlivraison) as max from livraison";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}









	
	function recupererLivreur($cin ){
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


   function countpanier($idclient)
	{
		$sql="select count(*) as cnt from panier where idclient=$idclient ";
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

	function afficherpays(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From pays ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}








    function ajouternotif($notif){
		$sql="INSERT INTO  notification (Id_Not,Description) VALUES (:id_not, :description )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_not=$notif->getId();
        
       
        $description=$notif->getDescription();
        
        
       
      
		$req->bindValue(':id_not',$id_not);
		
		
		$req->bindValue(':description',$description); 
		
		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



	
}

?>