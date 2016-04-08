<?php

namespace Models\Admin;

class Flashs extends \Slim\Middleware{
    private $_db = null;
    private $_strTitre=null;
    private $_strContenu=null;
    private $_strResume=null;
    private $_intID=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getSubscribers(){
	try {
            $sql="SELECT DISTINCT email FROM newsletteremail";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute();
            if($sth){
                $res=array();
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)){
                    array_push($res,$r['email']);
                }
                
                return array (
                    'success' => true
                   ,'donnees' => (count($res) > 0) ? $res : array()
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
                ,'message' => 'Une erreur est survenue lors de l\'insertion de l\'adresse'
            );
        }	
	}
    public function getAll () {
        try {
            $sql="SELECT 
                    id,titre,contenu,resume,DATE_FORMAT(dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM 
                    flashs
                order by 
                    dateAjout DESC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
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
    
    public function addFlash () {
        try {
            $sql="
                INSERT INTO flashs
                    (titre,resume,contenu,dateAjout) 
                VALUES 
                (:Titre,:Resume,:Contenu,NOW())";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':Titre', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':Resume', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':Contenu', $this->_strContenu, \PDO::PARAM_STR);
          
            if($sth->execute()){
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function updateFlash () {
        
        try {
            $sql="
                UPDATE
                    flashs
                SET
                    titre=:t,resume=:r,contenu=:c
                WHERE
                    id=:i
               ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':c', $this->_strContenu, \PDO::PARAM_STR);
            $sth->bindParam(':i', $this->_intID, \PDO::PARAM_INT);
         
            if($sth->execute()){
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
                ,'message' => 'Une erreur est survenue lors de la création de l\'information'
            );
        }
    }
    public function deleteFlash () {
        
        try {
            if(is_null($this->_intID)):
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'identifiant est obligatoire' 
                ); 
            endif;
            
            $sql="
                DELETE FROM flashs
                WHERE
                    id=:i
               ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':i', $this->_intID, \PDO::PARAM_INT);
         
            if($sth->execute()){
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
                ,'message' => 'Une erreur est survenue lors de la création de l\'information'
            );
        }
    }
    
    public function setTitre ( $t) {
            $this->_strTitre = trim ( $t);
    }
    public function setResume ( $n) {
            $this->_strResume = trim ( $n);
    }
    public function setContenu ( $d) {
            $this->_strContenu = trim ( $d);
    }
    public function getTitre () {
            return $this->_strTitre;
    }
    public function getResume ( ) {
            return $this->_strResume ;
    }
    public function getContenu ( ) {
            return $this->_strContenu ;
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>