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


    }else{
      
    }
  }


}

?>
