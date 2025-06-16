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
    <title>Coach - Mes recettes</title>
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
                <li><a href="./ajout_seance_coach.php">AJOUT SÉANCE</a></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./ajout_recette_coach.php">AJOUT RECETTE</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
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
                            <p>Votre recette a bien été ajoutée !</p>
                            <img src='../assets/image/pictogramme/haltere.svg'>
                        </div>";
                }
            ?>
            <div class="illustration-section">
                <p>Illustration</p>
                <div class="illustration-container">
                    <div class="illustration">
                        <img src="../" alt="illustration de la recette">
                    </div>
                    <div class="illustration-upload">
                        <input type="file" name="illustration_recette">
                    </div>
                </div>
            </div>
            <div class="info-section">
                <form method="POST" action="../actions/ajoutPlat.php">
                    <div class="form-group">
                        <label for="nom_recette">Nom de la recette</label>
                        <input type="text" id="nom_recette" name = 'nom_recette' placeholder="Ex: Poulet coco" required>
                    </div>
                    <div class="form-group">
                        <label for="objectif">Objectif</label>
                        <select id="objectif" name="objectif" required>
                            <option value="" disabled selected>Choisissez l'objectif de la recette</option>
                            <option value="1">Prise de masse</option>
                            <option value="2">Perte de poids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de plat</label>
                        <select id="type" name="type" required>
                            <option value="" disabled selected>Choisissez le type de plat</option>
                            <option value="1">Entrée</option>
                            <option value="2">Plat</option>
                            <option value="3">Dessert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Temps">Temps de préparation</label>
                        <input type="text" id="temps" name = 'temps' placeholder="Ex: 1 heure 30" required>
                    </div>
                    <div class="form-group">
                        <label for="ingredient">Ingrédients</label>
                        <input type="text" id="ingredient" name= "ingredient" placeholder="Listez vos ingrédients:
                        -200g de poulet." required>
                    </div>
                    <div class="form-group">
                        <label for="preparation">Préparation</label>
                        <input type="text" id="preparation" name = 'preparation' placeholder="Rédigez de la plus simple et clair possible la préparation du plat" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name = 'description' placeholder="Rédigez un petit texte descriptif de la recette" required>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="add-button" name="add_recette">Ajouter</button>
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