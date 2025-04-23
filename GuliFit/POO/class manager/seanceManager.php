<?php

class SeanceManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Seance $seance) {
        $req = $this->bdd->prepare('
            INSERT INTO SEANCE 
            (nom_seance, description_seance, img_seance, duree_seance, contenu_seance, id_niveau, id_cat_seance, id_utilisateur) 
            VALUES (:nom, :description, :img, :duree, :contenu, :niveau, :cat_seance, :utilisateur)
        ');

        $req->bindValue(':nom', $seance->getNom_seance(), PDO::PARAM_STR);
        $req->bindValue(':description', $seance->getDescription_seance(), PDO::PARAM_STR);
        $req->bindValue(':img', $seance->getImg_seance(), PDO::PARAM_STR);
        $req->bindValue(':duree', $seance->getDuree_seance(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $seance->getContenu_seance(), PDO::PARAM_STR);
        $req->bindValue(':niveau', $seance->getId_niveau(), PDO::PARAM_INT);
        $req->bindValue(':cat_seance', $seance->getId_cat_seance(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $seance->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete(Seance $seance) {
        $this->bdd->exec('DELETE FROM SEANCE WHERE id_seance = '.$seance->getId_seance());
    }

    public function get($id_seance) {
        $id_seance = (int) $id_seance;

        $req = $this->bdd->prepare('SELECT * FROM SEANCE WHERE id_seance = ?');
        $req->execute(array($id_seance));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $seance = new Seance();
        $seance->hydrate($donnees);
        return $seance;
    }

    public function getAll() {
        $seances = [];

        $req = $this->bdd->query('SELECT * FROM SEANCE');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $seance = new Seance();
            $seance->hydrate($donnees);
            $seances[] = $seance;
        }

        return $seances;
    }

    public function update(Seance $seance) {
        $req = $this->bdd->prepare('
            UPDATE SEANCE 
            SET nom_seance = :nom, 
                description_seance = :description, 
                img_seance = :img, 
                duree_seance = :duree, 
                contenu_seance = :contenu, 
                id_niveau = :niveau, 
                id_cat_seance = :cat_seance, 
                id_utilisateur = :utilisateur 
            WHERE id_seance = :id
        ');

        $req->bindValue(':id', $seance->getId_seance(), PDO::PARAM_INT);
        $req->bindValue(':nom', $seance->getNom_seance(), PDO::PARAM_STR);
        $req->bindValue(':description', $seance->getDescription_seance(), PDO::PARAM_STR);
        $req->bindValue(':img', $seance->getImg_seance(), PDO::PARAM_STR);
        $req->bindValue(':duree', $seance->getDuree_seance(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $seance->getContenu_seance(), PDO::PARAM_STR);
        $req->bindValue(':niveau', $seance->getId_niveau(), PDO::PARAM_INT);
        $req->bindValue(':cat_seance', $seance->getId_cat_seance(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $seance->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }
}

?>
