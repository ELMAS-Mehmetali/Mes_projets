<?php

class EtreManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Etre $etre) {
        $req = $this->bdd->prepare('
            INSERT INTO ETRE 
            (id_plat, id_statut, commentaire_statut, date_statut) 
            VALUES (:plat, :statut, :commentaire, :date_statut)
        ');

        $req->bindValue(':plat', $etre->getId_plat(), PDO::PARAM_INT);
        $req->bindValue(':statut', $etre->getId_statut(), PDO::PARAM_INT);
        $req->bindValue(':commentaire', $etre->getCommentaire_statut(), PDO::PARAM_STR);
        $req->bindValue(':date_statut', $etre->getDate_statut(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Etre $etre) {
        $this->bdd->exec('DELETE FROM ETRE WHERE id_plat = '.$etre->getId_plat().' AND id_statut = '.$etre->getId_statut());
    }

    public function get($id_plat, $id_statut) {
        $id_plat = (int) $id_plat;
        $id_statut = (int) $id_statut;

        $req = $this->bdd->prepare('SELECT * FROM ETRE WHERE id_plat = ? AND id_statut = ?');
        $req->execute(array($id_plat, $id_statut));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $etre = new Etre();
        $etre->hydrate($donnees);
        return $etre;
    }

    public function getAll() {
        $etres = [];

        $req = $this->bdd->query('SELECT * FROM ETRE');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $etre = new Etre();
            $etre->hydrate($donnees);
            $etres[] = $etre;
        }

        return $etres;
    }

    public function update(Etre $etre) {
        $req = $this->bdd->prepare('
            UPDATE ETRE 
            SET commentaire_statut = :commentaire, 
                date_statut = :date_statut 
            WHERE id_plat = :plat AND id_statut = :statut
        ');

        $req->bindValue(':plat', $etre->getId_plat(), PDO::PARAM_INT);
        $req->bindValue(':statut', $etre->getId_statut(), PDO::PARAM_INT);
        $req->bindValue(':commentaire', $etre->getCommentaire_statut(), PDO::PARAM_STR);
        $req->bindValue(':date_statut', $etre->getDate_statut(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
