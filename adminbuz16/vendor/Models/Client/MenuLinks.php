<?php
namespace Models\Client;
use Tools\StrTools;

class MenuLinks extends \Slim\Middleware{

    private $_strNom = null;
    private $_intIdMenu = null;
    private $_intId = null;
    private $_intIdPage = null;
    private $_strUrl = null;
    private $_intDepth = null;
    private $_intOrdre = null;
    private $_intIdParent = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getMenuLinksByParent(){
        try {
            $sql="
                SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    P.type
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                WHERE
                    M.idMenu=".$this->_intIdMenu;
            
            if(is_null($this->_intIdParent)) $sql.=" AND idParent IS NULL ";
            else $sql.=" AND idParent=".$this->_intIdParent;
            $sql.=" ORDER BY ordre ASC ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if($sth->execute(array())){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);	
                
				
                return array (
                    'success' => true
                    ,'donnees' => ((count($r)>0) ? $r : null)
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
    public function getMenuLinks(){
        try {
            $sql="
                SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent,
                    P.type
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    menu.id=:idMenu
                ORDER BY
                    depth ASC,ordre ASC
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if($sth->execute(array("idMenu"=>$this->_intIdMenu))){
                
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
    public function getMenuLinksDisplayByIdMenu(){
        try {
            $sql="
               SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    M.idMenu=:i
                Order By 
                    Depth
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdMenu))){
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
    public function getMenuLink(){
        try {
            $sql="
               SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    M.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intId))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                
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
    
    public function getDepthByIDParent($idParent){
        try {
            $sql="SELECT depth FROM menulinks WHERE id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$idParent, \PDO::PARAM_INT);
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r['depth']
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
    
    public function setNom ( $str) {
        $this->_strNom = trim ( $str);
    }
    public function setUrl( $str) {
        $this->_strUrl = trim ( $str);
    }
    public function setDepth($i){
        $this->_intDepth = $i;
    }
    public function setOrdre($i){
        $this->_intOrdre = $i;
    }
    public function setId($i){
        $this->_intId = $i;
    }
    public function setIdMenu($i){
        $this->_intIdMenu = $i;
    }
    public function setIdPage($i){
        $this->_intIdPage = $i;
    }
    public function setIdParent($i){
        $this->_intIdParent = $i;
    }
    
    public function call(){
        $this->next->call();
    }
}
?>