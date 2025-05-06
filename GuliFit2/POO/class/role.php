<?php

class Role
{
    private $id_role;
    private $nom_role;

    public function getId_role() {return $this->id_role;}
    public function getNom_role() {return $this->nom_role;}

    public function setId_role($value) {
        $this->id_role = $value;
    }
    public function setNom_role($value) {
        $this->nom_role = $value;
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
