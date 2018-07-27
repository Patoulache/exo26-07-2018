<?php

class Analyze {

  private $tbl = [];
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
    // array_push($this->tbl["lettre"], $countLetter);
    $this->tbl["lettre"] = $countLetter;
    $_SESSION["lettre"]+= $countLetter;
  }

  private function calcMot() {

    $regex = '/[A-Za-zÀ-ÿ0-9-]+/';
    $countMots = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl["mot"], $countMots);
    $this->tbl["mot"] = $countMots;
    $_SESSION["mot"]+= $countMots;
  }

  private function calcPhrase() {
    $regex = '/[.!?]+/';
    $countPhrases = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl["phrase"], $countPhrase);
    $this->tbl["phrase"] = $countPhrases;
    $_SESSION["phrase"]+= $countPhrases;
    $_SESSION["count"]+= 1;
  }

  public function getValeur() {
   
    return $this->tbl;
  }

  public function getTblMoy() {

    return $_SESSION;
  }
}
?>
