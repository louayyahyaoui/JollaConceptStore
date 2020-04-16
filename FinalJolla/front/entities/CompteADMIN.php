<?PHP
class Compte{
	private $MailA;
	private $FirstNameA;
	private $LastNameA;
	private $PassWordA;
	private $RePassWordA;
	function __construct($mail,$firstname,$lastname,$password,$repassword){
		$this->MailA=$mail;
		$this->FirstNameA=$firstname;
		$this->LastNameA=$lastname;
		$this->PassWordA=$password;
		$this->RePassWordA=$repassword;
	}
	
	function getMailA(){
		return $this->MailA;
	}
	function getFirstNameA(){
		return $this->FirstNameA;
	}
	function getLastNameA(){
		return $this->LastNameA;
	}
	function getPassWordA(){
		return $this->PassWordA;
	}
	function getRePassWordA(){
		return $this->RePassWordA;
	}

	function setMailA($MailA){
		$this->MailA=$MailA;
	}
	function setFirstNameA($FirstNameA){
		$this->FirstNameA=$FirstNameA;
	}
	function setLastNameA($LastNameA){
		$this->LastNameA=$LastNameA;
	}
	function setPassWordA($PassWordA){
		$this->PassWordA=$PassWordA;
	}
	function setRePassWordA($RePassWordA){
		$this->RePassWordA=$RePassWordA;
	}
	
}

?>