<?php
session_start();
require("database.php");

//Update des informations du proils

if (isset($_SESSION['auth'])) {
    $id_utilisateur = $_SESSION['id'];

    // Récupération des infos de l'utilisateur
    $query = $bdd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = ?");
    $query->execute([$id_utilisateur]);
    $usersInfos = $query->fetch(PDO::FETCH_ASSOC);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['validate'])) {

        // Vérification si l'utilisateur a bien complété tous les champs
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date_naissance']) && !empty($_POST['localisation']) && !empty($_POST['diplome']) && !empty($_POST['email'])) {

            // Récupération des nouvelles données de l'utilisateur
            $user_nom = htmlspecialchars($_POST['nom']);
            $user_prenom = htmlspecialchars($_POST['prenom']);
            $user_dateNaissance = htmlspecialchars($_POST['date_naissance']);
            $user_localisation = htmlspecialchars($_POST['localisation']);
            $user_diplome = htmlspecialchars($_POST['diplome']);
            $user_email = htmlspecialchars($_POST['email']);

            // Mise à jour des infos de l'utilisateur
            $requeteUpdate = $bdd->prepare('UPDATE utilisateur SET nom_utilisateur = ?, prenom_utilisateur = ?, date_naissance_utilisateur = ?, localisation_utilisateur = ?, diplome_utilisateur = ?, mail_utilisateur = ? WHERE mail_utilisateur = ?');

            // Exécution de la requête avec les nouvelles données
            $requeteUpdate->execute(array($user_nom, $user_prenom, $user_dateNaissance, $user_localisation, $user_diplome, $user_email, $usersInfos['mail_utilisateur']));

            // Redirection après mise à jour
            header("Location: ../public/mon_profil_coach.php");
            exit();
        }
    }

    //Changement de mot de passe

    if(isset($_POST['validate_mdp'])){
        // Vérification si l'utilisateur a bien complété tous les champs
        if (!empty($_POST['mot_de_passe']) && !empty($_POST['confirmation'])) {

            // Récupération des nouveaux mots de passe
            $user_motDePasse = htmlspecialchars($_POST['mot_de_passe']);
            $user_confirmation = htmlspecialchars($_POST['confirmation']);

            // Vérification que les mots de passe correspondent
            if ($user_motDePasse === $user_confirmation) {
                // Hashage du mot de passe
                $hashedPassword = password_hash($user_motDePasse, PASSWORD_DEFAULT);

                // Mise à jour du mot de passe dans la base de données
                $requeteUpdateMdp = 'UPDATE utilisateur SET mdp_utilisateur = ? WHERE id_utilisateur = ?';
                $requeteUpdateMdp = $bdd->prepare($requeteUpdateMdp);
                $requeteUpdateMdp->execute(array($hashedPassword, $id_utilisateur));

                // Redirection après mise à jour
                header("Location: ../public/mon_profil_coach.php");
                
            } else {
                echo "Les mots de passe ne correspondent pas.";
            }
        }
    }

    // Vérifier si la demande de suppression est confirmée
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_delete'])) {
        // Suppression de l'utilisateur de la base de données
        $deleteUserQuery = $bdd->prepare("DELETE FROM utilisateur WHERE id_utilisateur = ?");
        $deleteUserQuery->execute([$id_utilisateur]);

        // Déconnecter l'utilisateur après suppression
        session_destroy();

        // Rediriger vers la page d'accueil ou de déconnexion
        header("Location:../index.php");
        exit();
    }
}
?>