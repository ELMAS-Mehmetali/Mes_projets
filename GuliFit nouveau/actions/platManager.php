<?php

class Plat
{
    private $id_plat;
    private $nom_plat;
    private $description_plat;
    private $img_plat;
    private $temps_prep_plat;
    private $ingredients_plat;
    private $preparation_plat;
    private $id_type;
    private $id_objectif_plat;
    private $id_utilisateur;

    public function getId_plat() {return $this->id_plat;}
    public function getNom_plat() {return $this->nom_plat;}
    public function getDescription_plat() {return $this->description_plat;}
    public function getImg_plat() {return $this->img_plat;}
    public function getTemps_prep_plat() {return $this->temps_prep_plat;}
    public function getIngredients_plat() {return $this->ingredients_plat;}
    public function getPreparation_plat() {return $this->preparation_plat;}
    public function getId_type() {return $this->id_type;}
    public function getId_objectif_plat() {return $this->id_objectif_plat;}
    public function getId_utilisateur() {return $this->id_utilisateur;}

    public function setId_plat($value) {
        $this->id_plat = $value;
    }
    public function setNom_plat($value) {
        $this->nom_plat = $value;
    }
    public function setDescription_plat($value) {
        $this->description_plat = $value;
    }
    public function setImg_plat($value) {
        $this->img_plat = $value;
    }
    public function setTemps_prep_plat($value) {
        $this->temps_prep_plat = $value;
    }
    public function setIngredients_plat($value) {
        $this->ingredients_plat = $value;
    }
    public function setPreparation_plat($value) {
        $this->preparation_plat = $value;
    }
    public function setId_type($value) {
        $this->id_type = $value;
    }
    public function setId_objectif_plat($value) {
        $this->id_objectif_plat = $value;
    }
    public function setId_utilisateur($value) {
        $this->id_utilisateur = $value;
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

class PlatManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Plat $plat) {
        $req = $this->bdd->prepare('
            INSERT INTO plat 
            (nom_plat, description_plat, temps_prep_plat, ingredients_plat, preparation_plat, id_type, id_objectif_plat, id_utilisateur) 
            VALUES (:nom, :description, :temps_prep, :ingredients, :preparation, :type, :objectif_plat, :utilisateur)
        ');

        $req->bindValue(':nom', $plat->getNom_plat());
        $req->bindValue(':description', $plat->getDescription_plat());
        // $req->bindValue(':img', $plat->getImg_plat(), PDO::PARAM_STR);
        $req->bindValue(':temps_prep', $plat->getTemps_prep_plat());
        $req->bindValue(':ingredients', $plat->getIngredients_plat());
        $req->bindValue(':preparation', $plat->getPreparation_plat());
        $req->bindValue(':type', $plat->getId_type());
        $req->bindValue(':objectif_plat', $plat->getId_objectif_plat());
        $req->bindValue(':utilisateur', $plat->getId_utilisateur());

        $req->execute();
    }

    public function get($id) {
        $id_plat = (int) $id;

        $req = $this->bdd->prepare('SELECT * FROM plat WHERE id_plat = :id');
        $req->bindValue(':id', $id_plat);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {

        $req = $this->bdd->query('SELECT * FROM plat');
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getType($id){
        $req = $this->bdd->prepare('SELECT nom_type FROM type INNER JOIN plat ON type.id_type = plat.id_plat WHERE type.id_type = :id');
    
    $req->bindValue(':id', $id);
    $req->execute();
    return $req->fetchColumn();
    }
    
    
    public function getObjectif($id){
        $req = $this->bdd->prepare('SELECT nom_objectif_plat FROM objectif_plat INNER JOIN plat ON objectif_plat.id_objectif_plat = plat.id_objectif_plat WHERE objectif_plat.id_objectif_plat = :id');
    
    $req->bindValue(':id', $id);
    $req->execute();
    return $req->fetchColumn();
    }

    public function getCoachNom($id){
        $req = $this->bdd->prepare('SELECT nom_utilisateur FROM utilisateur INNER JOIN plat ON utilisateur.id_utilisateur = plat.id_utilisateur WHERE utilisateur.id_utilisateur = :id');
        
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }

    public function getCoachPrenom($id){
        $req = $this->bdd->prepare('SELECT prenom_utilisateur FROM utilisateur INNER JOIN plat ON utilisateur.id_utilisateur = plat.id_utilisateur WHERE utilisateur.id_utilisateur = :id');
        
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }

    public function update(Plat $plat, $id) {
        $req = $this->bdd->prepare('
            UPDATE plat 
            SET nom_plat = :nom, 
                description_plat = :description, 
                temps_prep_plat = :temps_prep, 
                ingredients_plat = :ingredients, 
                preparation_plat = :preparation, 
                id_type = :type, 
                id_objectif_plat = :objectif_plat, 
                id_utilisateur = :utilisateur 
            WHERE id_plat = :id
        ');

        $req->bindValue(':id', $plat->getId_plat(), PDO::PARAM_INT);
        $req->bindValue(':nom', $plat->getNom_plat(), PDO::PARAM_STR);
        $req->bindValue(':description', $plat->getDescription_plat(), PDO::PARAM_STR);
        // $req->bindValue(':img', $plat->getImg_plat(), PDO::PARAM_STR);
        $req->bindValue(':temps_prep', $plat->getTemps_prep_plat(), PDO::PARAM_STR);
        $req->bindValue(':ingredients', $plat->getIngredients_plat(), PDO::PARAM_STR);
        $req->bindValue(':preparation', $plat->getPreparation_plat(), PDO::PARAM_STR);
        $req->bindValue(':type', $plat->getId_type(), PDO::PARAM_INT);
        $req->bindValue(':objectif_plat', $plat->getId_objectif_plat(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $plat->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete($id) {
        $req = $this->bdd->prepare('DELETE FROM plat WHERE id_plat = :id');
        $req->bindValue(':id', $id);
        $req->execute();
    }
}
?>
