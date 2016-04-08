<?php

namespace Models\Client;

class Diaporama extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_idModule = null;
    private $_strContenu = null;
    private $_strFilename = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getByID($id) {
        try {
            
            $sql="
                SELECT 
                    *
                FROM 
                    diaporamas where id=:i ORDER BY
                     groupe ASC,id ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$id));
            if($sth){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => (count($r) > 0) ? $r : array()
                    ,'message' => null
                );

            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getByIDModule($id) {
        try {
            
            $sql="
                SELECT 
                    *
                FROM 
                    diaporamas
                WHERE
                    idModule=:i
                ORDER BY
                    groupe ASC,id ASC
				";
          
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$id));
            if($sth){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => (count($r) > 0) ? $r : array()
                    ,'message' => null
                );

            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function setIdModule($intID) {
        $this->_idModule = $intID;
    }
    public function setContenu($c) {
        $this->_strContenu = $c;
    }
    public function setFile($f) {
        $this->_strFilename= $f;
    }
    public function call(){
        $this->next->call();
    }
}
?>