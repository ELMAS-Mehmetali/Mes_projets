<?php
require_once ("../actions/platManager.php");
require_once("../actions/profilAction.php");

$plat = new PlatManager($bdd);
$mesPlats = $plat->getAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/mes_seances-recettes_coach_versionMobile.css">
    <link rel="stylesheet" href="../assets/style/mes_seances-recettes_coach_versionPC.css">
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
                <img src="../assets/image/logo/logo_horizontal_contraste.svg" alt="logo gulifit">
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
                <li><a href="./ajout_recette_coach.php">AJOUT RECETTE</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li class="deconnect"><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
    <section class="contenu-publications">
            <h2>DERNIERES PUBLICATIONS - RECETTES</h2>
            <ul class="publication-list">
                <?php
                    foreach ($mesPlats as $monPlat) {
                        $type = $plat->getType($monPlat['id_type']);
                        $objectif = $plat->getObjectif($monPlat['id_objectif_plat']);
                        echo 
                        '<li>
                            <span class="publication-title">'.$monPlat['nom_plat'].'</span>
                            <span class="publication-niveau">'.$type.'</span>
                            <span class="publication-categorie">'.$objectif.'</span>
                            <span class="publication-date">01 juin 2025</span>
                            <a href="./modif_recettes_coach.php?id_plat='.$monPlat['id_plat'].'"><button type="button">MODIFIER</button></a>
                        </li>';
                    }
                ?>
                <!-- <li>
                    <span class="publication-image"><img src="../assets/image/nutrition/boeuf_legumes.jpg" alt="plat boeuf legumes"></span>
                    <span class="publication-title">Nom de la publication 1</span>
                    <span class="publication-date">01 juin 2025</span>
                    <a href="./lien_vers_la_seance"><button type="button">MODIFIER</button></a>
                </li>
                <li>
                    <span class="publication-image"><img src="../assets/image/nutrition/boeuf_legumes.jpg" alt="plat boeuf legumes"></span>
                    <span class="publication-title">Nom de la publication 2</span>
                    <span class="publication-date">30 mai 2025</span>
                    <a href="./lien_vers_la_seance"><button type="button">MODIFIER</button></a>
                </li>
                <li>
                    <span class="publication-image"><img src="../assets/image/nutrition/boeuf_legumes.jpg" alt="plat boeuf legumes"></span>
                    <span class="publication-title">Nom de la publication 3</span>
                    <span class="publication-date">25 mai 2025</span>
                    <a href="./lien_vers_la_seance"><button type="button">MODIFIER</button></a>
                </li> -->
            </ul>
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
