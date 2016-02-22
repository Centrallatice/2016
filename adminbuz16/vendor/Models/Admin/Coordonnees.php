<?php

namespace Models\Admin;

class Coordonnees extends \Slim\Middleware{

    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="SELECT * FROM coordonnees";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            $r=$sth->fetch(\PDO::FETCH_ASSOC);
            return array (
		'success' => true
                ,'donnees' => $r
                ,'message' => null
            );
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function update ($data) {
        try {
            $sql="DELETE FROM coordonnees;
                  INSERT INTO coordonnees(
                    nom, adresse, cp, ville, tel, fax, mail,horaires
                  )
                  VALUES(
                    :n,:a,:cp,:v,:tel,:fax,:mail,:horaires
                  )
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':n', $data->nom, \PDO::PARAM_STR,255);
            $sth->bindParam(':a', $data->adresse, \PDO::PARAM_STR,255);
            $sth->bindParam(':cp', $data->cp, \PDO::PARAM_STR,255);
            $sth->bindParam(':v', $data->ville, \PDO::PARAM_STR,255);
            $sth->bindParam(':tel', $data->tel, \PDO::PARAM_STR,255);
            $sth->bindParam(':fax', $data->fax, \PDO::PARAM_STR,255);
            $sth->bindParam(':mail', $data->mail, \PDO::PARAM_STR,255);
            $sth->bindParam(':horaires', $data->horaires, \PDO::PARAM_STR);
            
            if($sth->execute()):
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            else:
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            endif;
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function call(){
        $this->next->call();
    }
}
?>