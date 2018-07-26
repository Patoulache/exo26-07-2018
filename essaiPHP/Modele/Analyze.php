<?php

class Analyze {

  private $tbl = [];
  private $str;


  public function __construct() {
    $this->str = $_POST['donnees'];
    $this->tbl = [
      'letter'  => $this->calcLettre(),
      'mots'    => $this->calcMot(),
      'phrases' => $this->calcPhrase(),
    ];


  }

  private function calcLettre() {
    $regex = '/[a-zA-Z-0-9À-ÿ]/';
    $countLetter = preg_match_all("$regex", "$this->str");
    echo $countLetter;

  }

  private function calcMot() {

    $regex = '/[A-Za-zÀ-ÿ0-9-]+/';
    $countMots = preg_match_all("$regex", "$this->str");
    echo $countMots;
  }

  private function calcPhrase() {
    $regex = '/[.!?]+/';
    $countPhrases = preg_match_all("$regex", "$this->str");
    echo $countPhrases;
  }

/*   public function getValeur() {

    return $this->tbl;
  } */

}
?>
