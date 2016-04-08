<?php

namespace Models\Client;

class Menus extends \Slim\Middleware{

    private $_strNom = null;
    private $_strPosition = null;
    private $_intIdPage = null;
    private $_intId = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getMenus($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    M.id,M.nom,M.position,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    menus M
                ORDER BY 
                    M.".$trie." ".$ordreTrie;
            
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
    public function getMenusByIdPage($idPage){
        try {
            $sql="
                SELECT * FROM menupage mp
                LEFT JOIN
                menus m
                ON mp.idMenu=m.id
                WHERE idPage=".$idPage;
        
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
    public function getMenusAllPage(){
        try {
            $sql="
                SELECT * FROM menupage mp
                LEFT JOIN
                menus m
                ON mp.idMenu=m.id
                WHERE idPage=0";
            
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
    public function getMenu(){
        try {
            $sql="
               SELECT 
                    M.id,M.nom,M.position,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    menus M
                WHERE
                    M.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intId))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                $menusAssocie = $this->getPagesByIdMenu();
                if($menusAssocie['success']):
                    $r['idPage']=$menusAssocie['donnees'];
                endif;
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
    public function getPagesByIdMenu(){
         try {
            $sql="
                SELECT 
                    P.id as idPage,P.nom as nomPage
                FROM
                    menupage M
                LEFT JOIN
                    pages P
                ON
                    M.idPage=P.id
                WHERE
                    M.idMenu=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intId))){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
               
                $res=array();
                foreach($r as $k=>$v):
                    
                    if(is_null($r[$k]['idPage'])):
                        $res=true;
                    else:
                        $res[$r[$k]['idPage']]=true;
                    endif;
                endforeach;
                
            return array (
                    'success' => true
                    ,'donnees' => $res
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
    
    public function setNom ( $str) {
        $this->_strNom = trim ( $str);
    }
    
    public function setIdPage($i){
        $this->_intIdPage = $i;
    }
    public function setId($i){
        $this->_intId = $i;
    }
    public function setPosition($i){
        $this->_strPosition=trim($i);
    }
    public function call(){
        $this->next->call();
    }
}
?>