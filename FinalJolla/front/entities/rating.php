<?PHP 

class Rating
{  
	private $IdProduit;
	private $IdClient;
	private $RatingNum;
	private $Titel;
	private $Comment;
	private $Date;
	function __construct($ip,$ic,$rn,$t,$c)
	{
		$this->IdProduit=$ip;
		$this->IdClient=$ic;
		$this->RatingNum=$rn;
		$this->Titel=$t;
		$this->Comment=$c;
		
	}

    function getIdProduit(){return $this->IdProduit;}
    function getIdClient(){return $this->IdClient;}
    function getRatingNum(){return $this->RatingNum;}
    function getTitel(){return $this->Titel;}
    function getComment(){return $this->Comment;}
    function getDate(){return $this->Date=$d;}

    function setIdProduit($ip){$this->IdProduit=$ip;}
    function setIdClient($ic){$this->IdClient=$ic;}
    function setRatingNum($rn){$this->RatingNum=$rn;}
    function setTitel($t){$this->Titel=$t;}
    function setComment($c){$this->Comment=$c;}
    function setDate($d){$this->Date=$d;}

}

?>