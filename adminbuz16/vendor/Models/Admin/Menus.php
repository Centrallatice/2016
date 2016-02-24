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
                 (nom,position,dateAjout) 
                VALUES 
                    (:n,:p,NOW())
                    
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':p', $this->_strPosition, \PDO::PARAM_STR,255);
            
            if($sth->execute()){
                $lastId = $this->_db->lastInsertId();
                $this->associeMenuPages($lastId);
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
    public function associeMenuPages($idMenu){
        if ( is_null ( $this->_intIdPage) ||count($this->_intIdPage)==0 )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La page est obligatoire'
            );
        try {
            $sql="
                DELETE FROM menupage WHERE idMenu=".$idMenu.";
                INSERT INTO menupage (idPage,idMenu) VALUES ";
            
            foreach($this->_intIdPage as $k=>$v):
                
                if($this->_intIdPage->{$k}) $sql.="(".$k.",".$idMenu."),";
            endforeach;
            $sql=substr($sql,0,strlen($sql)-1);
           
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            
            if($sth->execute()){
                
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{
                $sql="DELETE FROM menus WHERE id=".$idMenu;
                $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
                $sth->execute();
                
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
        
		
        try {
            $sql="
                update
                    menus
                SET
                    nom=:n,
                    position=:p
                WHERE
                    id=:idMenu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
		
			
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':p', $this->_strPosition, \PDO::PARAM_STR,255);
            $sth->bindParam(':idMenu', $this->_intId, \PDO::PARAM_INT);
            
            if($sth->execute()){
                $this->associeMenuPages($this->_intId);
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
                DELETE FROM menus WHERE id=:idMenu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idMenu', $this->_intId, \PDO::PARAM_INT);
            
            if($sth->execute()){
                
                $sql="DELETE FROM menupage WHERE idMenu=".$this->_intId;
                $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
                $sth->execute();
               
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