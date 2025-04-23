<?php

class ObjectifPlat
{
    private $id_objectif_plat;
    private $nom_objectif_plat;

    public function getId_objectif_plat() {return $this->id_objectif_plat;}
    public function getNom_objectif_plat() {return $this->nom_objectif_plat;}

    public function setId_objectif_plat($value) {
        $this->id_objectif_plat = $value;
    }
    public function setNom_objectif_plat($value) {
        $this->nom_objectif_plat = $value;
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
