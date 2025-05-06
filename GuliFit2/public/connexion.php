<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Coach</title>
    <link rel="stylesheet" href="../assets/style/connexion_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/connexion_versionPC.css">
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
            <h1>CONNEXION</h1>
        </section>
        <section class="mise_en_page">
            <section class="intro">
                <h1>Vous êtes coach diplômé ?</h1>
                <p>
                    Nous sommes heureux de vous accueillir au sein de notre communauté de professionnels du sport. 
                    En vous inscrivant sur notre site, vous aurez l'opportunité de partager vos programmes d'entraînement, 
                    vos conseils pratiques et vos ressources avec un large public passionné par le fitness et la santé.
                </p>
                <br>
                <p class="warning-coach">
                    <u>ATTENTION !</u><br>
                    Cette page est exclusivement réservée aux coachs sportifs souhaitant publier du contenu sur notre plateforme. 
                    Si vous êtes un visiteur à la recherche d'informations, merci de consulter nos autres sections.
                </p>
                <br>
                <p>
                    Connectez-vous dès maintenant pour commencer à partager vos contenus et contribuer à l’enrichissement de notre réseau sportif. 
                    Votre expertise mérite d’être partagée, et nous sommes là pour vous soutenir dans cette démarche.
                </p>
            </section>
            <section class="connexion">
                <form>
                    <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" placeholder="Entrez votre adresse mail" required>
                    </div>
                    <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                    </div>
                    <div class="connect">
                            <button type="submit">CONNEXION</button>
                            <a href="forgot_password.php" class="forgot-password">Mot de passe oublié?</a>
                    </div>
                </form>
                <div class="trait"></div>
                <div>
                    <a href="inscription.php" class="register-link">Vous n'avez pas de compte?</a>
                </div>
                <div class="register-button">
                    <a href="./inscription.php">INSCRIVEZ-VOUS</a>
                </div>
            </section>
        </section>
    </main>
</body>
</html>
