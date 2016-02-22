<?php

namespace Models\Client;

class BlocDownload extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_idModule = null;
    private $_strFilename = null;
    private $_strPDF = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getByID($id) {
        try {
            
            $sql="
                SELECT 
                    *
                FROM 
                    blocdownload where id=:i";
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
                    blocdownload
                WHERE
                    idModule=:i";
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
    public function setImage($f) {
        $this->_strFilename= $f;
    }
	public function setPDF($f) {
        $this->_strPDF= $f;
    }
    public function call(){
        $this->next->call();
    }
}
?>