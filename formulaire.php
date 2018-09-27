<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header> 

      <div class="boiteHeader">

              <div class="logoItes"> 
                  <a href="index.html"> <img src="Image/logo-coding-factory.png" > </a>
              </div>
                    
                

                <div class="dn">
                
                    <div class="menu1 surv surv:hover" ">
                        <a href="https://codingfactory.fr/concept/" class="menu3">
                            <div class="menu2">CONCEPT</div></a>
                    </div>

                    <div class="menu1 surv surv:hover">
                        <a href="https://codingfactory.fr/developpeur/" class="menu3">
                            <div class="menu2">FORMATIONS</div></a>
                    </div>

                    <div class="menu1 surv surv:hover">
                        <a href="https://codingfactory.fr/equipe/" class="menu3">
                            <div class="menu2">EQUIPE</div></a>
                    </div>

                    <div class="menu1 surv surv:hover">
                        <a href="https://codingfactory.fr/entreprises/" class="menu3">
                            <div class="menu2">ENTREPRISE</div></a>
                    </div>

                    <div class="menu1 surv surv:hover">
                        <a href="https://codingfactory.fr/presse/" class="menu3">
                            <div class="menu2">PRESSE</div></a>
                    </div>
                </div>
            </div>




    <div class="backgr">
    <!-- Img -->
    </div>
     <h1><i class="far fa-calendar-alt"></i><br>Janvier <br> 2018 </h1>

    </header>
  <section>
    


  <h1>Agent Intervenant</h1>

<?php

require 'intervenants.php';
require 'matiere.php';
require 'form.php';
require 'request.php';


$Form = new form('post');
$bdd = new request('mysql', 'localhost', 'projet', 'root', '');
$bdd->getmybdd();
$bdd->getAllRow('intervenants');
$bdd->getAllRowCours('cours');


?> 
 <form method="post">
  <?php 
    $Form->input('Nom');
    $Form->input('Prenom');
    $Form->input('Adresse');
    $Form->input('Tel');
    $Form->input('Nom');
    $Form->input('Description');
    $Form->inputDate('Date');
       
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
        $pers = new intervenants($_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Tel']);
    $bdd->setInsert($pers->getNom(),$pers->getPrenom(), $pers->getAdress(), $pers->getTel());
    $bdd->getAllRow("intervenants");
    }

    if(sizeof($_POST)>0)
    {
      $mat = new matiere($_POST['Nom'],$_POST['Description'],$_POST['Date']);
      $bdd->setInsertCours($mat->getNommatiere(),$mat->getDescription(), $mat->getDate());
      $bdd->getAllRowCours("cours");
    }  
  ?>
  </section>
</body>
</html>