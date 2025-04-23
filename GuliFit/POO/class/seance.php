<?php

class Seance
{
    private $id_seance;
    private $nom_seance;
    private $description_seance;
    private $img_seance;
    private $duree_seance;
    private $contenu_seance;
    private $id_niveau;
    private $id_cat_seance;
    private $id_utilisateur;

    public function getId_seance() {return $this->id_seance;}
    public function getNom_seance() {return $this->nom_seance;}
    public function getDescription_seance() {return $this->description_seance;}
    public function getImg_seance() {return $this->img_seance;}
    public function getDuree_seance() {return $this->duree_seance;}
    public function getContenu_seance() {return $this->contenu_seance;}
    public function getId_niveau() {return $this->id_niveau;}
    public function getId_cat_seance() {return $this->id_cat_seance;}
    public function getId_utilisateur() {return $this->id_utilisateur;}

    public function setId_seance($value) {
        $this->id_seance = $value;
    }
    public function setNom_seance($value) {
        $this->nom_seance = $value;
    }
    public function setDescription_seance($value) {
        $this->description_seance = $value;
    }
    public function setImg_seance($value) {
        $this->img_seance = $value;
    }
    public function setDuree_seance($value) {
        $this->duree_seance = $value;
    }
    public function setContenu_seance($value) {
        $this->contenu_seance = $value;
    }
    public function setId_niveau($value) {
        $this->id_niveau = $value;
    }
    public function setId_cat_seance($value) {
        $this->id_cat_seance = $value;
    }
    public function setId_utilisateur($value) {
        $this->id_utilisateur = $value;
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
