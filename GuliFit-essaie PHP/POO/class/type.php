<?php

class Type
{
    private $id_type;
    private $nom_type;

    public function getId_type() {return $this->id_type;}
    public function getNom_type() {return $this->nom_type;}

    public function setId_type($value) {
        $this->id_type = $value;
    }
    public function setNom_type($value) {
        $this->nom_type = $value;
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
