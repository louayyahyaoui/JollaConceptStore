<?PHP
class Produit{
	private $Id;
	private $Nom;
	private $Prix;
	private $Image;
	private $Quantite;
	private $Description;
	private $Type;
	

	function __construct($id,$nom,$prix,$image,$quantite,$description,$type){
		$this->Id=$id;
		$this->Nom=$nom;
		$this->Prix=$prix;
		$this->Image=$image;
		$this->Quantite=$quantite;
		$this->Description=$description;
		$this->Type=$type;
	}


	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrix(){
		return $this->Prix;
	}
	
	function getImage(){
		return $this->Image;
	}
	function getDescription(){
		return $this->Description;
	}
    function getQuantite(){
		return $this->Quantite;
	}
	function getType(){
		return $this->Type;
	}
	

	
	

	function setId($id){
		$this->Id=$id;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrix($prix){
		$this->Prix=$prix;
	}
	
	function setImage($image){
		 $this->Image=$image;
	}
	function setDescription($description){
		$this->Description=$description;
	}
    function setType($type){
		 $this->Type=$type;
	}
	function setQuantite($quantite){
		 $this->Quantite=$quantite;
	}
	function setGouvernerat($gouvernerat){
		 $this->Gouvernerat=$gouvernerat;
	}
	function setPays($pays){
		 $this->Pays=$pays;
	}
	function setEmail($email){
		 $this->Email=$email;
	}

    function setCodePostal($codepostal){
		 $this->CodePostal=$codepostal;
	}
	
}

?>