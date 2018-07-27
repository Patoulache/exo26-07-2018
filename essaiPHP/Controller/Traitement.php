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
    
    }

  }


}
?>
