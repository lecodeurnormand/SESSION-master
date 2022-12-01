<?php
namespace App\Models;
ini_set('display_errors', 1);
error_reporting(E_ALL);
use Exception;
use App\Core\DbConnect;
use App\Entities\InscritEntities;

class InscriptionModel extends DbConnect{

    public function inscription(InscritEntities $form){
        $this->requete = 'INSERT INTO Inscrit VALUES(NULL,:username,:email,NULL,NULL,NULL,:mdp,NULL)';
        $this->requete = $this->connexion->prepare($this->requete);
        $this->requete->bindValue(':username',$form->getUsername());
        $this->requete->bindValue(':email',$form->getEmail());
        $this->requete->bindValue(':mdp',$form->getMdp());
        $this-> executeTryCatch();
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