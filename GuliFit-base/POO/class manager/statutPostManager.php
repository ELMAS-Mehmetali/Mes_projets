<?php

class StatutPostManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(StatutPost $statutPost) {
        $req = $this->bdd->prepare('INSERT INTO STATUT_POST (etat_statut) VALUES (:etat)');

        $req->bindValue(':etat', $statutPost->getEtat_statut(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(StatutPost $statutPost) {
        $this->bdd->exec('DELETE FROM STATUT_POST WHERE id_statut = '.$statutPost->getId_statut());
    }

    public function get($id_statut) {
        $id_statut = (int) $id_statut;

        $req = $this->bdd->prepare('SELECT * FROM STATUT_POST WHERE id_statut = ?');
        $req->execute(array($id_statut));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $statutPost = new StatutPost();
        $statutPost->hydrate($donnees);
        return $statutPost;
    }

    public function getAll() {
        $statutPosts = [];

        $req = $this->bdd->query('SELECT * FROM STATUT_POST');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $statutPost = new StatutPost();
            $statutPost->hydrate($donnees);
            $statutPosts[] = $statutPost;
        }

        return $statutPosts;
    }

    public function update(StatutPost $statutPost) {
        $req = $this->bdd->prepare('UPDATE STATUT_POST SET etat_statut = :etat WHERE id_statut = :id');

        $req->bindValue(':id', $statutPost->getId_statut(), PDO::PARAM_INT);
        $req->bindValue(':etat', $statutPost->getEtat_statut(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
