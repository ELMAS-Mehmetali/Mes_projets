<?php

class ObjectifPlatManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(ObjectifPlat $objectifPlat) {
        $req = $this->bdd->prepare('INSERT INTO OBJECTIF_PLAT (nom_objectif_plat) VALUES (:nom)');

        $req->bindValue(':nom', $objectifPlat->getNom_objectif_plat(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(ObjectifPlat $objectifPlat) {
        $this->bdd->exec('DELETE FROM OBJECTIF_PLAT WHERE id_objectif_plat = '.$objectifPlat->getId_objectif_plat());
    }

    public function get($id_objectif_plat) {
        $id_objectif_plat = (int) $id_objectif_plat;

        $req = $this->bdd->prepare('SELECT * FROM OBJECTIF_PLAT WHERE id_objectif_plat = ?');
        $req->execute(array($id_objectif_plat));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $objectifPlat = new ObjectifPlat();
        $objectifPlat->hydrate($donnees);
        return $objectifPlat;
    }

    public function getAll() {
        $objectifPlats = [];

        $req = $this->bdd->query('SELECT * FROM OBJECTIF_PLAT');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $objectifPlat = new ObjectifPlat();
            $objectifPlat->hydrate($donnees);
            $objectifPlats[] = $objectifPlat;
        }

        return $objectifPlats;
    }

    public function update(ObjectifPlat $objectifPlat) {
        $req = $this->bdd->prepare('UPDATE OBJECTIF_PLAT SET nom_objectif_plat = :nom WHERE id_objectif_plat = :id');

        $req->bindValue(':id', $objectifPlat->getId_objectif_plat(), PDO::PARAM_INT);
        $req->bindValue(':nom', $objectifPlat->getNom_objectif_plat(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
