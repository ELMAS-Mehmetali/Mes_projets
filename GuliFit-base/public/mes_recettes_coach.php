<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/mes_seances_recettes_coach_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/mes_seances_recettes_coach_versionPC.css">
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
                <a href="./connexion.php"><img src="../assets/image/pictrogramme/connexion.svg" alt="login"></a>
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
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a><img src="../assets/image/pictrogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
        <section class="seances_recettes-content">
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
                <form>
                    <div class="form-group">
                        <label for="nom_recette">Nom de la recette</label>
                        <input type="text" id="nom_recette" placeholder="Ex: Poulet coco">
                    </div>
                    <div class="form-group">
                        <label for="objectif">Objectif</label>
                        <select id="objectif" name="objectif">
                            <option value="" disabled selected>Choisissez l'objectif de la recette</option>
                            <option value="prise de masse">Prise de masse</option>
                            <option value="perte de poids">Perte de poids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de plat</label>
                        <select id="type" name="type">
                            <option value="" disabled selected>Choisissez le type de plat</option>
                            <option value="Entrée">Entrée</option>
                            <option value="Plat">Plat</option>
                            <option value="Dessert">Dessert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Temps">Temps de préparation</label>
                        <input type="text" id="Temps" placeholder="Ex: 1 heure 30">
                    </div>
                    <div class="form-group">
                        <label for="ingredients">Ingrédients</label>
                        <input type="text" id="ingredient" placeholder="Listez vos ingrédients:
                        -200g de poulet.">
                    </div>
                    <div class="form-group">
                        <label for="preparation">Préparation</label>
                        <input type="text" id="preparation" placeholder="Rédigez de la plus simple et clair possible la préparation du plat">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" placeholder="Rédigez un petit texte descriptif de la recette">
                    </div>
                    <div class="buttons">
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
                <a href="./lien_x_a_mettre"><img src="../assets/image/pictrogramme/picto_X.svg" alt="picto_X"></a>
                <a href="./lien_insta_a_mettre"><img src="../assets/image/pictrogramme/picto_insta.svg" alt="picto_insta"></a>
                <a href="./lien_tiktok_a_mettre"><img src="../assets/image/pictrogramme/picto_tiktok.svg" alt="picto_tiktok"></a>
                <a href="./lien_whatsapp_a_mettre"><img src="../assets/image/pictrogramme/picto_whatsapp.svg" alt="picto_whatsapp"></a>
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