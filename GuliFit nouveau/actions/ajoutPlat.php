<?php

require_once ("database.php");
require_once ("platManager.php");

$tableau = [
        "nom_plat" => htmlspecialchars($_POST['nom_recette']),
        "description_plat" => htmlspecialchars($_POST['description']),
        // "img_plat" => htmlspecialchars($_POST['illustration_seance']),
        "temps_prep_plat" => htmlspecialchars($_POST['temps']),
        "ingredients_plat" => htmlspecialchars($_POST['ingredient']),
        "preparation_plat" => htmlspecialchars($_POST['preparation']),
        "id_type" => htmlspecialchars($_POST['type']),
        "id_objectif_plat" => htmlspecialchars($_POST['objectif']),
        "id_utilisateur" => $_SESSION['id'],
];

$plat = new PlatManager($bdd);
$newPlat = new Plat();
$newPlat->hydrate($tableau);
$plat->add($newPlat);

header('Location: ../public/ajout_recette_coach.php?message=fait');
?>