<?php
require_once("../actions/platManager.php");
require_once("../actions/profilAction.php");

$plat = new PlatManager($bdd);
$monPlat = $plat->get($_GET['id_plat']);
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
                <li><a href="./ajout_seance_coach.php">AJOUT SÉANCES</a></li>
                <li><a href="./mes_seances_coach.php">MES SÉANCES</a></li>
                <li><a href="./ajout_recette_coach.php">AJOUT RECETTES</a></li>
                <li><a href="./mes_recettes_coach.php">MES RECETTES</a><img src="../assets/image/pictogramme/fleche_profil_vert.svg" alt="flèche"></li>
                <li class="deconnect"><a href="./deconnexion.php">DÉCONNEXION</a></li>
            </ul>
        </aside>
        <section class="seances_recettes-content">
            <?php
                if (isset($_GET['message2']) && !empty($_GET['message2'])) {
                    echo 
                        "<div class=publication_reussis>
                            <img src='../assets/image/pictogramme/haltere.svg'>
                            <p>Votre recette a bien été modifiée !</p>
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
                <form method="POST" action="../actions/updatePlat.php?id_plat=<?php echo ($_GET['id_plat']);?>">
                    <div class="form-group">
                        <label for="nom_recette">Nom de la recette</label>
                        <input type="text" id="nom_recette" name="nom_recette" value="<?php  echo $monPlat['nom_plat']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="objectif">Objectif</label>
                        <select id="objectif" name="objectif" required>
                            <option value="" disabled selected>Choisissez l'objectif de la recette</option>
                            <option value="prise de masse">Prise de masse</option>
                            <option value="perte de poids">Perte de poids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de plat</label>
                        <select id="type" name="type" required>
                            <option value="" disabled selected>Choisissez le type de plat</option>
                            <option value="Entrée">Entrée</option>
                            <option value="Plat">Plat</option>
                            <option value="Dessert">Dessert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="temps">Temps de préparation</label>
                        <input type="text" id="temps" name="temps" value="<?php  echo $monPlat['temps_prep_plat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ingredients">Ingrédients</label>
                        <input type="text" id="ingredient" name="ingredient" value="<?php  echo $monPlat['ingredients_plat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="preparation">Préparation</label>
                        <input type="text" id="preparation" name="preparation" value="<?php  echo $monPlat['preparation_plat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" value="<?php  echo $monPlat['description_plat'] ?>" required>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="modify-button" name='modifier'>Modifier</button>
                        <button type="submit" class="delete-button" name='delete' onclick="return confirmDelete();">Supprimer</button>
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
    <script>
        function confirmDelete() {
            return confirm("Êtes-vous sûr de vouloir supprimer cette séance ? Cette action est irréversible.");
        }
    </script>
</body>
</html>