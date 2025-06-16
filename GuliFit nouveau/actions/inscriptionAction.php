<?php
require("database.php");

//Validation de l'inscription
if(isset($_POST['validate'])){

    //Vérification si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date_naissance']) AND !empty($_POST['localisation']) AND !empty($_POST['diplome']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['confirm_password'])){

        //Les données de l'utilisateur
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_dateNaissance = htmlspecialchars($_POST['date_naissance']);
        $user_localisation = htmlspecialchars($_POST['localisation']);
        $user_diplome = htmlspecialchars($_POST['diplome']);
        $user_email = htmlspecialchars($_POST['email']);
        
        //Vérification si la confirmation du mot de passe correspond au mot de passe
        if ($_POST['password'] === $_POST['confirm_password']) {
            $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $errorMsg = "Les mots de passe ne correspondent pas.";
        }

        //Vérification si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT mail_utilisateur, prenom_utilisateur FROM utilisateur WHERE mail_utilisateur = ? AND prenom_utilisateur = ?');
        $checkIfUserAlreadyExists->execute(array($user_email, $user_prenom));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            //Insérer l'utilisateur dans la BDD
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur, date_naissance_utilisateur, localisation_utilisateur, diplome_utilisateur, mail_utilisateur, mdp_utilisateur) VALUES (?,?,?,?,?,?,?)');
            $insertUserOnWebsite->execute(array(
                $user_nom,
                $user_prenom,
                $user_dateNaissance,
                $user_localisation,
                $user_diplome,
                $user_email,
                $user_password,
            ));

            //Récupère les infos de l'utilisateur
            $getInfosOfThisUserRequete = $bdd->prepare('SELECT id_utilisateur, nom_utilisateur, prenom_utilisateur, mail_utilisateur FROM utilisateur WHERE nom_utilisateur = ? AND prenom_utilisateur = ? AND mail_utilisateur = ?');
            $getInfosOfThisUserRequete->execute(array($user_nom,$user_prenom,$user_email));

            $usersInfos = $getInfosOfThisUserRequete->fetch();

            //Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales "SESSION"
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id_utilisateur'];
            $_SESSION['nom'] = $usersInfos['nom_utilisateur'];
            $_SESSION['prenom'] = $usersInfos['prenom_utilisateur'];
            $_SESSION['email'] = $usersInfos['mail_utilisateur'];

            //Redirige l'utilisateur vers la page de connexion
            header('Location: connexion.php');    
            exit(); // Important après un header Location
        } else {
            $errorMsg = "Cet utilisateur existe déjà.";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs s'il vous plait...";
    }
}
?>