<?PHP
include "../config.php";
include "Categorie.php";

class CategorieC {
    function afficherCategorie ($categorie)
    {
		echo "Id: ".$categorie->getId()."<br>";
		echo "Nom: ".$categorie->getNom()."<br>";		
     }
	
	function ajouterCategorie($categorie){
		$sql="INSERT INTO  Categorie (Id,Nom) VALUES (:Id,:Nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$categorie->getId();
        $Nom=$categorie->getNom();
        
        
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
	
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($id){
		$sql="DELETE FROM categorie where ID= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($categorie,$id){
		$sql="UPDATE categorie SET ID=:idd, Nom=:Nom WHERE ID=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$categorie->getId();
        $Nom=$categorie->getNom();
        
        
       
		$datas = array(':idd'=>$idd, ':Id'=>$id, ':Nom'=>$Nom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':Id',$id);
		$req->bindValue(':Nom',$Nom);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id){
		$sql="SELECT * from categorie where ID=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherCategorie($nom){
		$sql="SELECT * from categorie where Nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>