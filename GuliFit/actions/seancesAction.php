<?php
session_start();
require_once("database.php");

// 1. Vérifier connexion
if (!isset($_SESSION['auth'])) {
    header("Location: ../index.php");
    exit();
}
$id_coach = $_SESSION['id'];

// 2. Ajout de séance
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_seance'])) {
    if (
        !empty($_POST['nom_seance']) &&
        !empty($_POST['categorie']) &&
        !empty($_POST['niveau']) &&
        !empty($_POST['duree']) &&
        !empty($_POST['contenu']) &&
        !empty($_POST['description'])
    ) {
        // On suppose category et level renvoient déjà leur ID
        $nom = htmlspecialchars($_POST['nom_seance']);
        $categorie = (int) $_POST['categorie'];
        $niveau = (int) $_POST['niveau'];
        $duree = htmlspecialchars($_POST['duree']);
        $contenu = htmlspecialchars($_POST['contenu']);
        $desc = htmlspecialchars($_POST['description']);

        $ajoutSeance = $bdd->prepare(
            "INSERT INTO seances 
               (nom_seance, description_seance, durée_seance, contenu_seance, id_niveau, id_cat_seance, id_utilisateur)
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $ajoutSeance->execute([
            $nom,
            $desc,
            $duree,
            $contenu,
            $niveau,
            $categorie,
            $id_coach
        ]);

        header("Location: mes_seances_coach.php");
        exit();
    } else {
        $errorMsg = "Veuillez remplir tous les champs obligatoires.";
    }
}
?>
