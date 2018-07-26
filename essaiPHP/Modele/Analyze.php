<?php

class Analyze {

  public function __construct() {
    $this->calcLettre();
    $this->calcMot();
    $this->calcPhrase();
  }

  private function calcLettre() {
    $str = $_POST['donnees'];
    $countLetter = preg_match_all('/[a-zA-Z]/', $str);

    return $count;

  }

  private function calcMot() {
    $str = $_POST['donnees'];
    $count = explode(" ", "$str");
    $countMots = count($count);

    return $count;
  }

  private function calcPhrase() {
    $str = $_POST['donnees'];
    $count = explode(".", "$str");
    $countPhrases = count($count)-1;

    return $count;
  }

}








?>
