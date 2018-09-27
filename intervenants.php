<?php
	class intervenants 
	{
		private $nom;
		private $prenom;
		private $adress;
		private $tel;

		public function __construct($nom,$prenom,$adress,$tel)
		{
		  $this->nom = $nom;
		  $this->prenom = $prenom;
		  $this->adress = $adress;
		  $this->tel = $tel;
		}
		
		public function getNom()
		{
		  return $this->nom;
		}

		public function getAdress()
		{
		  return $this->adress;
		}

		public function getPrenom()
		{
		  return $this->prenom;
		}


		public function getTel()
		{
		  return $this->tel;
		}

		
	}
?>