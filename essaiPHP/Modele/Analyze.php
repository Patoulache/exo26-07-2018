<?php

class Analyze {

  private $tbl = [];
  private $str;


  public function __construct() {
    $this->str = $_POST['donnees'];



  }

  private function calcLettre() {
    $regex = '/[a-zA-Z]/';
    $countLetter = preg_match_all("$regex", "$this->str");
    return $countLetter;

  }

  private function calcMot() {

    $regex = '/[^A-Za-zÀ-ÿ]/';
    $countMots = preg_split("$regex", "$this->str");
    $countMots1 = count($countMots);

    $this->tbl = ['mot' => $countMots1];
  }

  private function calcPhrase() {
    $regex = '/[^.!?]/';
    $countPhrases = explode("$regex", "$this->str");
    $countPhrases = count($countPhrases)-1;

    return $countPhrases;
  }

  public function getValeur() {
    $this->tbl = [
      'letter'  => $this->calcLettre(),
      'mots'    => $this->calcMot(),
      'phrases' => $this->calcPhrase(),
    ];



    return $this->tbl;
  }

}
?>
