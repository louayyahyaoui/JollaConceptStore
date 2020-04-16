<?PHP
class Livraison{
	private $Identifiant;
	private $DateDebut;
	private $DateFin;
	
	
	function __construct($dated,$datef){
		
		$this->DateDebut=$dated;
		$this->DateFin=$datef;

		
	}
	
	function getIdentifiant(){
		return $this->Identifiant;
	}
	function getDateDebut(){
		return $this->DateDebut;
	}
	function getDateFin(){
		return $this->DateFin;
	}

	function setIdentifiant($id){
		$this->Identifiant=$id;
	}
	function setDateDebut($dated){
		$this->DateDebut=$dated;
	}
	function setDateFin($datef){
		$this->DateFin=$datef;
	}

	
	
	
}

?>