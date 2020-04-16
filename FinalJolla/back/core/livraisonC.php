<?PHP
include "../config.php";
class LivraisonC {
    function afficherLivraison ($livraison)
    {
		echo "Identifiant: ".$livraison->getIdentifiant()."<br>";
		echo "DateDebut: ".$livraison->getDateDebut()."<br>";
		echo "DateFin: ".$livraison->getDateFin()."<br>";
		
			
     }
	
	function ajouterLivraison($livraison){
		$sql="INSERT INTO  livraison (ID,DateDebut,DateFin) VALUES (:Identifiant,:DateDebut, :DateFin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Identifiant=$livraison->getIdentifiant();
        $DateDebut=$livraison->getDateDebut();
        $DateFin=$livraison->getDateFin();
        
      
		$req->bindValue(':Identifiant',$Identifiant);
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLiraison($id){
		$sql="DELETE FROM livraison where ID= :Id";
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
	function modifierLivraison($livraison,$id){
		$sql="UPDATE livraison SET ID=:idd, DateDebut=:DateDebut,DateFin=:DateFin WHERE ID=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$livraison->getIdentifiant();
        $DateDebut=$livraison->getDateDebut();
        $DateFin=$livraison->getDateFin();
        
       
		$datas = array(':idd'=>$idd, ':Id'=>$id, ':DateDebut'=>$DateDebut,':DateFin'=>$DateFin);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':Id',$id);
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($id){
		$sql="SELECT * from livraison where ID=$id order by IDlivraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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
}

?>