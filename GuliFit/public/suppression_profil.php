<?php
require_once("../actions/profilAction.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/suppression_profil_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/suppression_profil_versionPC.css">
    <title>Supprimer votre profil ?</title>
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
            <nav class="navbar">
                <ul>
                    <li><a href="./index.php">ACCUEIL</a></li>
                    <li><a href="./a_propos.php">À PROPOS</a></li>
                    <li><a href="./seances.php">SÉANCES</a></li>
                    <li><a href="./nutrition.php">NUTRITION</a></li>
                    <li><a href="./contact.php">CONTACT</a></li>
                </ul>
            </nav>
            <div id="login">
                <a href="./connexion.php"><img src="../assets/image/pictogramme/connexion.svg" alt="login"></a>
            </div>
        </section>
    </header>
    <section class="page_header">
        <h1>VOUS NOUS QUITTEZ ?</h1>
    </section>

    <main class="container">
        <section class="delete-confirmation">
            <h1>SUPPRIMER MON PROFIL</h1>
            <p>
                Êtes-vous sûr de vouloir supprimer votre profil ?
            </p>
            <p>
                Cette action est irréversible, et toutes vos données seront perdues.
            </p>
            <form action="suppression_profil.php" method="POST">
                <div class="buttons">
                    <button type="submit" class="delete-button" name="confirm_delete">Confirmer</button>
                    <div class="annuler"><a href="./mon_profil_coach.php" class="cancel-button">Annuler</a></div>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <div class="navbar_foot">
            <ul>
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="./a_propos.php">À PROPOS</a></li>
                <li><a href="./seances.php">SÉANCES</a></li>
                <li><a href="./nutrition.php">NUTRITION</a></li>
                <li><a href="./contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar2_foot">
            <ul>
                <li><a href="./connexion.php">CONNEXION</a></li>
                <li><a href="./inscription.php">INSCRIPTION</a></li>
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
</body>
</html>
