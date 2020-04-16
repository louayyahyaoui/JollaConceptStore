<?PHP
include "../config.php";
include "../entities/notification.php";
class NotificationC {

	
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
	
	function affichernotif(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From notif order by Id_Not ";
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
		$sql="DELETE FROM Notification where id= $Id_Not";
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
	
	
	
	
	
}

?>