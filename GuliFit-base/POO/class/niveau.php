<?php

class Niveau
{
    private $id_niveau;
    private $nom_niveau;

    public function getId_niveau() {return $this->id_niveau;}
    public function getNom_niveau() {return $this->nom_niveau;}

    public function setId_niveau($value) {
        $this->id_niveau = $value;
    }
    public function setNom_niveau($value) {
        $this->nom_niveau = $value;
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
