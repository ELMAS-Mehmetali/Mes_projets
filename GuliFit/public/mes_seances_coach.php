<?php
require_once("../actions/seancesAction.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/mes_seances_recettes_coach_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/mes_seances_recettes_coach_versionPC.css">
    <title>Coach - Mes séances</title>
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
                <img src="../assets/image/logo/logo_horizontal_contraste.svg" alt="logo_gulifit">
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
        <h1>À PROPOS DE GULIFIT</h1>
    </section>
    <main class="container">
        <aside class="menu">
            <h2>Guli ELMAS</h2>
            <ul>
                <li><a href="./mon_profil_coach.php">MON PROFIL</a></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a></li>
                <li><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
        <section class="seances_recettes-content">
            <div class="illustration-section">
                <p>Illustration</p>
                <div class="illustration-container">
                    <div class="illustration">
                        <img src="../" alt="illustration de la séance">
                    </div>
                    <div class="illustration-upload">
                        <input type="file" name="illustration_seance">
                    </div>
                </div>
            </div>
            <div class="info-section">
                <form>
                    <div class="form-group">
                        <label for="nom_seance">Nom de la séance</label>
                        <input type="text" id="nom_seance" name="nom_seance" placeholder="Ex: Course fractionnée">
                    </div>
                    <div class="form-group">
                        <label for="categorie">Catégorie</label>
                        <select id="categorie" name="categorie">
                            <option value="" disabled selected>Choisissez la catégorie de la séance</option>
                            <option value="Musculation">Musculation</option>
                            <option value="HIIT">HIIT</option>
                            <option value="Running">Running</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="niveau">Niveau</label>
                        <select id="niveau" name="niveau">
                            <option value="" disabled selected>Choisissez le niveau de la séance</option>
                            <option value="Débutant">Débutant</option>
                            <option value="Intermédiaire">Intermédiaire</option>
                            <option value="Avancé">Avancé</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duree">Durée</label>
                        <input type="text" id="duree" name="duree" placeholder="Ex: 45 minutes">
                    </div>
                    <div class="form-group">
                        <label for="contenu">Contenu</label>
                        <input type="text" id="contenu" name="contenu" placeholder="Exemple de contenu:
                        Echauffement : 10 min de vélo">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" placeholder="Rédigez un petit texte de la séance concernant la séance">
                    </div>
                    <div class="buttons">
                        <button type="button" class="add-button">Ajouter</button>
                        <button type="button" class="modify-button">Modifier</button>
                        <button type="button" class="delete-button">Supprimer</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="seances-modif">

        </section>
        <section class="seance-valide">

        </section>
    </main>
    <footer>
        <div class="navbar_foot">
            <ul>
                <li><a href="./index.php">ACCUEIL</a></li>
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
            <img src="../assets/image/logo/logo_horizontal_footer.svg" alt="logo_gulifit">
            <p>Tous droits réservés © Copyright 2025 GuliFit</p>
        </div>
    </footer>
</body>
</html>