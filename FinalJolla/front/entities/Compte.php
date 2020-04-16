<?PHP
class Compte{
	private $Mail;
	private $FirstName;
	private $LastName;
	private $PassWord;
	private $RePassWord;
	function __construct($mail,$firstname,$lastname,$password,$repassword){
		$this->Mail=$mail;
		$this->FirstName=$firstname;
		$this->LastName=$lastname;
		$this->PassWord=$password;
		$this->RePassWord=$repassword;
	}
	
	function getMail(){
		return $this->Mail;
	}
	function getFirstName(){
		return $this->FirstName;
	}
	function getLastName(){
		return $this->LastName;
	}
	function getPassWord(){
		return $this->PassWord;
	}
	function getRePassWord(){
		return $this->RePassWord;
	}

	function setMail($Mail){
		$this->Mail=$Mail;
	}
	function setFirstName($FirstName){
		$this->FirstName=$FirstName;
	}
	function setLastName($LastName){
		$this->LastName=$LastName;
	}
	function setPassWord($PassWord){
		$this->PassWord=$PassWord;
	}
	function setRePassWord($RePassWord){
		$this->RePassWord=$RePassWord;
	}
	
}

?>