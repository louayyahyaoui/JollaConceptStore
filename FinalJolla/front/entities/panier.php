<?php
class panier
{
	private $id;
	private $nom;
	private $prix;
	private $quantite;
	private $image;
	

		public function __construct($id,$nom,$prix,$quantite,$image)
		{
			$this->id=$id;
			$this->nom=$nom;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->image=$image;
			
		}

		public function get_id()
		{
			return $this->id;
		}

		public function set_id($Id)
		{
			$this->id = $Id;
		}
		public function get_image()
		{
			return $this->image;
		}

		public function set_image($image)
		{
			$this->image = $image;
		}
		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($Nom)
		{
			$this->nom = $Nom;
		}

		public function get_prix()
		{
			return $this->prix;
		}

		public function set_prix($Prix)
		{
			$this->prix = $Prix;
		}

		public function get_quantite()
		{
			return $this->quantite;
		}

		public function set_quantite($Quantite)
		{
			$this->quantite = $Quantite;
		}

		

		
}	
?>