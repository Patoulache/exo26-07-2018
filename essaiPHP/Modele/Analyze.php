<?php

class Analyze {

<<<<<<< HEAD
=======
  private $tbl = array();
>>>>>>> Romain


  public function __construct() {

<<<<<<< HEAD
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


=======
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

>>>>>>> Romain
}








?>
