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
                <li><a href="./mon_profil_coach.php">MON PROFIL</a><img src="../assets/image/pictrogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a></li>
                <li><a href="./deconnexion.php">DÉCONNEXION</a></li>
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
                <form>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" value="Nom enregistré">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" value="Prénom enregistré">
                    </div>
                    <div class="form-group">
                        <label for="date-naissance">Date de naissance</label>
                        <input type="date" id="date-naissance" value="2000-01-01">
                    </div>
                    <div class="form-group">
                        <label for="localisation">Localisation</label>
                        <input type="text" id="localisation" value="Localisation enregistrée">
                    </div>
                    <div class="form-group">
                        <label for="diplome">Diplôme</label>
                        <input type="text" id="diplome" value="Diplôme enregistré">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="email@enregistre.com">
                    </div>
                    <div class="form-group">
                        <label for="mot-de-passe">Mot de passe</label>
                        <input type="password" id="mot-de-passe" value="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmation">Confirmation mot de passe</label>
                        <input type="password" id="confirmation" value="password">
                    </div>
                    <div class="buttons">
                        <button type="button" class="modify-button">Modifier</button>
                        <button type="button" class="delete-button">Supprimer</button>
                    </div>
                </form>
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