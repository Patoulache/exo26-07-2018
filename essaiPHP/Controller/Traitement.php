<?php

class Traitement {

  private $donnees;

  public function __construct() {

    $this->traitReq();
  }

  private function traitReq() {

    if(isset($_POST['donnees'])){

      require ('Modele/Analyze.php');
      $analyse = new Analyze();
<<<<<<< HEAD

  }
}

  public function affiche() {

    require_once ('Vue/vueAccueil.php');
=======
      $ret = $analyse->getValeur();
      var_dump($ret);

      echo json_encode($ret);


    }else{

    }
>>>>>>> Romain
  }


}

?>
