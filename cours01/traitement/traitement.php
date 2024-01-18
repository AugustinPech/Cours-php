<?php

$prenom = filter_input(INPUT_POST,'prenom',  FILTER_SANITIZE_SPECIAL_CHARS);
$nom = filter_input(INPUT_POST,'nom',  FILTER_SANITIZE_SPECIAL_CHARS);
$gender = filter_input(INPUT_POST,'gender',  FILTER_SANITIZE_SPECIAL_CHARS);

$formulaire = "ID : $prenom - $nom '</br>' Identified as : $gender";
$file='./contact/contact'.date('ymdhis').'.txt';
file_put_contents($file, $formulaire);

header("Location:  /cours01/traitement/resultat.php");

?>