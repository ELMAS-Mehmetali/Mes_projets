<?php

class ObtenirManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Obtenir $obtenir) {
        $req = $this->bdd->prepare('
            INSERT INTO OBTENIR 
            (id_utilisateur, id_role) 
            VALUES (:utilisateur, :role)
        ');

        $req->bindValue(':utilisateur', $obtenir->getId_utilisateur(), PDO::PARAM_INT);
        $req->bindValue(':role', $obtenir->getId_role(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete(Obtenir $obtenir) {
        $this->bdd->exec('DELETE FROM OBTENIR WHERE id_utilisateur = '.$obtenir->getId_utilisateur().' AND id_role = '.$obtenir->getId_role());
    }

    public function get($id_utilisateur, $id_role) {
        $id_utilisateur = (int) $id_utilisateur;
        $id_role = (int) $id_role;

        $req = $this->bdd->prepare('SELECT * FROM OBTENIR WHERE id_utilisateur = ? AND id_role = ?');
        $req->execute(array($id_utilisateur, $id_role));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $obtenir = new Obtenir();
        $obtenir->hydrate($donnees);
        return $obtenir;
    }

    public function getAll() {
        $obtenirs = [];

        $req = $this->bdd->query('SELECT * FROM OBTENIR');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $obtenir = new Obtenir();
            $obtenir->hydrate($donnees);
            $obtenirs[] = $obtenir;
        }

        return $obtenirs;
    }

    public function update(Obtenir $obtenir) {
        $req = $this->bdd->prepare('
            UPDATE OBTENIR 
            SET id_role = :role 
            WHERE id_utilisateur = :utilisateur
        ');

        $req->bindValue(':utilisateur', $obtenir->getId_utilisateur(), PDO::PARAM_INT);
        $req->bindValue(':role', $obtenir->getId_role(), PDO::PARAM_INT);

        $req->execute();
    }
}

?>
