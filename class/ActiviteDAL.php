<?php 

namespace DAL;


class ActiviteDAL{

	protected $db;
    public $id,$sport,$dateT,$descr,$ville,$nom,$maxInscrit,$niveau,$adresse,$organisateur;
	public function __construct($db){
		$this->db = $db;
	}

	public function getAllActivite(){
		$response = $this->db->query('SELECT * FROM activite');
        $items = array();
		while($donnees=$response->fetch())
        {
            $temp= new ActiviteDAL($this->db);
            $temp->dateT=$donnees['date'];
            $temp->descr=$donnees['description'];
            $temp->nom=$donnees['nom'];
            $temp->id=$donnees['id_activite'];
            $temp->ville=$this->getVilleById($donnees['id_ville']);
            $temp->sport=$this->getSportById($donnees['id_sport']);
            $temp->organisateur=$this->getOrganisateurById($donnees['id_organisateur']);
            
            $items[]=$temp;
        }
        return $items;
	}
    
    public function getActiviteById($id){
        $reponse = $this->db->query('Select * from activite where id_activite='.$id);
        $donnees = $reponse->fetch();
        $this->dateT=$donnees['date'];
        $this->descr=$donnees['description'];
        $this->nom=$donnees['nom'];
        $this->id=$donnees['id_activite'];
        $this->ville=$this->getVilleById($donnees['id_ville']);
        $this->sport=$this->getSportById($donnees['id_sport']);
        $this->organisateur=$this->getOrganisateurById($donnees['id_organisateur']);
    }
    
    public function getActiviteByResearch($date,$intituleSport,$ville){
        $activite = $this->db->query("Select * from activite INNER JOIN sports on sports.id_sports=activite.id_sport INNER JOIN ville on ville.id_ville=activite.id_ville where sports.intitule='".$intituleSport."' and ville.intitule='".$ville."' and date>='".$date."'");
        return $activite->fetchAll();
    }
    
    public function getActiviteByResearchWithoutDate($intituleSport,$ville){
        $activite = $this->db->query("Select * from activite INNER JOIN sports on sports.id_sports=activite.id_sport INNER JOIN ville on ville.id_ville=activite.id_ville where sports.intitule='".$intituleSport."' and ville.intitule='".$ville."'");
        return $activite->fetchAll();
    }
    
    //créer une activite
    public function createActivite($nomActivite,$idSport,$date,$maxInscrit,$idNiveau,
                                  $description,$idVille,$idOrganisateur,$adresse){
        $req=$this->db->prepare("INSERT INTO activite (`nom`, `id_sport`, `date`, `max_inscrits`, `id_niveau`, `description`, `id_ville`, `id_organisateur`,  `adresse`) VALUES (:nom,:id_sport,:date,:max_inscrits,:id_niveau,:description,:id_ville,:id_organisateur,:adresse)");
        
        $req->execute(array(
            "nom" => $nomActivite, 
            "id_sport" => $idSport,
            "date" => $date,
            "max_inscrits" => $maxInscrit,
            "id_niveau" => $idNiveau,
            "description" => $description,
            "id_ville" => $idVille,
            "id_organisateur" => $idOrganisateur,
            "adresse" => $adresse
            ));
        
    }
    
    //s'inscrire a une activite
    public function registerToActivite($idActivite,$idUtilisateur){
        $req=$this->db->prepare("INSERT INTO `activite_utilisateur`(`id_activite`, `id_utilisateur`) VALUES(:id_activite,:id_utilisateur) ");
                $req->execute(array(
            "id_activite" => $idActivite, 
            "id_utilisateur" => $idUtilisateur
            ));
    }
    
    
    public function getActiviteByDate($date){
        $activite = $this->db->query("Select * from activite where date>='".$date."'");
        return $activite->fetchAll();
    }
    
    public function getActiviteByVille($ville){
        $activite = $this->db->query("Select * from activite INNER JOIN ville on ville.id_ville=activite.id_ville where ville.intitule='".$ville."'");
        return $activite->fetchAll();
    }
    
    public function getActiviteByIntitule($intituleSport){
        $activite = $this->db->query("Select * from activite INNER JOIN sports on sports.id_sports=activite.id_sport  where sports.intitule='".$intituleSport."'");
        return $activite->fetchAll();
    }
    
    public function getVilleById($id){
        $activite = $this->db->query("SELECT intitule FROM ville WHERE id_ville=".$id);
        $res= $activite->fetch();
        return $res['intitule'];
    }
    
    public function getSportById($id){
        $activite = $this->db->query("SELECT intitule FROM sports WHERE id_sports=".$id);
		$res= $activite->fetch();
        return $res['intitule'];
    }
    
        public function getOrganisateurById($id){
        $activite = $this->db->query("SELECT pseudo FROM utilisateur WHERE id_utilisateur=".$id);
		$res= $activite->fetch();
        return $res['pseudo'];
    }
}

?>