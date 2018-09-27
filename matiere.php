<?php
	class matiere
	{
		private $nommatiere;
		private $description;
		private $date;
		

		public function __construct($nommatiere,$description,$date){
		  $this->nommatiere = $nommatiere;
		  $this->description = $description;
		  $this->date = $date;
		}
		
		public function getNommatiere()
		{
		  return $this->nommatiere;
		}

		public function getDescription()
		{
		  return $this->description;
		}

		public function getDate()
		{
		  return $this->date;
		}

		

	}
?>