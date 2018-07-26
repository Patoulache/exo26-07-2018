<?php

class Analyze {



  public function __construct() {
    $this->calcLettre();

  }

  private function calcLettre() {
    var_dump($_POST['donnees']);
    $str = $_POST['donnees'];
    var_dump($str);
    $count = explode(" ", "$str");
    $count = count($count);
    var_dump($count);
    return $count;

  }

}








?>
