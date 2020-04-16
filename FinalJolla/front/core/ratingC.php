<?php

/**
 * 
 */
class RatingC
{


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