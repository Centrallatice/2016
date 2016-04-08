<?php

namespace Models\Client;

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
    public function getAllByPage ($page,$isHome) {
        
        try {
            $sql="
                SELECT 
                    M.id,
                    M.nom,
                    M.type,
                    M.position,
                    M.contenuHTML as contenu,
                    P.Nom as NomPage,
                    M.showTitle
                FROM 
                    modules M,pages P
                WHERE
            ";
            $sql.=($isHome) ? ' P.type=1 AND M.idPage=P.id ' : ' P.id=:id AND M.idPage=P.id ';
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(($isHome) ? array() : array("id"=>$page));
            if($sth){
                $results=array();
               
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)):
                   
                    if(!isset($results[$r['position']])) $results[$r['position']]=array();
                    array_push($results[$r['position']],$r);
                endwhile;
                
                return array (
                    'success' => true
                    ,'donnees' => (count($results) > 0) ? $results : array()
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
    
    public function getModuleByIdPage($idPage){
        try {
            
            $sql="
                SELECT * FROM modulepage mp
                LEFT JOIN
                modules m
                ON mp.idModule=m.id
                WHERE (mp.idPage=".$idPage." OR mp.idPage=0)
                ORDER by m.id ASC
                    ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                	
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getModuleAllPage(){
        try {
            $sql="
                SELECT * FROM modulepage mp
                LEFT JOIN
                modules m
                ON mp.idModule=m.id
                WHERE mp.idPage=0";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                	
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( PDOException $exception ) {
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