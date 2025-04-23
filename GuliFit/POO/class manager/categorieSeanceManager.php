<?php

class CategorieSeanceManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(CategorieSeance $categorieSeance) {
        $req = $this->bdd->prepare('INSERT INTO CATEGORIE_SEANCE (nom_cat_seance) VALUES (:nom)');
      
        $req->bindValue(':nom', $categorieSeance->getNom_cat_seance(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(CategorieSeance $categorieSeance) {
        $this->bdd->exec('DELETE FROM CATEGORIE_SEANCE WHERE id_cat_seance = '.$categorieSeance->getId_cat_seance());
    }

    public function get($id_cat_seance) {
        $id_cat_seance = (int) $id_cat_seance;

        $req = $this->bdd->prepare('SELECT * FROM CATEGORIE_SEANCE WHERE id_cat_seance = ?');
        $req->execute(array($id_cat_seance));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $categorieSeance = new CategorieSeance();
        $categorieSeance->hydrate($donnees);
        return $categorieSeance;
    }

    public function getAll() {
        $categories = [];

        $req = $this->bdd->query('SELECT * FROM CATEGORIE_SEANCE');

        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $categorieSeance = new CategorieSeance();
            $categorieSeance->hydrate($donnees);
            $categories[] = $categorieSeance;
        }

        return $categories;
    }

    public function update(CategorieSeance $categorieSeance) {
        $req = $this->bdd->prepare('UPDATE CATEGORIE_SEANCE SET nom_cat_seance = :nom WHERE id_cat_seance = :id');
        $req->bindValue(':id', $categorieSeance->getId_cat_seance(), PDO::PARAM_INT);
        $req->bindValue(':nom', $categorieSeance->getNom_cat_seance(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
