<?PHP
include "../entities/produit.php";

class Promo{

		private $id;
		private $idProd;
    private $date_debut;
    private $date_fin;
    private $prix_nouveau;
		private $description;
		private $taux;

    



	function __construct($Id,$iddp,$Date_debut,$Date_fin,$Prix_Nouveau,$Description,$taux){
		$this->id=$Id;
		$this->idProd=$iddp;
		$this->date_debut=$Date_debut;
		$this->date_fin=$Date_fin;
		$this->prix_nouveau=$Prix_Nouveau;
		$this->description=$Description;
		$this->taux=$taux;
		


	}
	
	function getid(){
		return $this->id;
	}
	function getidProd(){
		return $this->idProd;
	}
	function getdate_debut(){
		return $this->date_debut;
	}
	
	function getdate_fin(){
		return $this->date_fin;
	}
	function getprix_nouveau(){
		return $this->prix_nouveau;
	}
    function getdescription(){
		return $this->description;
	}
	function gettaux(){
		return $this->taux;
	}

	



	function setid($Id){
		$this->id=$id;
	}
	function setnom($Nom){
		$this->nom=$Nom;
	}
	
	function setdate_debut($Date_debut){
		 $this->date_debut=$Date_debut;
	}
	function setdate_fin($Date_fin){
		$this->date_fin=$Date_fin;
    }
    function setprix_nouveau($Prix_Nouveau){
		$this->prix_nouveau=$Prix_Nouveau;
	}
    function setdescription($Description){
		$this->description=$Description;
	}

	
}

?>