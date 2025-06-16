<?php

require_once ("database.php");
require_once ("platManager.php");

if (isset($_POST['modifier'])) {
        $tableau = [
                "nom_plat" => htmlspecialchars($_POST['nom_recette']),
                "description_plat" => htmlspecialchars($_POST['description']),
                // "img_plat" => htmlspecialchars($_POST['illustration_seance']),
                "temps_prep_plat" => htmlspecialchars($_POST['temps']),
                "ingredients_plat" => htmlspecialchars($_POST['ingredient']),
                "preparation_plat" => htmlspecialchars($_POST['preparation']),
                "id_type" => htmlspecialchars($_POST['type']),
                "id_objectif_plat" => htmlspecialchars($_POST['objectif']),
                "id_utilisateur" => $_SESSION['id']
        ];

        $plat = new PlatManager($bdd);
        $newPlat = new Plat();
        $newPlat->hydrate($tableau);
        $plat->update($newPlat, $_GET['id_plat']);

        header("Location: ../public/modif_recettes_coach.php?message2=fait2&id_plat=" . $_GET['id_plat']);
}

if (isset($_POST['delete'])) {
        $plat = new PlatManager($bdd);
        $plat->delete($_GET['id_plat']);

        header('Location: ../public/mes_recettes_coach.php');
}
?>