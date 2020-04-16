<?php
include_once "../config.php";
include "../entities/notification.php";

class commandeC
{ 	

	

	function ajoutercommande($commande,$idclient)
	{
		$sql="insert into commande (montantCommande,datee,idclient) values (:montantCommande ,:today,:idclient)";
		$db = config::getConnexion();
		
		try
		{
       
        //$idCommande=$commande->get_idCommande();
        $today=$commande->get_dateCommande();
        $montantCommande=$commande->get_montantCommande();
        
        
        $req=$db->prepare($sql);
     		$req->bindValue(':idclient',$idclient);

		//$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':today',$today);
		$req->bindValue(':montantCommande',$montantCommande);
		
		
		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function recuperercommande($id)
	{
   		$sql="SELECT * from commande where idCommande=$id ";
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
	function recuperercommande1($idclient)
	{
   		$sql="SELECT * from commande where idclient=$idclient ";
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

	function recuperercontenucommande($idCommande)
	{
        $sql="SELECT * from lignecommande where idCommande=$idCommande ";
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