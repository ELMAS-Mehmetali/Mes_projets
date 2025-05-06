<?php

class Obtenir
{
    private $id_utilisateur;
    private $id_role;

    public function getId_utilisateur() { return $this->id_utilisateur; }
    public function getId_role() { return $this->id_role; }

    public function setId_utilisateur($value) {
        $this->id_utilisateur = $value;
    }
    public function setId_role($value) {
        $this->id_role = $value;
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
