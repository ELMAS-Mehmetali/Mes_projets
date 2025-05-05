<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/contact_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/contact_versionPC.css">
    <title>GuliFit - Contact</title>
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
    <main>
        <section class="page_header">
            <h1>À PROPOS DE GULIFIT</h1>
        </section>
        <section class="mise_en_page">
            <section class="intro">
                <h1>Vous avez aimé le contenu d'un coach ?</h1>
                <p>N'hésitez pas à le contacter directement via ce formulaire pour des conseils ou un coaching privé, sur-mesure pour vous.</p>
            </section>
            <section class="contact-form">
                <form>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="text" id="date_naissance" name="date_naissance" placeholder="JJ / MM / AAAA">
                    </div>
                    <div class="form-group">
                        <label for="localisation">Localisation</label>
                        <input type="text" id="localisation" name="localisation" placeholder="Entrez votre localisation">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre adresse mail">
                    </div>
                    <div class="form-group">
                        <label for="telephone">N° téléphone</label>
                        <input type="text" id="telephone" name="telephone" placeholder="Entrez votre n° de téléphone">
                    </div>
                    <div class="form-group">
                        <label for="coach">Choisissez votre coach</label>
                        <select id="coach" name="coach">
                            <option value="" disabled selected>Choisissez votre coach</option>
                            <option value="coach1">Coach 1</option>
                            <option value="coach2">Coach 2</option>
                            <option value="coach3">Coach 3</option>
                        </select>
                    </div>
                    <button type="submit">ENVOYER</button>
                </form>
            </section>
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