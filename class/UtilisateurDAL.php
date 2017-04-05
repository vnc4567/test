<?php 

namespace DAL;


class UtilisateurDAL{

	protected $db;

	public function __construct($db){
		$this->db = $db;
	}
    
    //connexion
    public function connexion($pseudo,$mdo){
        
    }
    
    //recuperer tous les Utilisateurs
    public function getAllUtilisateur(){
		$activite = $this->db->query('SELECT * FROM utilisateur');
		return $activite->fetchAll();
	}
    
    //recuperer un Utilisateur
    public function getUtilisateurById($id){
        $activite = $this->db->query('Select * from utilisateur where id_utilisateur='.$id);
        return $activite->fetchAll();
    }
    
    //modifier Utilisateur
    public function updateUtilisateur($id,$pseudo,$mdp,$mail){
         $req=$this->db->prepare("UPDATE utilisateur SET `pseudo`=:pseudo, `mot_de_passe`=:mot_de_passe, `mail`=:mail WHERE `id_utilisateur`=:id_utilisateur ");
        $req->execute(array(
            "pseudo" => $pseudo,
            "mot_de_passe" => $mdp,
            "mail" => $mail,
            "id_utilisateur" => $id
            ));
    }
    
    //ajouter un Utilisateur
    public function createUtilisateur($pseudo,$mdp,$mail,$date){
        $req=$this->db->prepare("INSERT INTO utilisateur (`pseudo`, `mot_de_passe`, `mail`, `date_inscription`) VALUES (:pseudo,:mot_de_passe,:mail,:date_inscription) ");
        $req->execute(array(
            "pseudo" => $pseudo,
            "mot_de_passe" => $mdp,
            "mail" => $mail,
            "date_inscription" => $date
            ));
        $id = $this->db->lastInsertId();
        return $id;
    }
        
    //supprimer Utilisateur
    public function deleteUtilisateur($id){
        $req=$this->db->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
                        $req->execute(array(
            "id_utilisateur" => $id
            ));
    }

    //rechercher Utilisateur en fonction de son activite et son niveau ??
    
}
    ?>