<?PHP
class Events{

    private $id;
		private $name;
		private $address;

    private $phone;
    private $informations;
    private $DateDebut;
    private $DateFin;
    private $photo;
    



	function __construct($Id,$Name,$Address,$Phone,$Informations,$datedebut,$datefin,$Photo){
		$this->id=$Id;
		$this->name=$Name;
		$this->address=$Address;

		$this->phone=$Phone;
		$this->informations=$Informations;
		$this->DateDebut=$datedebut;
		$this->DateFin=$datefin;
		
		$this->photo=$Photo;
		


	}
	
	function getid(){
		return $this->id;
	}
	function getname(){
		return $this->name;
	}
	function getaddress(){
		return $this->address;
	}
	function getphone(){
		return $this->phone;
	}
	
	
	function getinformations(){
		return $this->informations;
	}
    function getDateDebut(){
		return $this->DateDebut;
	}
	function getDateFin(){
		return $this->DateFin;
	}
	function getphoto(){
		return $this->photo;
	}
	



	function setid($Id){
		$this->id=$id;
	}
	function setname($Name){
		$this->name=$Name;
	}
	function setaddress($Address){
		$this->address=$Address;
    }
	function setphone($Phone){
		 $this->phone=$Phone;
	}

    function setinformations($Informations){
		$this->informations=$Informations;
	}
    function setDateDebut($datedebut){
		 $this->DateDebut=$datedebut;
	}
	

    function setDateFin($datefin){
		 $this->DateFin=$datefin;
	}
	
}

?>