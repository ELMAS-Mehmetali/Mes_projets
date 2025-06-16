<?php

require_once ("database.php");
require_once ("utilisateurManager.php");

$tableau = [
        "nom_utilisateur" => htmlspecialchars($_POST['nom']),
        "prenom_utilisateur" => htmlspecialchars($_POST['prenom']),
        "date_naissance_utilisateur" => htmlspecialchars($_POST['date_naissance']),
        "localisation_utilisateur" => htmlspecialchars($_POST['localisation']),
        "diplome_utilisateur" => htmlspecialchars($_POST['diplome']),
        "mail_utilisateur" => htmlspecialchars($_POST['email']),
        "mdp_utilisateur" => htmlspecialchars($_POST['password']),
        "id_utilisateur" => $_SESSION['id'],
];

$coach = new UtilisateurManager($bdd);
$newCoach = new Utilisateur();
$newCoach->hydrate($tableau);
$coach->add($newCoach);
?>