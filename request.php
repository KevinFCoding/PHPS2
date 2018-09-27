<?php
  class request {
    
    private $type;
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $bdd;
    
    public function __construct($type,$host,$dbname,$username,$password){
      $this->type = $type;
      $this->dbname = $dbname;
      $this->host = $host;
      $this->username = $username;
      $this->password = $password;
    }
    public function getmybdd(){
    try {
      if ($this->bdd ===null){
          $this->bdd = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'',$this->username, $this->password);
      }
    } catch (PDOException $e) {
      print "Erreur ! Connection à la base de donné impossible".$e->getMessage()." <br/>";
      die();
    }
    return $this->bdd;
  }

    public function getAllRow($myTable){
    foreach($this->bdd->query('SELECT * FROM '. $myTable) as $row) {

    }
  }

   public function getAllRowCours($myTableCours){
    foreach($this->bdd->query('SELECT * FROM '. $myTableCours) as $rowcours) {
      
    }
  }
    public function setInsert($nom, $prenom, $adress, $tel){

        $query="INSERT INTO intervenants (" . "nom, prenom, adresse, tel ".")VALUES (" . "'".$nom . "',". "'".$prenom . "'," ."'".$adress . "'," . "'".$tel . "')";
       
        $req = $this->bdd->prepare($query);
        $req->execute();
          return;
    }

     public function setInsertCours($nommatiere, $description, $date){

        $query="INSERT INTO cours (" . "cours, description, date ".") VALUES (" . "'".$nommatiere . "',". "'".$description . "'," ."'".$date . "')";
       
        $req = $this->bdd->prepare($query);
        $req->execute();
          return true;
    }

     

  }
?>
