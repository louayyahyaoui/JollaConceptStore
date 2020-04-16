<?PHP
include "../config.php";
class LivraisonC {
    function afficherLivraison ($livraison)
    {
		echo "Identifiant: ".$livraison->getIdentifiant()."<br>";
		echo "DateDebut: ".$livraison->getDateDebut()."<br>";
		echo "DateFin: ".$livraison->getDateFin()."<br>";
		
			
     }
	
	function ajouterLivraison($livraison,$idc,$idclient){
		$sql="INSERT INTO  livraison (DateDebut,DateFin,IDC,idclient) VALUES (:DateDebut, :DateFin ,:idc ,:idclient)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $DateDebut=$livraison->getDateDebut();
        $DateFin=$livraison->getDateFin();
        
      
		
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);
	    $req->bindValue(':idc',$idc);
	    $req->bindValue(':idclient',$idclient);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons($idclient)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livraison where idclient=$idclient order by IDlivraison";
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
		$sql="DELETE FROM livraison where IDlivraison= :Id";
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
		$sql="UPDATE livraison SET  DateDebut=:DateDebut,DateFin=:DateFin WHERE IDlivraison=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $DateDebut=$livraison->getDateDebut();
        $DateFin=$livraison->getDateFin();
        
       
		
		
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
		$sql="SELECT * from livraison where IDlivraison=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
      function recupererdernierID()
	{
		$sql="SELECT MAX(idCommande) as max from commande";
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

    

    function recuperercommande($id)
	{
   		$sql="SELECT * from lignecommande where idCommande=$id ";
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
   




        function recuperermontant($id)
	{
   		$sql="SELECT montantCommande from commande where idCommande=$id ";
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


}


?>