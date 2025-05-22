<?php

class Concerne
{
    private $id_seance;
    private $id_statut;
    private $commentaire_statut;
    private $date_statut;

    public function getId_seance() { return $this->id_seance; }
    public function getId_statut() { return $this->id_statut; }
    public function getCommentaire_statut() { return $this->commentaire_statut; }
    public function getDate_statut() { return $this->date_statut; }

    public function setId_seance($value) {
        $this->id_seance = $value;
    }
    public function setId_statut($value) {
        $this->id_statut = $value;
    }
    public function setCommentaire_statut($value) {
        $this->commentaire_statut = $value;
    }
    public function setDate_statut($value) {
        $this->date_statut = $value;
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
