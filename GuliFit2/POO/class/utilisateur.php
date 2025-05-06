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
    private $confirmation_mdp;

    public function getId_utilisateur() {return $this->id_utilisateur;}
    public function getNom_utilisateur() {return $this->nom_utilisateur;}
    public function getPrenom_utilisateur() {return $this->prenom_utilisateur;}
    public function getDate_naissance_utilisateur() {return $this->date_naissance_utilisateur;}
    public function getLocalisation_utilisateur() {return $this->localisation_utilisateur;}
    public function getDiplome_utilisateur() {return $this->diplome_utilisateur;}
    public function getMail_utilisateur() {return $this->mail_utilisateur;}
    public function getMdp_utilisateur() {return $this->mdp_utilisateur;}
    public function getConfirmation_mdp() {return $this->confirmation_mdp;}

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
    public function setConfirmation_mdp($value) {
        $this->confirmation_mdp = $value;
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

?>