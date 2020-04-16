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

	function rechercherProduit1($Hi){
		$sql="SELECT * from produit where  Nom LIKE '%$Hi%'  order by Prix "   ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
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

	function supprimerproduit($id)
	{
		$sql="DELETE FROM panier where idp = :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		//$req->bindValue(':idclient',$idclient);
		try
		{
            $req->execute();
        }
        catch (Exception $e){
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


function rechercherProduit($Hi,$type){
		$sql="SELECT * from produit where  Nom LIKE '%$Hi%' and Type like '%$type%'  order by Prix "   ;
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

//rating
function ajouterRating($rating)	
{
$idp=$rating->getIdProduit();
$idc=$rating->getIdClient();
$r=$rating->getRatingNum();
$t=$rating->getTitel();
$c=$rating->getComment();
$sql = "INSERT INTO item_rating (itemId, userId, ratingNumber, title, comments, created) VALUES ('".$idp."', '".$idc."', '".$r."', '".$t."', '".$c."', '".date("Y-m-d H:i:s")."')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

}	


function AfficherRating($itemId){
		$sql = "
			SELECT r.ratingId, r.itemId, r.userId, u.id_client, u.FirstName, r.ratingNumber, r.title, r.comments, r.created
			FROM item_rating as r
			LEFT JOIN compter as u ON (r.userid = u.id_client)
			WHERE r.itemId = '".$itemId."'";
		$db = config::getConnexion();
        try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }			
	}

function getRatingAverage($itemId){
		$itemRating = $this->AfficherRating($itemId);
		$ratingNumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingNumber+= $itemRatingDetails['ratingNumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingNumber && $count) {
			$average = $ratingNumber/$count;
		}
		return $average;	
	}

function modifierRating($rating,$id,$idp){
		$sql="UPDATE item_rating SET ratingNumber=:r WHERE userId=:id AND itemId=:idp";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$r=$rating->getRatingNum();
       
		$datas = array(':r'=>$r);
		$req->bindValue(':id',$id);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':r',$r);
		$s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	
	
	}

function verifier($rating,$id,$idp)
{
	$con=mysqli_connect("localhost","root","","jolla");
	
	$sql="select * from item_rating  WHERE userId='".$id."' AND itemId='".$idp."'";
	$result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0)
    {   $this->modifierRating($rating,$id,$idp);}
    else if(mysqli_num_rows($result)==0) {$this->ajouterRating($rating);}	

}
}
?>