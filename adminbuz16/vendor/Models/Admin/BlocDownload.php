<?php

namespace Models\Admin;

class BlocDownload extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_idModule = null;
    private $_strFilename = null;
    private $_strPDF = null;
    private $_strTitre = null;
    private $_strSousTitre = null;
    private $_strIntitule = null;

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
    
    public function addBloc(){
        try {
           
            $sql="
                INSERT INTO blocdownload(idModule,pdf,image,titre,sstitre,intitule)
                VALUES(:i,:p,:f,:t,:ss,:int)";

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array(
                "i"=>$this->_idModule,
                "p"=>$this->_strPDF,
                "f"=>$this->_strFilename,
                "t"=>$this->_strTitre,
                "ss"=>$this->_strSousTitre,
                "int"=>$this->_strIntitule,
            ));
            if($sth){
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => $lastId
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
                ,'message' => 'Une erreur est survenue lors de la création de l\'image'
            );
        }
    }
    
    public function delBloc(){
        try {
            if(is_null($this->_id)):
                return array('success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la suppression de l\'image');
            endif;
            $sql="
                DELETE FROM blocdownload WHERE id=:i";

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$this->_id));
            if($sth){
//                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => null
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
                ,'message' => 'Une erreur est survenue lors de la création de l\'image'
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
    public function setTitre($c) {
        $this->_strTitre = trim($c);
    }
    
    public function setSousTitre($c) {
        $this->_strSousTitre = $c;
    }
    public function setIntitule($c) {
        $this->_strIntitule = $c;
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