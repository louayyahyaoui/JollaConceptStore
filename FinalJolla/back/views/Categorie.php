<?PHP
class Categorie{
	private $Id;
	private $Nom;
	
	
	
	function __construct($id,$nom){
		$this->Id=$id;
		$this->Nom=$nom;	
	}
	

	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	



	function setId($id){
		$this->Id=$id;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	

	
	
	
}

?>