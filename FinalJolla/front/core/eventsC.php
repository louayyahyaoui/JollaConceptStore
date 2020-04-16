<?PHP
 include "../core/panierC.php";
include "../entities/events.php";
class EventsC {
function afficherEvent ($events){
		echo "id: ".$events->getid()."<br>";
		echo "name: ".$events->getname()."<br>";
		echo "address: ".$events->getaddress()."<br>";

		echo "phone: ".$events->getphone()."<br>";
		echo "informations: ".$events->getinformations()."<br>";
		echo "DateDebut: ".$events->getDateDebut()."<br>";
		echo "DateFin: ".$events->getDateFin()."<br>";
		echo "photo: ".$events->getphoto()."<br>";



	}

	function ajouterEvents($events){
		$sql="insert into events (id,name,address,phone,informations,DateDebut,DateFin,photo) values (:id, :name,:address,:phone,:informations,:DateDebut,:DateFin,:photo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$events->getid();
		$name=$events->getname();
		$address=$events->getaddress();

        $phone=$events->getphone();
		$informations=$events->getinformations();
		$DateDebut=$events->getDateDebut();
        $DateFin=$events->getDateFin();
        $photo=$events->getphoto();

		$req->bindValue(':id',$id);
		$req->bindValue(':name',$name);
		$req->bindValue(':address',$address);

		$req->bindValue(':phone',$phone);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);
		$req->bindValue(':photo',$photo);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}





	
	
	
	
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From events";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerEvents($id){
		$sql="DELETE FROM events where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierEvents($events,$id){
		$sql="UPDATE events SET id=:idd, name=:name,address=:address,phone=:phone , informations=:informations, DateDebut=:DateDebut, DateFin=:DateFin,photo=:photo  WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$events->getid();
		$name=$events->getname();
		$address=$events->getaddress();

        $phone=$events->getphone();
        $informations=$events->getinformations();
        $DateDebut=$events->getDateDebut();
		$DateFin=$events->getDateFin();
		$photo=$events->getphoto();
		

      
       
		$datas = array(':idd'=>$idd,':id'=>$id,  ':name'=>$name, ':address'=> $address,':phone'=>$phone, ':informations'=>$informations, ':DateDebut'=>$DateDebut, ':DateFin'=>$DateFin, ':photo'=>$photo);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);

		$req->bindValue(':name',$name);
		$req->bindValue(':address',$address);

		$req->bindValue(':phone',$phone);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':DateDebut',$DateDebut);
		$req->bindValue(':DateFin',$DateFin);

		$req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererEvents($id){
		$sql="SELECT * from events where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function rechercherAnnonces($HI){
		$sql="SELECT * from events where id LIKE '%$HI%' or name LIKE '%$HI%' ";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



}

?>