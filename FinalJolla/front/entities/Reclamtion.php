<?PHP

class Reclamtion
{
	private $Id_Client;
	private $Objet;
	private $Type;
	private $Contenue;
	private $Etat;
	function __construct($id,$ob,$ty,$cont,$e)
	{
		$this->Id_Client=$id;
		$this->Objet=$ob;
		$this->Type=$ty;
		$this->Contenue=$cont;
		$this->Etat=$e;
	}
    function getId(){return $this->Id_Client;}
    function getObjet(){return $this->Objet;}
    function getType(){return $this->Type;}
    function getContenue(){return $this->Contenue;}
    function getEtat(){return $this->Etat;}
    
    function setId($id){
		$this->Id_Client=$id;
	}
	function setObjet($ob){
		$this->Objet=$ob;
	}
	function setType($ty){
		$this->Type=$ty;
	}
	function setContenue($cont){
		$this->Contenue=$cont;
	}
    function setEtat($e)
    {
    	$this->Etat=$e;
    }

}

?>