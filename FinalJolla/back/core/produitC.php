<?PHP
 include "../core/panierC.php";
include "../entities/Produit.php";
class ProduitC {
function afficherproduit ($produit){
		echo "Id: ".$produit->getId()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		echo "Image: ".$produit->getImage()."<br>";
		echo "Quantite: ".$produit->getQuantite()."<br>";
		echo "Description: ".$produit->getDescription()."<br>";
		echo "Type: ".$produit->getType()."<br>";
	}
	
	function ajouterproduit($produit){
		$sql="INSERT INTO  produit (Id,Nom,Prix,Image,Quantite,Description,Type) VALUES (:Id, :Nom,:Prix , :Image ,:Quantite , :Description,:Type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$produit->getId();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();
        $Type=$produit->getType();
        
       
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Image',$Image); 
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':Type',$Type);
		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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
	function modifierproduit($produit,$Id){
		$sql="UPDATE Produit SET Id=:idd, Nom=:Nom,Prix=:Prix,Image=:Image , Quantite=:Quantite, Description=:Description, Type=:Type  WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getId();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();
        $Type=$produit->getType();
      
       
		$datas = array(':idd'=>$idd, ':Id'=>$Id, ':Nom'=>$Nom,':Prix'=>$Prix, ':Image'=> $Image, ':Description'=>$Description, ':Quantite'=>$Quantite, ':Type'=>$Type);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Image',$Image);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':Type',$Type);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id){
		$sql="SELECT * from Produit where Id=$id";
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
}

?>