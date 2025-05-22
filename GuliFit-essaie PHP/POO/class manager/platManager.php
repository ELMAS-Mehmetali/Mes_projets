<?php

class PlatManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Plat $plat) {
        $req = $this->bdd->prepare('
            INSERT INTO PLAT 
            (nom_plat, description_plat, img_plat, temps_prep_plat, ingredients_plat, preparation_plat, id_type, id_objectif_plat, id_utilisateur) 
            VALUES (:nom, :description, :img, :temps_prep, :ingredients, :preparation, :type, :objectif_plat, :utilisateur)
        ');

        $req->bindValue(':nom', $plat->getNom_plat(), PDO::PARAM_STR);
        $req->bindValue(':description', $plat->getDescription_plat(), PDO::PARAM_STR);
        $req->bindValue(':img', $plat->getImg_plat(), PDO::PARAM_STR);
        $req->bindValue(':temps_prep', $plat->getTemps_prep_plat(), PDO::PARAM_STR);
        $req->bindValue(':ingredients', $plat->getIngredients_plat(), PDO::PARAM_STR);
        $req->bindValue(':preparation', $plat->getPreparation_plat(), PDO::PARAM_STR);
        $req->bindValue(':type', $plat->getId_type(), PDO::PARAM_INT);
        $req->bindValue(':objectif_plat', $plat->getId_objectif_plat(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $plat->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete(Plat $plat) {
        $this->bdd->exec('DELETE FROM PLAT WHERE id_plat = '.$plat->getId_plat());
    }

    public function get($id_plat) {
        $id_plat = (int) $id_plat;

        $req = $this->bdd->prepare('SELECT * FROM PLAT WHERE id_plat = ?');
        $req->execute(array($id_plat));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $plat = new Plat();
        $plat->hydrate($donnees);
        return $plat;
    }

    public function getAll() {
        $plats = [];

        $req = $this->bdd->query('SELECT * FROM PLAT');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $plat = new Plat();
            $plat->hydrate($donnees);
            $plats[] = $plat;
        }

        return $plats;
    }

    public function update(Plat $plat) {
        $req = $this->bdd->prepare('
            UPDATE PLAT 
            SET nom_plat = :nom, 
                description_plat = :description, 
                img_plat = :img, 
                temps_prep_plat = :temps_prep, 
                ingredients_plat = :ingredients, 
                preparation_plat = :preparation, 
                id_type = :type, 
                id_objectif_plat = :objectif_plat, 
                id_utilisateur = :utilisateur 
            WHERE id_plat = :id
        ');

        $req->bindValue(':id', $plat->getId_plat(), PDO::PARAM_INT);
        $req->bindValue(':nom', $plat->getNom_plat(), PDO::PARAM_STR);
        $req->bindValue(':description', $plat->getDescription_plat(), PDO::PARAM_STR);
        $req->bindValue(':img', $plat->getImg_plat(), PDO::PARAM_STR);
        $req->bindValue(':temps_prep', $plat->getTemps_prep_plat(), PDO::PARAM_STR);
        $req->bindValue(':ingredients', $plat->getIngredients_plat(), PDO::PARAM_STR);
        $req->bindValue(':preparation', $plat->getPreparation_plat(), PDO::PARAM_STR);
        $req->bindValue(':type', $plat->getId_type(), PDO::PARAM_INT);
        $req->bindValue(':objectif_plat', $plat->getId_objectif_plat(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $plat->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }
}

?>
