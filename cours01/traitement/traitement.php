<?php
$filters = array_fill_keys(array_keys($_POST),FILTER_SANITIZE_SPECIAL_CHARS);
$formulaire=filter_input_array(INPUT_POST, $filters);
// $prenom = filter_input(INPUT_POST,'prenom',  FILTER_SANITIZE_SPECIAL_CHARS);
// $nom = filter_input(INPUT_POST,'nom',  FILTER_SANITIZE_SPECIAL_CHARS);
// $gender = filter_input(INPUT_POST,'gender',  FILTER_SANITIZE_SPECIAL_CHARS);
// $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
// $statut=filter_input(INPUT_POST,'statut', FILTER_SANITIZE_SPECIAL_CHARS);
// $mission = filter_input(INPUT_POST,'mission', FILTER_SANITIZE_SPECIAL_CHARS);
// $message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_SPECIAL_CHARS);

// $formulaire = "$statut : $prenom - $nom '</br>'
// Identified as : $gender '</br>' 
// Email : $email '</br>' 
// Contacte pour : $mission '</br>' 
// Message : '</br>' 
// $message";

$file='./contact/contact'.date('y-m-d_h:i:s').'.txt';
file_put_contents($file, $formulaire);

header("Location:  /cours01/traitement/resultat.php");
