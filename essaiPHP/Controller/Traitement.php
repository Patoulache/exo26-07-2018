<?php

class Traitement {

  private $donnees;

  public function __construct() {

    $this->traitReq();
  }

  private function traitReq() {

    if(isset($_POST['donnees'])){
      require ('Modele/Analyze.php');
      $this->donnees = $_POST['donnees'];
      $analyse = new Analyze();
      var_dump($this->donnees);
      require ('Vue/vueAccueil.php');
    }else{
      require ('Vue/vueAccueil.php');
    }
  }


}

?>
