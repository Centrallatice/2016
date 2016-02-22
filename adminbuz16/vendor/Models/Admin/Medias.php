<?php

namespace Models\Admin;

class Medias extends \Slim\Middleware{

    private $_db = null;
    private $_strType = null;
    private $_strFilename = null;
    private $_strRep = null;
    private $_intIdLiaison = null;
    private $_intIdMedia = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getByTypeAndID($type,$id) {
        try {
            $sql="SELECT id,type,rep,filename FROM medias WHERE idLiaison=:id AND type=:type";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("id"=>$id,"type"=>$type));
            $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
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
    public function addMedia () {
        try {
            if(is_null($this->_strType)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Le type du média est obligatoire'
                );
            endif;
            if(is_null($this->_strFilename)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Le nom du fichier est obligatoire'
                );
            endif;
            if(is_null($this->_strRep)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Le nom du répértoire de destination est obligatoire'
                );
            endif;
            if(is_null($this->_intIdLiaison)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'id de liaison est obligatoire'
                );
            endif;
            $sql="
                  INSERT INTO medias(
                    type, rep, filename, idLiaison
                  )
                  VALUES(
                    :type, :rep, :filename, :idLiaison
                  )
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':type', $this->_strType, \PDO::PARAM_STR,255);
            $sth->bindParam(':rep', $this->_strRep, \PDO::PARAM_STR,255);
            $sth->bindParam(':filename', $this->_strFilename, \PDO::PARAM_STR,255);
            $sth->bindParam(':idLiaison', $this->_intIdLiaison, \PDO::PARAM_INT);
            
            if($sth->execute()):
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => array("filename"=>$this->_strFilename,
                        "id"=>$lastId,
                        "rep"=>$this->_strRep,
                        "thumbUrl"=>BASE_PATH_UPLOAD_URL.'/'.$this->_strRep.'/minis/'.$this->_strFilename,
                        "type"=>$this->_strType,
                        "url"=>BASE_PATH_UPLOAD_URL.'/'.$this->_strRep.'/'.$this->_strFilename
                    )
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
    public function delMedia () {
        try {
            if(is_null($this->_intIdMedia)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'identifiant du média est obligatoire'
                );
            endif;
            $sql="
                  DELETE FROM medias
                  WHERE id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':i', $this->_intIdMedia, \PDO::PARAM_INT);
            
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
    public function setType($type){
        $this->_strType=trim($type);
    }
    public function setFilename($filename){
        $this->_strFilename=trim($filename);
    }
    public function setRep($Rep){
        $this->_strRep=trim($Rep);
    }
    public function setidLiaison($id){
        $this->_intIdLiaison=$id;
    }
    public function setidMedia($id){
        $this->_intIdMedia=$id;
    }
    public function call(){
        $this->next->call();
    }
}
?>