<?php

namespace Models\Admin;

class Diaporama extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_idModule = null;
    private $_strContenu = null;
    private $_groupe = null;
    private $_strFilename = null;
    private $_libelle = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getByID($id) {
        try {
            
            $sql="
                SELECT 
                    *
                FROM 
                    diaporamas where id=:i";
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
    
    public function addPicture(){
        try {
            if(is_null($this->_idModule) || is_null($this->_strFilename)):
                return array('success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la création de l\'image');
            endif;
            $sql="
                INSERT INTO diaporamas(idModule,Contenu,imageFile,libelle,groupe)
                VALUES(:i,:c,:f,:l,:g)";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$this->_idModule,"c"=>$this->_strContenu,"f"=>$this->_strFilename,"l"=>$this->_libelle,"g"=>$this->_groupe));
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
    
    public function deleteImage(){
        try {
            if(is_null($this->_id)):
                return array('success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la suppression de l\'image');
            endif;
            $sql="
                DELETE FROM diaporamas WHERE id=:i";

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
    public function setFile($f) {
        $this->_strFilename= $f;
    }
    public function setLibelle($f) {
        $this->_libelle= $f;
    }
    public function setGroupe($f) {
        $this->_groupe= $f;
    }
    public function call(){
        $this->next->call();
    }
}
?>