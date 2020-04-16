<?PHP
class Pays{
	private $Id;
	private $Nom;
	
	private $Image;
	
	

	function __construct($id,$nom,$image){
		$this->Id=$id;
		$this->Nom=$nom;
		
		$this->Image=$image;
		
	}


	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	
	
	function getImage(){
		return $this->Image;
	}
	
	

	
	

	function setId($id){
		$this->Id=$id;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	
	function setImage($image){
		 $this->Image=$image;
	}
	
}

?>