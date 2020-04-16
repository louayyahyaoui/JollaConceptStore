<?PHP
 include "../core/panierC.php";
include "../entities/promo.php";

class PromoC {
function afficherpromo ($promo){
		echo "id: ".$promo->getid()."<br>";
		echo "nom: ".$promo->getnom()."<br>";
		echo "date_debut: ".$promo->getdate_debut()."<br>";
		echo "date_fin: ".$promo->getdate_fin()."<br>";
		echo "prix_nouveau: ".$promo->getprix_nouveau()."<br>";
		echo "description: ".$promo->getdescription()."<br>";
		echo "taux : ".$promo->getaux()."<br>";




	}
	
	function calcultaux($prix_in,$prix_f)
	{
		$taux_promo=(($prix_in-$prix_f)/$prix_in)*100;
		return $taux_promo;


	}

	function ajouterPromo($promo){

		$sql="insert into promo (id,idProd,date_debut,date_fin,prix_nouveau,description,taux) values (:id, :idProd,:date_debut,:date_fin,:prix_nouveau,:description,:taux)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id=$promo->getid();
		$idProd=$promo->getidProd();
        $date_debut=$promo->getdate_debut();
        $date_fin=$promo->getdate_fin();
		$prix_nouveau=$promo->getprix_nouveau();
		$description=$promo->getdescription();
		$taux=$promo->gettaux();


		$req->bindValue(':id',$id);
		$req->bindValue(':idProd',$idProd);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':prix_nouveau',$prix_nouveau);
		$req->bindValue(':description',$description);
		$req->bindValue(':taux',$taux);




		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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

function modifiePromo($promo,$id){
		$sql="UPDATE promo SET id=:idd, idProd=:idProd,date_debut=:date_debut,date_fin=:date_fin,prix_nouveau=:prix_nouveau,description=:description,taux=:taux WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promo->getid();
        $idProd=$promo->getidProd();
        $date_debut=$promo->getdate_debut();
        $prix_an=$promo->getdate_fin();
        $prix_nouv=$promo->getprix_nouveau();
		$descrip=$promo->getdescription();
		$taux=$promo->gettaux();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':idProd'=>$idProd,':date_debut'=>$date_debut,':date_fin'=>$prix_an,':prix_nouveau'=>$prix_nouv,':description'=>$descrip);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':idProd',$idProd);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$prix_an);
		$req->bindValue(':prix_nouveau',$prix_nouv);
		$req->bindValue(':description',$descrip);
		$req->bindValue(':taux',$taux); 
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromo($Id){
		$sql="SELECT * from promo where Id=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
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
	
	/*function rechercherListepromos($tarif){
		$sql="SELECT * from promo where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/

}

?>