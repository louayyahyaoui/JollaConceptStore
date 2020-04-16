<?PHP
include "../config.php";

class reclamtionC {
function afficherReclamtion ($reclamtion){
		echo "Id_client: ".$reclamtion->getId()."<br>";
		echo "Objet: ".$reclamtion->getObjet()."<br>";
		echo "type: ".$reclamtion->getType()."<br>";
		echo "contenue: ".$reclamtion->getContenue()."<br>";
		echo "etat: ".$reclamtion->getEtat()."<br>";
	}
	
	
	function ajouterReclamtion($reclamtion){
		$sql="insert into reclamation (idClient,Objet,Type,Contenue,Etat) values (:id, :ob,:ty,:cont,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$reclamtion->getId();
        $ob=$reclamtion->getObjet();
        $ty=$reclamtion->getType();
        $cont=$reclamtion->getContenue();
        $etat=0;
		$req->bindValue(':id',$id);
		$req->bindValue(':ob',$ob);
		$req->bindValue(':ty',$ty);
		$req->bindValue(':cont',$cont);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamtions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql= " SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamtion($id){
		$sql="DELETE FROM reclamation where idClient= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamtion($reclamtion,$id){
		$sql="UPDATE reclamation SET Contenue=:cont, Objet=:ob,Type=:ty WHERE idClient=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$reclamtion->getId();
        $ob=$reclamtion->getObjet();
        $ty=$reclamtion->getType();
        $cont=$reclamtion->getContenue();
       
		$datas = array(':ob'=>$ob, ':ty'=>$ty, ':cont'=>$cont);
		$req->bindValue(':id',$id);
		$req->bindValue(':ob',$ob);
		$req->bindValue(':ty',$ty);
		$req->bindValue(':cont',$cont);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	
	
	}
}
	


?>