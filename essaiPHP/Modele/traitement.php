<?php
require 'Analyze.php';

$donnees = $_POST['donnees'];
echo ($donnees);
$_SESSION = [];
$session = $_SESSION;

echo json_encode($session);

?>
