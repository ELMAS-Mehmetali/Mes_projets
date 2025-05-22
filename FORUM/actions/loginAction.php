<?php
require('actions/database.php');

//validation du formulaire
if(isset($_POST['validate'])){

    //Vérification si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        //Vérifier si l'utilisateur existe (si le pseudo est correcte)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        //Récupérer les données de l'utilisateur
        if($checkIfUserExists->rowCount()>0){

            //Vérifier si le mot de passe est correcte
            $usersInfos = $checkIfUserExists->fetch();
            if(password_verify($user_password, $usersInfos['mdp'])){

                //Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales "SESSION"
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];

                //Redirige l'utilisateur vers l'accueil
                header('Location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrecte...";    
            }

        } else {
            $errorMsg = "Votre pseudo est incorrecte...";    
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}