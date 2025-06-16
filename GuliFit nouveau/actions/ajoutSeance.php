<?php

require_once ("database.php");
require_once ("seanceManager.php");

$tableau = [
        "nom_seance" => htmlspecialchars($_POST['nom_seance']),
        "description_seance" => htmlspecialchars($_POST['description']),
        "img_seance" => htmlspecialchars($_POST['illustration_seance']),
        "duree_seance" => htmlspecialchars($_POST['duree']),
        "contenu_seance" => htmlspecialchars($_POST['contenu']),
        "id_niveau" => htmlspecialchars($_POST['niveau']),
        "id_cat_seance" => htmlspecialchars($_POST['categorie']),
        "id_utilisateur" => $_SESSION['id'],
];

$seance = new SeanceManager($bdd);
$newSeance = new Seance();
$newSeance->hydrate($tableau);
$seance->add($newSeance);

header('Location: ../public/ajout_seance_coach.php?message=fait');
?>