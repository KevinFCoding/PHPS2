<?php
	class personne 
	{
		private $nom;
		private $prenom;
		private $adress;
		private $age;
		private $tel;
		private $mail;

		public function __construct($nom,$prenom,$adress,$age,$tel,$mail)
		{
		  $this->nom = $nom;
		  $this->prenom = $prenom;
		  $this->adress = $adress;
		  $this->age = $age;
		  $this->tel = $tel;
		  $this->mail = $mail;
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

		public function getAge()
		{
		  return $this->age;
		}

		public function getTel()
		{
		  return $this->tel;
		}

		public function getMail()
		{
		  return $this->mail;
		}
	}
?>