<?PHP
class Notification{
	private $Id;
	private $Description;
	
	
	
	

	function __construct($description)
	{
	$this->Description=$description;
		
	}


	
	function getId(){
		return $this->Id;
	}

	function getDescription(){
		return $this->Description;
	}

	
	

	function setId($id){
		$this->Id=$id;
	}
	function setDescription($description){
		$this->Description=$description;
	}
	
}

?>