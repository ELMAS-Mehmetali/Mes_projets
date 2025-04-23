<?php

class TypeManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Type $type) {
        $req = $this->bdd->prepare('INSERT INTO TYPE (nom_type) VALUES (:nom)');

        $req->bindValue(':nom', $type->getNom_type(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Type $type) {
        $this->bdd->exec('DELETE FROM TYPE WHERE id_type = '.$type->getId_type());
    }

    public function get($id_type) {
        $id_type = (int) $id_type;

        $req = $this->bdd->prepare('SELECT * FROM TYPE WHERE id_type = ?');
        $req->execute(array($id_type));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $type = new Type();
        $type->hydrate($donnees);
        return $type;
    }

    public function getAll() {
        $types = [];

        $req = $this->bdd->query('SELECT * FROM TYPE');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $type = new Type();
            $type->hydrate($donnees);
            $types[] = $type;
        }

        return $types;
    }

    public function update(Type $type) {
        $req = $this->bdd->prepare('UPDATE TYPE SET nom_type = :nom WHERE id_type = :id');

        $req->bindValue(':id', $type->getId_type(), PDO::PARAM_INT);
        $req->bindValue(':nom', $type->getNom_type(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
