<?php require("../actions/inscriptionAction.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/inscription_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/inscription_versionPC.css">
    <title>GuliFit - Inscription</title>
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
                    <li><a href="../index.php">ACCUEIL</a></li>
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
            <h1>INSCRIPTION</h1>
        </section>
        <section class="mise_en_page">
            <section class="intro">
                <h1>Vous êtes coach ?</h1>
                <p class="warning-coach">
                    <u>ATTENTION !</u><br>
                    Cette page est exclusivement réservée aux coachs sportifs souhaitant publier du contenu sur notre plateforme. 
                    Si vous êtes un visiteur à la recherche d'informations, merci de consulter nos autres sections.
                </p>
                <h2>Partagez votre expertise, inspirez la communauté sportive.</h2>
                <p>Rejoignez-nous pour partager vos connaissances, aider chacun à atteindre ses objectifs sportifs et élargir votre réseau grâce à notre formulaire de contact.</p>
            </section>
            <section class="contact-form">
            <?php if(isset($errorMsg)){ 
                echo '<p style="
                    color: red;
                    font-size: 1.5rem;
                    font-weight: bold;
                    border: 5px solid red;
                    border-radius: 0.5rem;
                    padding: 1rem;
                    margin: 1rem 0;">'.$errorMsg.'</p>';
                }
            ?>    
            <br><br>
                <form method="POST">
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
                        <input type="date" id="date_naissance" name="date_naissance" placeholder="JJ / MM / AAAA">
                    </div>
                    <div class="form-group">
                        <label for="localisation">Localisation</label>
                        <input type="text" id="localisation" name="localisation" placeholder="Entrez votre localisation">
                    </div>
                    <div class="form-group file-upload">
                        <label for="diplome">Diplôme</label>
                        <input type="file" id="diplome" name="diplome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre adresse mail">
                    </div>
                    <div class="form-group password-group">
                        <label for="password">Mot de passe</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
                            <img src="../assets/image/pictogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-password">
                        </div>
                    </div>
                    <div class="form-group password-group">
                        <label for="confirm_password">Confirmation de mot de passe</label>
                        <div class="password-container">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Entrez à nouveau votre mot de passe">
                            <img src="../assets/image/pictogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-confirm-password">
                        </div>
                    </div>                    
                    <button type="submit" name='validate'>INSCRIPTION</button>
                </form>
            </section>
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
    <script src="../assets/js/mot_de_passe.js"></script>
</body>
</html>