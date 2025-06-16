<?php

require_once ("database.php");
require_once ("seanceManager.php");

if (isset($_POST['modifier'])) {
        $tableau = [
                "nom_seance" => htmlspecialchars($_POST['nom_seance']),
                "description_seance" => htmlspecialchars($_POST['description']),
                // "img_seance" => htmlspecialchars($_POST['illustration_seance']),
                "duree_seance" => htmlspecialchars($_POST['duree']),
                "contenu_seance" => htmlspecialchars($_POST['contenu']),
                "id_niveau" => htmlspecialchars($_POST['niveau']),
                "id_cat_seance" => htmlspecialchars($_POST['categorie']),
                "id_utilisateur" => $_SESSION['id'],
        ];
        
        $seance = new SeanceManager($bdd);
        $newSeance = new Seance();
        $newSeance->hydrate($tableau);
        $seance->update($newSeance, $_GET['id_seance']);
        
        header("Location: ../public/modif_seances_coach.php?message=fait&id_seance=" . $_GET['id_seance']);
}

if (isset($_POST['delete'])) {
        $seance = new SeanceManager($bdd);
        $seance->delete($_GET['id_seance']);

        header('Location: ../public/mes_seances_coach.php');

}
?>