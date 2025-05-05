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
                            <img src="../assets/image/pictrogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-password">
                        </div>
                    </div>
                    <div class="form-group password-group">
                        <label for="confirm_password">Confirmation de mot de passe</label>
                        <div class="password-container">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Entrez à nouveau votre mot de passe">
                            <img src="../assets/image/pictrogramme/oeil_mdp.svg" alt="toggle password visibility" id="toggle-confirm-password">
                        </div>
                    </div>                    
                    <button type="submit">INSCRIPTION</button>
                </form>
            </section>
        </section>
    </main>
    <script src="../assets/js/mot_de_passe.js"></script>
</body>
</html>