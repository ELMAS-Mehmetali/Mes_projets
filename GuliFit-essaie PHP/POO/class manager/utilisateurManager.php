<?php

class UtilisateurManager{
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Utilisateur $utilisateur) {
        $req = $this->bdd->prepare('INSERT INTO UTILISATEUR (nom_utilisateur, prenom_utilisateur, date_naissance_utilisateur, localisation_utilisateur, diplome_utilisateur, mail_utilisateur, mdp_utilisateur, confirmation_mdp) VALUES (:nom, :prenom, :date_naissance, :localisation, :diplome, :mail, :mdp, :confirmation_mdp)');

        $req->bindValue(':nom', $utilisateur->getNom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $utilisateur->getPrenom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':date_naissance', $utilisateur->getDate_naissance_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':localisation', $utilisateur->getLocalisation_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':diplome', $utilisateur->getDiplome_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mail', $utilisateur->getMail_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mdp', $utilisateur->getMdp_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':confirmation_mdp', $utilisateur->getConfirmation_mdp(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Utilisateur $utilisateur) {
        $this->bdd->exec('DELETE FROM UTILISATEUR WHERE id_utilisateur = '.$utilisateur->getId_utilisateur());
    }

    public function get($id_utilisateur) {
        $id_utilisateur = (int) $id_utilisateur;

        $req = $this->bdd->prepare('SELECT * FROM UTILISATEUR WHERE id_utilisateur = ?');
        $req->execute(array($id_utilisateur));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $utilisateur = new Utilisateur();
        $utilisateur->hydrate($donnees);
        return $utilisateur;
    }

    public function getAll() {
        $utilisateurs = [];

        $req = $this->bdd->query('SELECT * FROM UTILISATEUR');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $utilisateur = new Utilisateur();
            $utilisateur->hydrate($donnees);
            $utilisateurs[] = $utilisateur;
        }

        return $utilisateurs;
    }

    public function update(Utilisateur $utilisateur) {
        $req = $this->bdd->prepare('UPDATE UTILISATEUR SET nom_utilisateur = :nom, prenom_utilisateur = :prenom, date_naissance_utilisateur = :date_naissance, localisation_utilisateur = :localisation, diplome_utilisateur = :diplome, mail_utilisateur = :mail, mdp_utilisateur = :mdp, confirmation_mdp = :confirmation_mdp WHERE id_utilisateur = :id');

        $req->bindValue(':id', $utilisateur->getId_utilisateur(), PDO::PARAM_INT);
        $req->bindValue(':nom', $utilisateur->getNom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $utilisateur->getPrenom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':date_naissance', $utilisateur->getDate_naissance_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':localisation', $utilisateur->getLocalisation_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':diplome', $utilisateur->getDiplome_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mail', $utilisateur->getMail_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mdp', $utilisateur->getMdp_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':confirmation_mdp', $utilisateur->getConfirmation_mdp(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
