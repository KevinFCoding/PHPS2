<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <section>
    <div class="image"><a href="https://codingfactory.fr/"><img src="http://ability-search.com/uploads/campus/logo_168.png?35554a8740673edb2c01090ba6ff4fdd"></a></div>
  <h1>Agent Intervenant</h1>
<?php
require 'personne.php';
require 'form.php';
require 'request.php';
$Form = new form('post');
//$pers = new personne("Andrieu","William","wiwi@gmail.com","19","501515","akodazkopzd");
$bdd = new request('mysql', 'localhost', 'base', 'root', '');
$bdd->getmybdd();
$bdd->getAllRow('personne');
//$pers->getNom();
//$bdd->setInsert($pers->getNom(),$pers->getPrenom(), $pers->getAdress(), $pers->getAge(), $pers->getTel(), $pers->getMail());

?> 
 <form method="post">
  <?php 
    $Form->input('Nom');
    $Form->input('Prenom');
    $Form->input('Adresse');
    $Form->input('Age');
    $Form->input('Tel');
    $Form->input('Mail');
       
    $tab = array('HTML' => 'THOMAS','PHP'=>'Francois','MySql' =>'unpeuFrancois');//revoir
?>
  <div>
  <select>
    <p>
    <?php  
    foreach ($tab as $key => $value) {
      echo "<option value=".$key.">".$value."</option>";
    }
    ?>
    </p>
  </select>

  <select>
    
    <?php  
    foreach ($tab as $key => $value) {
      echo "<option value=".$value.">".$key."</option>";
    }
    ?>

  </select>

  </div>
  <div>
  <label for="place">Cergy</label>
  <input type="radio" name="place">

  <label for="place">Champeret</label>
  <input type="radio" name="place">


  </div>

       <?php
          $Form->submit();
       ?>

</form>
  <?php
    if(sizeof($_POST)>0)
    {
        $pers = new personne($_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Age'],$_POST['Tel'],$_POST['Mail']);
    $bdd->setInsert($pers->getNom(),$pers->getPrenom(), $pers->getAdress(), $pers->getAge(), $pers->getTel(), $pers->getMail());
    $bdd->getAllRow("personne");
    }  
  ?>
  </section>
</body>
</html>