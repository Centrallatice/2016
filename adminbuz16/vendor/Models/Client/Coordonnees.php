<?php

namespace Models\Client;

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
    
    public function call(){
        $this->next->call();
    }
}
?>