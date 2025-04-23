<?php

class Plat
{
    private $id_plat;
    private $nom_plat;
    private $description_plat;
    private $img_plat;
    private $temps_prep_plat;
    private $ingredients_plat;
    private $preparation_plat;
    private $id_type;
    private $id_objectif_plat;
    private $id_utilisateur;

    public function getId_plat() {return $this->id_plat;}
    public function getNom_plat() {return $this->nom_plat;}
    public function getDescription_plat() {return $this->description_plat;}
    public function getImg_plat() {return $this->img_plat;}
    public function getTemps_prep_plat() {return $this->temps_prep_plat;}
    public function getIngredients_plat() {return $this->ingredients_plat;}
    public function getPreparation_plat() {return $this->preparation_plat;}
    public function getId_type() {return $this->id_type;}
    public function getId_objectif_plat() {return $this->id_objectif_plat;}
    public function getId_utilisateur() {return $this->id_utilisateur;}

    public function setId_plat($value) {
        $this->id_plat = $value;
    }
    public function setNom_plat($value) {
        $this->nom_plat = $value;
    }
    public function setDescription_plat($value) {
        $this->description_plat = $value;
    }
    public function setImg_plat($value) {
        $this->img_plat = $value;
    }
    public function setTemps_prep_plat($value) {
        $this->temps_prep_plat = $value;
    }
    public function setIngredients_plat($value) {
        $this->ingredients_plat = $value;
    }
    public function setPreparation_plat($value) {
        $this->preparation_plat = $value;
    }
    public function setId_type($value) {
        $this->id_type = $value;
    }
    public function setId_objectif_plat($value) {
        $this->id_objectif_plat = $value;
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
