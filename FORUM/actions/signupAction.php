<?php

require('actions/database.php');

//validation du formulaire
if(isset($_POST['validate'])){

    //Vérification si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Vérification si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            //Insérer l'utilisateur dans la BDD
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, mdp) VALUES (?,?,?,?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

            //Récupère les infos de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname,$user_firstname,$user_pseudo));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            //Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales "SESSION"
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['firstname'] = $usersInfos['prenom'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            //Redirige l'utilisateur vers la page d'accueil
            header('Location: index.php');
            
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}