<?php
class Traitement {


  public function __construct() {

    $this->traitReq();
  }

  private function traitReq() {

    if(isset($_POST['donnees'])){

      require ('Modele/Analyze.php');
      $analyse = new Analyze();
      $ret = $analyse->getValeur();
      var_dump($ret);
      echo $ret;
    }

  }


}
?>
