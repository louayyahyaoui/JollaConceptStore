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
		$sql="DELETE FROM reclamation where idReclamation= '$id'";
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
	function modifierReclamtion($id){
		$sql="UPDATE reclamation SET Etat=:etat WHERE idReclamation=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$etat=1;
       
		$datas = array(':etat'=>$etat, ':id'=>$id);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':id',$id);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	
	
	}

   function recpereMail($id)
   {
   	$sql=" SELECT * FROM compter where id_client='".$id."' ";
   	$db = config::getConnexion();
   	try{
   	$mail= $db->query($sql);
   	return $mail;}
    catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
   }

   
}
	


?>