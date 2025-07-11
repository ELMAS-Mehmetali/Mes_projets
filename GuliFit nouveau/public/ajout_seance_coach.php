<?php
require_once("../actions/profilAction.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/gestion_seances_recettes_coach_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/gestion_seances_recettes_coach_versionPC.css">
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
            <h2><?php echo   ucfirst($_SESSION['prenom']= $usersInfos['prenom_utilisateur']).' '. ucfirst($_SESSION['nom'] = $usersInfos['nom_utilisateur']); ?></h2>
            <ul>
                <li><a href="./mon_profil_coach.php">MON PROFIL</a></li>
                <li><a href="./ajout_seance_coach.php">AJOUT SÉANCE</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./ajout_recette_coach.php">AJOUT RECETTE</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a></li>
                <li class="deconnect"><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
        <section class="seances_recettes-content">
            <?php
                if (isset($_GET['message']) && !empty($_GET['message'])) {
                    echo 
                        "<div class=publication_reussis>
                            <img src='../assets/image/pictogramme/haltere.svg'>
                            <p>Votre séance a bien été ajoutée !</p>
                            <img src='../assets/image/pictogramme/haltere.svg'>
                        </div>";
                }
            ?>
            <div class="info-section">
                <form method="POST" action="../actions/ajoutSeance.php">
                    <div class="illustration-section">
                        <p>Illustration</p>
                        <div class="illustration-container">
                            <div class="illustration">
                                <img src="../" alt="illustration de la séance">
                            </div>
                            <div class="illustration-upload">
                                <input type="file" name="illustration_seance" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom_seance">Nom de la séance</label>
                        <input type="text" id="nom_seance" name="nom_seance" placeholder="Ex: Course fractionnée" required>
                    </div>
                    <div class="form-group">
                        <label for="categorie">Catégorie</label>
                        <select id="categorie" name="categorie" required>
                            <option value="" disabled selected>Choisissez la catégorie de la séance</option>
                            <option value="1">Musculation</option>
                            <option value="2">HIIT</option>
                            <option value="3">Running</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="niveau">Niveau</label>
                        <select id="niveau" name="niveau" required>
                            <option value="" disabled selected>Choisissez le niveau de la séance</option>
                            <option value="1">Débutant</option>
                            <option value="2">Intermédiaire</option>
                            <option value="3">Avancé</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duree">Durée</label>
                        <input type="text" id="duree" name="duree" placeholder="Ex: 45 minutes" required>
                    </div>
                    <div class="form-group">
                        <label for="contenu">Contenu</label>
                        <input type="text" id="contenu" name="contenu" placeholder="Exemple de contenu:
                        Echauffement : 10 min de vélo" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" placeholder="Rédigez un petit texte de la séance concernant la séance" required>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="add-button" name="add_seance">Ajouter</button>
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
</body>
</html>