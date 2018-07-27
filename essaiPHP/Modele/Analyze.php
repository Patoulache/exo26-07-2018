<?php

class Analyze {

  private $tbl = array(
    'lettre'  =>array(),
    'mot'     =>array(),
    'phrase'  =>array(),
  );

  private $str;


  public function __construct($valeur = 0) {
    $this->str = $valeur;

  }

  public function executeCalc() {
    $this->calcLettre();
    $this->calcMot();
    $this->calcPhrase();

  }

  private function calcLettre() {
    $regex = '/[a-zA-Z-0-9À-ÿ]/';
    $countLetter = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl, $countLetter);
    array_push($this->tbl["lettre"], $countLetter);
  }

  private function calcMot() {

    $regex = '/[A-Za-zÀ-ÿ0-9-]+/';
    $countMots = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl, $countMots);

    array_push($this->tbl["mot"], $countMots);
  }

  private function calcPhrase() {
    $regex = '/[.!?]+/';
    $countPhrases = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl, $countPhrases);
    array_push($this->tbl["phrase"], $countPhrases);
  }

  public function getValeur() {
    $_SESSION ["tablo"]= $this->tbl;
    return $this->tbl;
  }

  public function getTblMoy() {
    return $_SESSION;
  }
}
?>
