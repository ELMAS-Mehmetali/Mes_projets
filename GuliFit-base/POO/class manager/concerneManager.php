<?php

class ConcerneManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Concerne $concerne) {
        $req = $this->bdd->prepare('
            INSERT INTO CONCERNE 
            (id_seance, id_statut, commentaire_statut, date_statut) 
            VALUES (:seance, :statut, :commentaire, :date_statut)
        ');

        $req->bindValue(':seance', $concerne->getId_seance(), PDO::PARAM_INT);
        $req->bindValue(':statut', $concerne->getId_statut(), PDO::PARAM_INT);
        $req->bindValue(':commentaire', $concerne->getCommentaire_statut(), PDO::PARAM_STR);
        $req->bindValue(':date_statut', $concerne->getDate_statut(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Concerne $concerne) {
        $this->bdd->exec('DELETE FROM CONCERNE WHERE id_seance = '.$concerne->getId_seance().' AND id_statut = '.$concerne->getId_statut());
    }

    public function get($id_seance, $id_statut) {
        $id_seance = (int) $id_seance;
        $id_statut = (int) $id_statut;

        $req = $this->bdd->prepare('SELECT * FROM CONCERNE WHERE id_seance = ? AND id_statut = ?');
        $req->execute(array($id_seance, $id_statut));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $concerne = new Concerne();
        $concerne->hydrate($donnees);
        return $concerne;
    }

    public function getAll() {
        $concernes = [];

        $req = $this->bdd->query('SELECT * FROM CONCERNE');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $concerne = new Concerne();
            $concerne->hydrate($donnees);
            $concernes[] = $concerne;
        }

        return $concernes;
    }

    public function update(Concerne $concerne) {
        $req = $this->bdd->prepare('
            UPDATE CONCERNE 
            SET commentaire_statut = :commentaire, 
                date_statut = :date_statut 
            WHERE id_seance = :seance AND id_statut = :statut
        ');

        $req->bindValue(':seance', $concerne->getId_seance(), PDO::PARAM_INT);
        $req->bindValue(':statut', $concerne->getId_statut(), PDO::PARAM_INT);
        $req->bindValue(':commentaire', $concerne->getCommentaire_statut(), PDO::PARAM_STR);
        $req->bindValue(':date_statut', $concerne->getDate_statut(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
