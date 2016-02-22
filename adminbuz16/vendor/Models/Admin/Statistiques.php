<?php

namespace Models\Admin;

class Statistiques extends \Slim\Middleware{
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getStatsHome () {
        try {
            $sql="SELECT (SELECT COUNT(*) FROM pages) as NbPages";
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
    
    public function setLogin ( $strLogin) {
            $this->_strLogin = trim ( $strLogin);
    }
    public function setMdp ( $setMdp) {
            $this->_strMdp = trim ( $setMdp);
    }
    public function call(){
        $this->next->call();
    }
}
?>