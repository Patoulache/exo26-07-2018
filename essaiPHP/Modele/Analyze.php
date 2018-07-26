<?php

class Analyze {

  private $tbl = array();
 /*  $str = $_POST['donnees']; */


  public function __construct() {

    $this->tbl = [
      'letter'  => $this->calcLettre(),
      'mots'    => $this->calcMot(),
      'phrases' => $this->calcPhrase(),
    ];

  }

  private function calcLettre() {
    $str = $_POST['donnees'];
    $regex = '/[a-zA-Z]/';
    $countLetter = preg_match_all("$regex", "$this->str");

    return $countLetter;

  }

  private function calcMot() {

    $str = $_POST['donnees'];
    $regex = '/[^A-Za-zÀ-ÿ]/';
    $countMots = preg_split("$regex", "$this->str");
    $countMots1 = count($countMots);

    return $countMots1;
  }

  private function calcPhrase() {
    $str = $_POST['donnees'];
    $regex = '/[^.!?]/';
    $countPhrases = explode("$regex", "$this->str");
    $countPhrases = count($countPhrases)-1;

    return $countPhrases;
  }

  public function getValeur() {
    return $this->tbl;
  }

}








?>
