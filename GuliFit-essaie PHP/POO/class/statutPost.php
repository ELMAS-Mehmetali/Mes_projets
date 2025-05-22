<?php

class StatutPost
{
    private $id_statut;
    private $etat_statut;

    public function getId_statut() {return $this->id_statut;}
    public function getEtat_statut() {return $this->etat_statut;}

    public function setId_statut($value) {
        $this->id_statut = $value;
    }
    public function setEtat_statut($value) {
        $this->etat_statut = $value;
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
