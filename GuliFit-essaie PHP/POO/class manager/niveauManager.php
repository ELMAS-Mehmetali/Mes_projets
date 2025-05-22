<?php

class NiveauManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Niveau $niveau) {
        $req = $this->bdd->prepare('INSERT INTO NIVEAU (nom_niveau) VALUES (:nom)');

        $req->bindValue(':nom', $niveau->getNom_niveau(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Niveau $niveau) {
        $this->bdd->exec('DELETE FROM NIVEAU WHERE id_niveau = '.$niveau->getId_niveau());
    }

    public function get($id_niveau) {
        $id_niveau = (int) $id_niveau;

        $req = $this->bdd->prepare('SELECT * FROM NIVEAU WHERE id_niveau = ?');
        $req->execute(array($id_niveau));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $niveau = new Niveau();
        $niveau->hydrate($donnees);
        return $niveau;
    }

    public function getAll() {
        $niveaux = [];

        $req = $this->bdd->query('SELECT * FROM NIVEAU');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $niveau = new Niveau();
            $niveau->hydrate($donnees);
            $niveaux[] = $niveau;
        }

        return $niveaux;
    }

    public function update(Niveau $niveau) {
        $req = $this->bdd->prepare('UPDATE NIVEAU SET nom_niveau = :nom WHERE id_niveau = :id');

        $req->bindValue(':id', $niveau->getId_niveau(), PDO::PARAM_INT);
        $req->bindValue(':nom', $niveau->getNom_niveau(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
