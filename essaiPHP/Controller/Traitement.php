<?php
require ('../Modele/Analyze.php');

class Traitement {

  public function __construct() {

  }

  public function traitReq() {

    if(isset($_POST['donnees'])){
      $analyze = new Analyze($_POST['donnees']);
      $analyze->executeCalc();
      $ret = $analyze->getValeur();
      echo json_encode($ret);

    } else {
      $analyze = new Analyze();
      $moyenne = $analyze->getTblMoy();
      echo json_encode($moyenne);
    }

  }


}
?>
