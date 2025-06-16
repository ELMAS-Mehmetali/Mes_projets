<?php
require_once("../actions/profilAction.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/mon_profil_coach_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/mon_profil_coach_versionPC.css">
    <title>GuliFit - Mon Profil</title>
</head>
<body>
    <header>
        <section id="head">
            <div class="menu-burger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="logo">
                <img src="../assets/image/logo/logo_horizontal_contraste.svg" alt="logo gulifit">
            </div>
            <div id="login">
                <a href="./mon_profil_coach.php"><h2><?php echo   ucfirst($_SESSION['prenom']= $usersInfos['prenom_utilisateur'][0]).' '. ucfirst($_SESSION['nom'] = $usersInfos['nom_utilisateur'][0]); ?></h2></a>
            </div>
        </section>
    </header>
    <section class="page_header">
        <h1>À PROPOS DE GULIFIT</h1>
    </section>
    <main class="container">
        <aside class="menu">
            <h2><?php echo ucfirst($_SESSION['prenom'] = $usersInfos['prenom_utilisateur']).' '. ucfirst($_SESSION['nom'] = $usersInfos['nom_utilisateur']); ?></h2>
            <ul>
                <li><a href="./mon_profil_coach.php">MON PROFIL</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li><a href="./ajout_seance_coach.php">AJOUT SÉANCE</a></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./ajout_recette_coach.php">AJOUT RECETTE</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a></li>
                <li class="deconnect"><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
        <section class="profile-content">
            <div class="photo-section">
                <h2>Ma photo</h2>
                <div class="photo-container">
                    <div class="photo">
                        <img src="../" alt="Photo_profil">
                    </div>
                    <div class="photo-upload">
                        <input type="file" name="Photo_profil">
                    </div>
                </div>
            </div>
            <div class="info-section">
                <h2>Mes coordonnées</h2>
            <form action="../actions/profilAction.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" value="<?= $usersInfos['nom_utilisateur'] ?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value="<?= $usersInfos['prenom_utilisateur'] ?>">
                </div>
                <div class="form-group">
                    <label for="date-naissance">Date de naissance</label>
                    <input type="date" id="date-naissance" name="date_naissance" value="<?= $usersInfos['date_naissance_utilisateur'] ?>">
                </div>
                <div class="form-group">
                    <label for="localisation">Localisation</label>
                    <input type="text" id="localisation" name="localisation" value="<?= $usersInfos['localisation_utilisateur'] ?>">
                </div>
                <div class="form-group">
                    <label for="diplome">Diplôme</label>
                    <input type="text" id="diplome" name="diplome" value="<?= $usersInfos['diplome_utilisateur'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= $usersInfos['mail_utilisateur'] ?>">
                </div>
                <div class="buttons">
                    <button type="submit" name="validate" class="modify-button">Modifier</button>
                    <button type="submit" class="delete-button"><a href="../public/suppression_profil.php" style='
                        text-decoration: none;
                        color: inherit;
                        display: block;
                        width: 100%;
                        height: 100%;'>Supprimer</a></button>
                </div>
            </form>
              <div class="form-group">
            <form action="../actions/profilAction.php" Method="POST">
                <label for="mot-de-passe">Mot de passe</label>
                <div class="password-container">
                    <input type="password" id="mot-de-passe" value="" name = "mot_de_passe">
                    <img src="../assets/image/pictogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-mot-de-passe">
                </div>
                </div>
                <div class="form-group">
                    <label for="confirmation">Confirmation mot de passe</label>
                    <div class="password-container">
                        <input type="password" id="confirmation" value="" name="confirmation">
                        <img src="../assets/image/pictogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-confirmation">
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" name="validate_mdp" class="modify-button">Modifier</button>
                </div>
            </form> 
            </div>
        </section>
    </main>
    <footer>
        <div class="navbar2_foot">
            <ul>
                <li><a href="./partenaires.php">PARTENAIRES</a></li>
                <li><a href="./credits.php">CRÉDITS</a></li>
                <li><a href="./politique_confidentialité.php">POLITIQUE DE CONFIDENTIALITÉ</a></li>
            </ul>
        </div>
        <div class="contact">
            <div class="picto">
                <a href="./lien_x_a_mettre"><img src="../assets/image/pictogramme/picto_X.svg" alt="picto_X"></a>
                <a href="./lien_insta_a_mettre"><img src="../assets/image/pictogramme/picto_insta.svg" alt="picto_insta"></a>
                <a href="./lien_tiktok_a_mettre"><img src="../assets/image/pictogramme/picto_tiktok.svg" alt="picto_tiktok"></a>
                <a href="./lien_whatsapp_a_mettre"><img src="../assets/image/pictogramme/picto_whatsapp.svg" alt="picto_whatsapp"></a>
            </div>
            <div class="coordonnees">
                <p>+336 16 04 27 82 </p>
                <p>contact@gulifit.com</p>
            </div>
        </div>
        <div class="logo_footer">
            <img src="../assets/image/logo/logo_horizontal_footer.svg" alt="logo gulifit">
            <p>Tous droits réservés © Copyright 2025 GuliFit</p>
        </div>
    </footer>
    <script src="../assets/js/mot_de_passe_profil.js"></script>
</body>
</html>