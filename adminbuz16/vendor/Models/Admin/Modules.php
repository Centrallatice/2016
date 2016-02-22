<?php

namespace Models\Admin;

class Modules extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_nom = null;
    private $_type= null;
    private $_position= null;
    private $_idPage = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAllByType ($type) {
        try {
            $sql="
                SELECT 
                    M.id,
                    M.nom,
                    M.type,
                    M.position,
                    P.Nom as NomPage
                FROM 
                    modules M,pages P
                WHERE
                    M.idPage=P.id
                AND
                    M.type=:t
                order by 
                    nom ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("t"=>$type));
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
    
    public function addModule () {
        try {
            $sql="
                INSERT INTO modules(nom,type,idpage,position)
                VALUES(:n,:t,:idp,:p)";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("t"=>  $this->_type,"n"=>  $this->_nom,"idp"=>  $this->_idPage,"p"=>$this->_position));
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function delModule () {
        try {
            $sql="
                DELETE FROM modules WHERE id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$this->_id));
            if($sth){
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function setNom( $str) {
        $this->_nom = trim ( $str);
    }
    public function setType( $str) {
        $this->_type = trim ( $str);
    }
    public function setIdPage( $int) {
        $this->_idPage= $int;
    }    
    public function setPosition( $str) {
        $this->_position= trim($str);
    }    
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function call(){
        $this->next->call();
    }
}
?>