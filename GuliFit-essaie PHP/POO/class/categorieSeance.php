<?php

class CategorieSeance {
    private $id_cat_seance;
    private $nom_cat_seance;

    public function getId_cat_seance() {
        return $this->id_cat_seance;
    }

    public function getNom_cat_seance() {
        return $this->nom_cat_seance;
    }

    public function setId_cat_seance($value) {
        $this->id_cat_seance = $value;
    }

    public function setNom_cat_seance($value) {
        $this->nom_cat_seance = $value;
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}

?>
