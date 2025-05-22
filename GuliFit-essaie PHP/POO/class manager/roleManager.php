<?php

class RoleManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Role $role) {
        $req = $this->bdd->prepare('INSERT INTO ROLE (nom_role) VALUES (:nom)');

        $req->bindValue(':nom', $role->getNom_role(), PDO::PARAM_STR);

        $req->execute();
    }

    public function delete(Role $role) {
        $this->bdd->exec('DELETE FROM ROLE WHERE id_role = '.$role->getId_role());
    }

    public function get($id_role) {
        $id_role = (int) $id_role;

        $req = $this->bdd->prepare('SELECT * FROM ROLE WHERE id_role = ?');
        $req->execute(array($id_role));
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $role = new Role();
        $role->hydrate($donnees);
        return $role;
    }

    public function getAll() {
        $roles = [];

        $req = $this->bdd->query('SELECT * FROM ROLE');

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $role = new Role();
            $role->hydrate($donnees);
            $roles[] = $role;
        }

        return $roles;
    }

    public function update(Role $role) {
        $req = $this->bdd->prepare('UPDATE ROLE SET nom_role = :nom WHERE id_role = :id');

        $req->bindValue(':id', $role->getId_role(), PDO::PARAM_INT);
        $req->bindValue(':nom', $role->getNom_role(), PDO::PARAM_STR);

        $req->execute();
    }
}

?>
