<?PHP
class Letter{
	private $MailLetter;
	
	function __construct($mailletter){
		$this->MailLetter=$mailletter;
	
	}
	
	function getMailLetter(){
		return $this->MailLetter;
	}
	
	function setMailLetter($MailLetter){
		$this->MailLetter=$MailLetter;
	}
	
	
}

?>