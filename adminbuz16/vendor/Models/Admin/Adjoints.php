<?php

namespace Models\Admin;

class Adjoints extends \Slim\Middleware{

    private $_db = null;
    private $_strNom = null;
    private $_strFonction = null;
    private $_strFonctionDetail = null;
    private $_strEmail = null;
    private $_strImg = null;
    private $_strRep = null;
    private $_intIdAdjoint = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getAll() {
        try {
            $sql="SELECT * FROM adjoints";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute();
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
    public function addAdjoint () {
        try {
            
            $sql="
                  INSERT INTO adjoints
                  (
                  fonction, nom,img,rep,email,detailfonction
                  )
                  VALUES(
                    :f, :n, :i, :r,:email,:df
                  )
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':f', $this->_strFonction, \PDO::PARAM_STR,255);
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':i', $this->_strImage, \PDO::PARAM_STR,255);
            $sth->bindParam(':r', $this->_strRep, \PDO::PARAM_STR,255);
            $sth->bindParam(':email', $this->_strEmail, \PDO::PARAM_STR,255);
            $sth->bindParam(':df', $this->_strFonctionDetail, \PDO::PARAM_STR,255);
            
            if($sth->execute()):
                $lastId = $this->_db->lastInsertId();
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
    public function delAdjoint () {
        try {
           
            $sql="
                  DELETE FROM adjoints
                  WHERE id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':i', $this->_intIdAdjoint, \PDO::PARAM_INT);
            
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
    public function setFonction($f){
        $this->_strFonction = $f;
    }
    public function setFonctionDetail($f){
        $this->_strFonctionDetail = $f;
    }
    public function setNom($f){
        $this->_strNom = $f;
    }
    public function setEmail($f){
        $this->_strEmail = $f;
    }
    public function setImage($f){
        $this->_strImage = $f;
    }
    public function setRep($f){
        $this->_strRep= $f;
    }
	public function setIdAdjoint($i){
		$this->_intIdAdjoint=$i;
	}
    
    public function call(){
        $this->next->call();
    }
}
?>