<?php

namespace Models\Admin;

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
                    M.id,M.nom,M.position,P.nom as nomPage,P.id as idPage,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    menus M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                ORDER BY 
                    M.".$trie." ".$ordreTrie;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
		foreach($r as $k=>$v):
                    if($r[$k]['idPage']==0) $r[$k]['nomPage']="Toutes les pages du site";
                endforeach;		
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
                    M.id,M.nom,M.position,P.nom as nomPage,P.id as idPage,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    menus M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                WHERE
                    M.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intId))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                if($r['idPage']==0 || is_null($r['idPage'])):
                    $r['idPage']=0;
                    $r['nomPage']="Toutes les pages du site";
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
    
    public function addMenu () {
		
        if ( is_null ( $this->_strPosition ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La position est obligatoire'
            );
        
        if ( is_null ( $this->_strNom ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le nom est obligatoire'
            );
        if ( is_null ( $this->_intIdPage ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La page est obligatoire'
            );
        
        try {
            $sql="
                INSERT INTO 
                    menus
                 (nom,position,dateAjout,idPage) 
                VALUES 
                    (:n,:p,NOW(),:idp)
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':p', $this->_strPosition, \PDO::PARAM_STR,255);
            $sth->bindParam(':idp', $this->_intIdPage, \PDO::PARAM_INT);
            
            if($sth->execute()){
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => $lastId
                    ,'message' => null
                );
            }else{
                print_r($sth->errorInfo());
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
    
    public function updateMenu () {
	if ( is_null ( $this->_strPosition ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La position est obligatoire'
            );
        
        if ( is_null ( $this->_strNom ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le nom est obligatoire'
            );
        if ( is_null ( $this->_intIdPage ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La page est obligatoire'
            );
		
        try {
            $sql="
                update
                    menus
                SET
                    nom=:n,
                    position=:p,
                    idPage=:idp 
                WHERE
                    id=:idMenu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
		
			
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':p', $this->_strPosition, \PDO::PARAM_STR,255);
            $sth->bindParam(':idp', $this->_intIdPage, \PDO::PARAM_INT);
            $sth->bindParam(':idMenu', $this->_intId, \PDO::PARAM_INT);
            
            if($sth->execute()){
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{
                print_r($sth->errorInfo());
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
    public function delMenu () {
	
        if ( is_null ( $this->_intId ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le menu n\'a pas été reconnu'
            );
		
        try {
            $sql="
                DELETE FROM
                    menus
                WHERE
                    id=:idMenu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idMenu', $this->_intId, \PDO::PARAM_INT);
            
            if($sth->execute()){
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{
                print_r($sth->errorInfo());
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