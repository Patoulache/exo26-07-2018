<?php

class Analyze {
  
  private $tbl = [];
  private $str;


  public function __construct() {
    $this->str = $_POST['donnees'];

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
    $this->tbl["lettre"] = $countLetter;
    $_SESSION += $countLetter;
  }

  private function calcMot() {

    $regex = '/[A-Za-zÀ-ÿ0-9-]+/';
    $countMots = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl, $countMots);
    $this->tbl["mot"] = $countMots;
    $_SESSION += $countMots;
  }

  private function calcPhrase() {
    $regex = '/[.!?]+/';
    $countPhrases = preg_match_all("$regex", "$this->str");
    // array_push($this->tbl, $countPhrases);
    $this->tbl["phrase"] = $countPhrases;
    $_SESSION += $countPrases;
  }

  public function getValeur() {
    
    return $this->tbl;
  }

  public function getTblMoy() {
    
    return $_SESSION;
  }
}
?>
