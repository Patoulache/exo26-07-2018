<?php

class Analyze {

  private $tbl = array();


  public function __construct() {

    $this->tbl = [
      'letter'  => $this->calcLettre(),
      'mots'    => $this->calcMot(),
      'phrases' => $this->calcPhrase(),
    ];

  }

  private function calcLettre() {

    $str = $_POST['donnees'];
    $countLetter = preg_match_all('/[a-zA-Z]/', $str);

    return $countLetter;

  }

  private function calcMot() {

    $str = $_POST['donnees'];

    $countMots = explode(" ", "$str");
    $countMots = count($countMots);

    return $countMots;
  }

  private function calcPhrase() {

    $str = $_POST['donnees'];

    $countPhrases = explode(".", "$str");
    $countPhrases = count($countPhrases)-1;

    return $countPhrases;
  }

  public function getValeur() {
    return $this->tbl;
  }

}








?>
