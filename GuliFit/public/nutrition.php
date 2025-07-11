<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/seances_nutrition_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/seances_nutrition_versionPC.css">
    <title>GuliFit - Nutrition</title>
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
    <main>
        <section class="page_header">
            <h1>NUTRITION</h1>
            <h2>Adaptés votre nutrition à vos objectifs</h2>
            <h3>*Nos recettes sont conçus pour une seule personne</h3>
        </section>
        <section class="section-filtre">
            <h2>CHOISISSEZ VOS RECETTES</h2>
            <div class="filtres">
                <div class="filtre-group">
                    <div class="filtre-header">
                        <img src="../assets/image/pictogramme/objectif.svg" alt="picto objectif" class="icon">
                        <span class="filtre-titre">Objectif</span>
                    </div>
                    <div class="options">
                        <label><input type="radio" name="objectif" value="Perte de poids"> Perte de poids</label>
                        <label><input type="radio" name="objectif" value="Prise de masse"> Prise de masse</label>
                    </div>
                </div>
                <div class="filtre-group">
                    <div class="filtre-header">
                        <img src="../assets/image/pictogramme/plat.svg" alt="picto plat" class="icon">
                        <span class="filtre-titre">Type</span>
                    </div>
                    <div class="options">
                        <label><input type="radio" name="type" value="Entrée"> Entrée</label>
                        <label><input type="radio" name="type" value="Plat"> Plat</label>
                        <label><input type="radio" name="type" value="Dessert"> Dessert</label>
                    </div>
                </div>
                <div class="filtre-group coach">
                    <div class="filtre-header">
                        <img src="../assets/image/pictogramme/coach.svg" alt="picto coach" class="icon">
                        <span class="filtre-titre">Coach</span>
                    </div>
                    <select>
                        <option>Choisissez votre coach</option>
                        <option>Guli</option>
                        <option>Antoine</option>
                    </select>
                </div>          
                <button class="valider">VALIDER</button>
            </div>
        </section>
        <section class="card">
            <div class="seance-nutrition-card">
                    <div class="card-header">
                        <span class="tag">PRISE DE MASSE</span>
                        <span class="trait">|</span>
                        <span class="tag">BOEUF - LÉGUMES</span>
                    </div>
                    <div class="card-body">
                        <img src="../assets/image/nutrition/boeuf_legumes.jpg" alt="plat boeuf légumes">
                        <div class="details">
                            <div class="infos">
                                <img src="../assets/image/pictogramme/plat.svg" alt="picto plat">
                                <span>Prise de masse</span>
                            </div>
                            <div class="infos">
                                <img src="../assets/image/pictogramme/duree.svg" alt="picto duree">
                                <span>60 minutes</span>
                            </div>
                            <div class="infos">
                                <img src="../assets/image/pictogramme/coach.svg" alt="picto coach">
                                <span>Guli</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>Notez la description</p>
                        </div>
                        <div class="card-btn"><a href="./details-nutrition.html">LET'S EAT !</a></div>
                    </div>
            </div>         
        </section>
        <section class="page_nutrition_seance">
          <div class="card_nutrition_seance">
            <div class="image_page_chaine">
              <img src="../assets/image/nutrition/seance_page_nutrition.jpg" alt="un sprinter">
            </div>
            <div class="intro_nutrition_seance">
                <h2>Découvrez nos séances...</h2>
                <p>Mettre un texte d'accroche</p>
                <div class="card-btn"><a href="./seances.php">LET'S GO !</a></div>
            </div>
          </div>
        </section>
        <section class="publicité">
            <div class="pub">
                <p>Publicités</p>
            </div>
            <div class="pub_2">
                <img src="../assets/image/pub/pub_whey.jpg" alt="pub_whey">
                <img src="../assets/image/pub/pub_decathlon.jpg" alt="pub_décathlon">
                <img src="../assets/image/pub/pub_garmin.jpg" alt="pub_garmin">
            </div>
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
            <img src="../assets/image/logo/logo_horizontal_footer.svg" alt="logo gulifit">
            <p>Tous droits réservés © Copyright 2025 GuliFit</p>
        </div>
    </footer>
</body>
</html>