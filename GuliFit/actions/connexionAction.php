<?php
session_start();
require_once('database.php');

//validation du formulaire
if(isset($_POST['validate'])){

    //Vérification si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        //Vérifier si l'utilisateur existe (si le pseudo est correcte)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM utilisateur WHERE mail_utilisateur = ?');
        $checkIfUserExists->execute(array($user_email));

        //Récupérer les données de l'utilisateur
        if($checkIfUserExists->rowCount()>0){

            //Vérifier si le mot de passe est correcte
            $usersInfos = $checkIfUserExists->fetch();
            if(password_verify($user_password, $usersInfos['mdp_utilisateur'])){

                //Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales "SESSION"
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id_utilisateur'];
                $_SESSION['nom'] = $usersInfos['nom_utilisateur'];
                $_SESSION['prenom'] = $usersInfos['prenom_utilisateur'];
                $_SESSION['email'] = $usersInfos['mail_utilisateur'];

                //Redirige l'utilisateur vers la page mon profil
                header('Location: mon_profil_coach.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrecte...";    
            }

        } else {
            $errorMsg = "Votre e-mail est incorrecte...";    
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}

// if (isset($errorMsg)) {
//     echo '<p style="color: red;">' . $errorMsg . '</p>';
// }