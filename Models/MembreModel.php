<?php

namespace App\Models;
ini_set('display_errors', 1);
error_reporting(E_ALL);
use Exception;
use App\Core\DbConnect;
use App\Entities\InscritEntities;

class MembreModel extends DbConnect{

    public function find(int $id){
        $this->requete = $this->connexion->prepare("SELECT * FROM Inscrit WHERE id=:id");
        $this->requete->bindParam(':id',$id);
        $this->requete->execute();
        $resultat = $this->requete->fetch();
        return $resultat;
    }
    
    public function connexionMembre(){
        $this->requete ="SELECT * FROM Inscrit WHERE email=?";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->execute(array($_POST['email']));
        $resultat = $this->requete->fetch();
        return $resultat;
    }

    public function updateMembre(InscritEntities $em){
        $this->requete = "UPDATE Inscrit SET email=:email,nom=:nom,prenom=:prenom,adresse=:adresse WHERE id=:id";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindValue(':id',$em->getId());
        $this->requete->bindValue(':email',$em->getEmail());
        $this->requete->bindValue(':nom',$em->getNom());
        $this->requete->bindValue(':prenom',$em->getPrenom());
        $this->requete->bindValue(':adresse',$em->getAdresse());
        $this->executeTryCatch();
    }
    public function avatarMembre($id){
        $this->requete = "UPDATE Inscrit SET avatar =:avatar WHERE id=:id";
        $this->requete = $this->connexion->prepare($this->requete);
        $resultat = $this->requete->execute(array(
            'avatar'=> $_SESSION['id'].".".strtolower(substr(strchr($_FILES['avatar']['name'],'.'),1)),
            'id'=>$id
        ));
    }
    public function chatMembre(InscritEntities $c){
        $this->requete = 'SELECT COUNT(*) AS nombreMessage FROM chat';
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->execute();
        $data = $this->requete->fetch();
        if($data->nombreMessage <= '30'){
            $this->requete = 'INSERT INTO chat VALUES("",:pseudo,:message,now())';
            $this->requete = $this->connexion->prepare($this->requete);
            $this->requete->bindValue(':pseudo',$c->getPseudo());
            $this->requete->bindValue(':message',$c->getMessage());
            $this->executeTryCatch();
        }
        else{
            $this->requete = "DELETE FROM chat ORDER BY ID ASC LIMIT 1";
            $this->requete = $this->connexion->prepare($this->requete);
            $this->executeTryCatch();
            $this->chatMembre($c);
        }
    }
    public function deletemembre($id){
        $this->requete = "DELETE FROM Inscrit WHERE id=:id";
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindParam(':id',$id);
        $this->executeTryCatch();
    }

    private function executeTryCatch()
    {
        try {
            $this->requete->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $this->requete->closeCursor();
    }
}