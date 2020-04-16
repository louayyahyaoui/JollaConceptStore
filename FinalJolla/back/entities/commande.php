<?php
class Commande
{
	private $idCommande;
	private $dateCommande;
	private $montantCommande;
	private $etatCommande;
	

		public function __construct($MontantCommande)
		{
			//$this->idCommande=$idCommande;
			//$this->dateCommande=$DateCommande;
			$this->montantCommande=$MontantCommande;
			
			
		}

		public function get_idCommande()
		{
			return $this->idCommande;
		}

		/*public function set_idCommande($idCommande)
		{
			$this->idCommande = $idCommande;
		}*/
		//====================================


		public function get_dateCommande()
		{
			return $this->dateCommande;
		}

		public function set_dateCommande($DateCommande)
		{
			$this->dateCommande = $DateCommande;
		}
		//=====================================


		public function get_montantCommande()
		{
			return $this->montantCommande;
		}

		public function set_montantCommande($MontantCommande)
		{
			$this->montantCommande = $MontantCommande;
		}
		//======================================


		
		//========================================


		
		//====================================


		
		//=============================
		public function get_etatCommande()
		{
			return $this->etatCommande;
		}

		public function set_etatCommande($EtatCommande)
		{
			$this->etatCommande = $EtatCommande;
		}
}	
?>