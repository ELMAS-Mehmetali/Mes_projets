<?php

class Utilisateur
{
    private $id_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $date_naissance_utilisateur;
    private $localisation_utilisateur;
    private $diplome_utilisateur;
    private $mail_utilisateur;
    private $mdp_utilisateur;

    public function getId_utilisateur() {return $this->id_utilisateur;}
    public function getNom_utilisateur() {return $this->nom_utilisateur;}
    public function getPrenom_utilisateur() {return $this->prenom_utilisateur;}
    public function getDate_naissance_utilisateur() {return $this->date_naissance_utilisateur;}
    public function getLocalisation_utilisateur() {return $this->localisation_utilisateur;}
    public function getDiplome_utilisateur() {return $this->diplome_utilisateur;}
    public function getMail_utilisateur() {return $this->mail_utilisateur;}
    public function getMdp_utilisateur() {return $this->mdp_utilisateur;}

    public function setId_utilisateur($value) {
        $this->id_utilisateur = $value;
    }
    public function setNom_utilisateur($value) {
        $this->nom_utilisateur = $value;
    }
    public function setPrenom_utilisateur($value) {
        $this->prenom_utilisateur = $value;
    }
    public function setDate_naissance_utilisateur($value) {
        $this->date_naissance_utilisateur = $value;
    }
    public function setLocalisation_utilisateur($value) {
        $this->localisation_utilisateur = $value;
    }
    public function setDiplome_utilisateur($value) {
        $this->diplome_utilisateur = $value;
    }
    public function setMail_utilisateur($value) {
        $this->mail_utilisateur = $value;
    }
    public function setMdp_utilisateur($value) {
        $this->mdp_utilisateur = $value;
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}

class UtilisateurManager{
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Utilisateur $utilisateur) {
        $req = $this->bdd->prepare('INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, date_naissance_utilisateur, localisation_utilisateur, diplome_utilisateur, mail_utilisateur, mdp_utilisateur) VALUES (:nom, :prenom, :date_naissance, :localisation, :diplome, :mail, :mdp)');

        $req->bindValue(':nom', $utilisateur->getNom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $utilisateur->getPrenom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':date_naissance', $utilisateur->getDate_naissance_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':localisation', $utilisateur->getLocalisation_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':diplome', $utilisateur->getDiplome_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mail', $utilisateur->getMail_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mdp', $utilisateur->getMdp_utilisateur(), PDO::PARAM_STR);

        $req->execute();
    }

    public function get($id) {
        $id_utilisateur = (int) $id;

        $req = $this->bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = :id');
        $req->bindValue(':id', $id_utilisateur);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {

        $req = $this->bdd->query('SELECT * FROM utilisateur');
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(Utilisateur $utilisateur, $id) {
        $req = $this->bdd->prepare('UPDATE utilisateur SET nom_utilisateur = :nom, prenom_utilisateur = :prenom, date_naissance_utilisateur = :date_naissance, localisation_utilisateur = :localisation, diplome_utilisateur = :diplome, mail_utilisateur = :mail, mdp_utilisateur = :mdp WHERE id_utilisateur = :id');

        $req->bindValue(':id', $utilisateur->getId_utilisateur(), PDO::PARAM_INT);
        $req->bindValue(':nom', $utilisateur->getNom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $utilisateur->getPrenom_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':date_naissance', $utilisateur->getDate_naissance_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':localisation', $utilisateur->getLocalisation_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':diplome', $utilisateur->getDiplome_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mail', $utilisateur->getMail_utilisateur(), PDO::PARAM_STR);
        $req->bindValue(':mdp', $utilisateur->getMdp_utilisateur(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete($id) {
        $req = $this->bdd->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id');
        $req->bindValue(':id', $id);
        $req->execute();
    }
}

?>
