<?php

class Seance
{
    private $id_seance;
    private $nom_seance;
    private $description_seance;
    private $img_seance;
    private $duree_seance;
    private $contenu_seance;
    private $id_niveau;
    private $id_cat_seance;
    private $id_utilisateur;

    public function getId_seance() {return $this->id_seance;}
    public function getNom_seance() {return $this->nom_seance;}
    public function getDescription_seance() {return $this->description_seance;}
    public function getImg_seance() {return $this->img_seance;}
    public function getDuree_seance() {return $this->duree_seance;}
    public function getContenu_seance() {return $this->contenu_seance;}
    public function getId_niveau() {return $this->id_niveau;}
    public function getId_cat_seance() {return $this->id_cat_seance;}
    public function getId_utilisateur() {return $this->id_utilisateur;}

    public function setId_seance($value) {
        $this->id_seance = $value;
    }
    public function setNom_seance($value) {
        $this->nom_seance = $value;
    }
    public function setDescription_seance($value) {
        $this->description_seance = $value;
    }
    public function setImg_seance($value) {
        $this->img_seance = $value;
    }
    public function setDuree_seance($value) {
        $this->duree_seance = $value;
    }
    public function setContenu_seance($value) {
        $this->contenu_seance = $value;
    }
    public function setId_niveau($value) {
        $this->id_niveau = $value;
    }
    public function setId_cat_seance($value) {
        $this->id_cat_seance = $value;
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

class SeanceManager {
    private $bdd;

    public function setDb(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function __construct($bdd) {
        $this->setDb($bdd);
    }

    public function add(Seance $seance) {
        $req = $this->bdd->prepare('
            INSERT INTO seance 
            (nom_seance, description_seance, img_seance, duree_seance, contenu_seance, id_niveau, id_cat_seance, id_utilisateur) 
            VALUES (:nom, :description, :img, :duree, :contenu, :niveau, :cat_seance, :utilisateur)
        ');

        $req->bindValue(':nom', $seance->getNom_seance(), PDO::PARAM_STR);
        $req->bindValue(':description', $seance->getDescription_seance(), PDO::PARAM_STR);
        $req->bindValue(':img', $seance->getImg_seance(), PDO::PARAM_STR);
        $req->bindValue(':duree', $seance->getDuree_seance(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $seance->getContenu_seance(), PDO::PARAM_STR);
        $req->bindValue(':niveau', $seance->getId_niveau(), PDO::PARAM_INT);
        $req->bindValue(':cat_seance', $seance->getId_cat_seance(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $seance->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }

    public function get($id) {
        $id_seance = (int) $id;
        
        $req = $this->bdd->prepare('SELECT * FROM seance WHERE id_seance = :id');
        $req->bindValue(':id', $id_seance);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {

        $req = $this->bdd->query('SELECT * FROM seance');
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNiveau($id){
        $req = $this->bdd->prepare('SELECT nom_niveau FROM niveau INNER JOIN seance ON niveau.id_niveau = seance.id_niveau WHERE niveau.id_niveau = :id');
    
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }
    
    
    public function getCategorie($id){
        $req = $this->bdd->prepare('SELECT nom_cat_seance FROM categorie_seance INNER JOIN seance ON categorie_seance.id_cat_seance = seance.id_cat_seance WHERE categorie_seance.id_cat_seance = :id');
    
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }

    public function getCoachNom($id){
        $req = $this->bdd->prepare('SELECT nom_utilisateur FROM utilisateur INNER JOIN seance ON utilisateur.id_utilisateur = seance.id_utilisateur WHERE utilisateur.id_utilisateur = :id');
        
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }

    public function getCoachPrenom($id){
        $req = $this->bdd->prepare('SELECT prenom_utilisateur FROM utilisateur INNER JOIN seance ON utilisateur.id_utilisateur = seance.id_utilisateur WHERE utilisateur.id_utilisateur = :id');
        
        $req->bindValue(':id', $id);
        $req->execute();
        return $req->fetchColumn();
    }
    

    public function update(Seance $seance, $id) {
        $req = $this->bdd->prepare('
            UPDATE seance 
            SET nom_seance = :nom, 
                description_seance = :description, 
                duree_seance = :duree, 
                contenu_seance = :contenu, 
                id_niveau = :niveau, 
                id_cat_seance = :cat_seance, 
                id_utilisateur = :utilisateur 
            WHERE id_seance = :id
        ');

        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':nom', $seance->getNom_seance(), PDO::PARAM_STR);
        $req->bindValue(':description', $seance->getDescription_seance(), PDO::PARAM_STR);
        // $req->bindValue(':img', $seance->getImg_seance(), PDO::PARAM_STR);
        $req->bindValue(':duree', $seance->getDuree_seance(), PDO::PARAM_STR);
        $req->bindValue(':contenu', $seance->getContenu_seance(), PDO::PARAM_STR);
        $req->bindValue(':niveau', $seance->getId_niveau(), PDO::PARAM_INT);
        $req->bindValue(':cat_seance', $seance->getId_cat_seance(), PDO::PARAM_INT);
        $req->bindValue(':utilisateur', $seance->getId_utilisateur(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete($id) {
        $req = $this->bdd->prepare('DELETE FROM seance WHERE id_seance = :id');
        $req->bindValue(':id', $id);
        $req->execute();
    }

}

?>