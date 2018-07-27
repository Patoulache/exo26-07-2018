<?php
session_start();
require ('../Controller/Traitement.php');
$start = new Traitement();
$start->traitReq();
?>
