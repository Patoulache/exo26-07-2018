<?php
class Traitement {


/*   public function __construct() {

    $this->traitReq();
  } */

  public function traitReq() {

    if(isset($_POST['donnees'])){

      require ('../Modele/Analyze.php');
      $analyse = new Analyze();
      $analyse->executeCalc();
      $ret = $analyse->getValeur();
      echo json_encode($ret);

    } else {

      require ('../Modele/Analyze.php');
      $analyze = new Analyze();
      $moyenne = $analyze->getTblMoy();
      echo json_encode($moyenne);
    }

  }


}
?>
