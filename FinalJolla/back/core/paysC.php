<?PHP
include "../config.php";
include "../entities/pays.php";
class PaysC {

	
	function ajouterpays($pays){
		$sql="INSERT INTO  pays (Nom,ID_Tele,Image) VALUES (:Nom, :id_tel, :Image )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_tel=$pays->getId();
        $Nom=$pays->getNom();
       
        $Image=$pays->getImage();
        
        
       
      
		$req->bindValue(':id_tel',$id_tel);
		$req->bindValue(':Nom',$Nom);
		
		$req->bindValue(':Image',$Image); 
		
		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpays(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From pays order by Nom ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpays($id){
		$sql="DELETE FROM pays where id= $id";
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
	function modifierpays($pays,$id){
		$sql="UPDATE pays SET Nom=:nomm,Image=:Image , ID_Tele=:idd  WHERE id=$id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$pays->getId();
        $nomm=$pays->getNom();
       
        $Image=$pays->getImage();
        
      
       
		
		$req->bindValue(':idd',$idd);
		
	$req->bindValue(':nomm',$nomm);
		$req->bindValue(':Image',$Image);
	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	
	function recupererpays($id){
		$sql="SELECT * from pays where id=$id";
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