<?php

class Analyze {



  public function __construct() {

  }

  private function calcLettre() {

    $str = $_POST['donnees'];
    $countLetter = preg_match_all('/[a-zA-Z]/', $str);
    var_dump($countLetter);
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


}








?>
