<?php
include "../config.php";
class panierC
{

	function ajouteraupanier($produit,$idclient)
	{
		$sql="insert into panier (id,nom,prix,quantite,idclient,image) values (:id,:nom,:prix,:quantite,:idclient,:image)";
		$db = config::getConnexion();
		
		try
		{
       $req=$db->prepare($sql);
        $id=$produit->get_id();
        $prix=$produit->get_prix();
        $quantite=$produit->get_quantite();
        $nom=$produit->get_nom();
        $image=$produit->get_image();
        
     
		$req->bindValue(':id',$id);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo "<script>alert(\"Le produit est déja dans votre panier.\")</script>"; 
        }

	}

	function recupererproduit($id)
	{
   		$sql="SELECT * from produit where Id=$id";
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

	function recupererpanier($idclient)
	{
   		$sql="SELECT * from panier where idclient = $idclient";
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

	

	

	function somme($idclient)
	{
		$db=config::getConnexion();
		$q=$db->prepare("select quantite from panier where idclient = $idclient");
		$q->execute();
		return $q;
	}

	function afficherproduit ($produit)
	{
		echo "id : ".$produit->get_id()."<br>";
		echo "Nom : ".$produit->get_nom()."<br>";
		echo "Prix : ".$produit->get_prix()."<br>";
		echo "Quantite : ".$produit->get_quantite()."<br>";
		
	}

	function supprimerproduit($Id){
		$sql="DELETE FROM produit where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function supprimerPromo($Id){
		$sql="DELETE FROM promo WHERE Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherpanier()
	{
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

	

	function modifierquantite($quantite,$idp)
	{
		$sql="UPDATE panier SET quantite=:quantite where idp=:idp ";
		$db = config::getConnexion();
        
        try
        {
        	
        	$req=$db->prepare($sql);
        	$req->bindValue(':idp',$idp);
        	$req->bindValue(':quantite',$quantite);
        	
        	$s=$req->execute();

        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			//print_r($datas);
        }
	}
function modifierp($quantite,$id)
	{
		$sql="UPDATE produit SET Quantite=:quantite where Id =:id ";
		$db = config::getConnexion();
        
        try
        {
        	
        	$req=$db->prepare($sql);
        	$req->bindValue(':id',$id);
        	$req->bindValue(':quantite',$quantite);
        	
        	$s=$req->execute();

        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			//print_r($datas);
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


	

	function ajoutercontenupanier($produit,$idCommande,$idclient)
	{
		$sql="insert into lignecommande (idCommande,id,prix,quantite,nom,idclient) values (:idCommande,:id,:prix,:quantite,:nom,:idclient)";
		$db = config::getConnexion();
		
		try
		{
       
        $id=$produit->get_id();
        $prix=$produit->get_prix();
        $quantite=$produit->get_quantite();
        $nom=$produit->get_nom();

        $req=$db->prepare($sql);
          	$req->bindValue(':idclient',$idclient);

     	$req->bindValue(':idCommande',$idCommande);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':nom',$nom);

		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo "<script>alert(\"Error\")</script>"; 
        }

	}
		function afficherproduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}	
	
function RecupCategories()
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


function rechercherProduit($Hi){
		$sql="SELECT * from produit where Id LIKE '%$Hi%' or Nom LIKE '%$Hi%' or Type like '%$Hi%'  order by Prix "   ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function supprimerpanier($idclient)
{
	$sql="DELETE FROM panier where idclient = :idclient";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idclient',$idclient);
		//$req->bindValue(':idclient',$idclient);
		try
		{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

function afficherpromos(){
	//$sql="SElECT * From promo e inner join formationphp.promo a on e.cin= a.cin";
	$sql="SElECT * From promo";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function verifierexitenceprod($idClient,$id)
	{
		$sql="select count(*) as cnt from panier where idclient=:idClient and id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':id',$id);
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