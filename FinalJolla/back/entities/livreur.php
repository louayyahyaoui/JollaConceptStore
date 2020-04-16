<?PHP
class Livreur{
	private $Cin;
	private $Nom;
	private $Prenom;
	private $Adresse;
	private $Ville;
	private $NomEntreprise;
	private $Telephone;
	private $Gouvernerat;
	private $Email;
	private $Pays;
	
	private $CodePostal;

	function __construct($cin,$nom,$prenom,$adresse,$ville,$nomentreprise,$telephone,$gouvernerat,$email,$pays,$codepostal){
		$this->Cin=$cin;
		$this->Nom=$nom;
		$this->Prenom=$prenom;
		$this->Adresse=$adresse;
		$this->Ville=$ville;
		$this->NomEntreprise=$nomentreprise;
		$this->Telephone=$telephone;
		
		$this->Gouvernerat=$gouvernerat;
		$this->Email=$email;
		$this->Pays=$pays;
		
        $this->CodePostal=$codepostal;


	}
	
	function getCin(){
		return $this->Cin;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	
	function getVille(){
		return $this->Ville;
	}
	function getNomEntreprise(){
		return $this->NomEntreprise;
	}
    function getTelephone(){
		return $this->Telephone;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getGouvernerat(){
		return $this->Gouvernerat;
	}
	function getPays(){
		return $this->Pays;
	}
	function getEmail(){
		return $this->Email;
	}

    function getCodePostal(){
		return $this->CodePostal;
	}


	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrenom($prenom){
		$this->Prenom;
	}
	
	function setVille($ville){
		 $this->Ville=$ville;
	}
	function setNomEntreprise($nomentreprise){
		$this->NomEntreprise=$nomentreprise;
	}
    function setTelephone($telephone){
		 $this->Telephone=$telephone;
	}
	function setAdresse($adresse){
		 $this->Adresse=$adresse;
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