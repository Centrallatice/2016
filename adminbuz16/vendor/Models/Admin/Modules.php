<?php

namespace Models\Admin;

class Modules extends \Slim\Middleware{
    private $_db = null;
    private $_id = null;
    private $_nom = null;
    private $_type= null;
    private $_position= null;
    private $_idPage = null;
    private $_idCarou = null;
    private $_contenu = null;
    private $_showTitle = null;

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
                    M.idCaroussel,
                    M.position,
                    M.contenuHTML as contenu,
                    P.Nom as NomPage,
                    M.showTitle,
                    M2.nom as NomCaroussel
                FROM 
                    modules M
                LEFT JOIN
                    pages P
                ON
                    M.idPage=P.id
                LEFT JOIN
                    modules M2
                ON
                    M.idCaroussel=M2.id
                WHERE
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
    
    public function getModuleByID () {
        try {
            $sql="
                SELECT 
                    M.id,
                    M.nom,
                    M.type,
                    M.idCaroussel,
                    M.position,
                    M.contenuHTML as contenu,
                    P.Nom as NomPage,
                    M.showTitle,
                    M2.nom as NomCaroussel
                FROM 
                    modules M
                LEFT JOIN
                    pages P
                ON
                    M.idPage=P.id
                LEFT JOIN
                    modules M2
                ON
                    M.idCaroussel=M2.id
                WHERE
                    M.id=:id
                order by 
                    nom ASC";

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("id"=>$this->_id));
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                if($r['type']=='customcontent'):
                    $pages = $this->getModulePages();
                    $r['idPage'] = ($pages['success']) ? $pages['donnees'] : array();
                endif;
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
    public function getModulePages() {
        try {
            $sql="
                SELECT 
                    idPage
                FROM 
                    modulepage M
                WHERE
                    M.idModule=".$this->_id." 
                ";
          
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
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
                INSERT INTO modules(nom,type,idpage,position,contenuHTML,showTitle,idCaroussel)
                VALUES(:n,:t,:idp,:p,:c,:showTitle,:idC)";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("t"=>  $this->_type,"n"=>  $this->_nom,"idp"=>  $this->_idPage,
                "p"=>$this->_position,"c"=>$this->_contenu,"showTitle"=>$this->_showTitle,"idC"=>$this->_idCarou));
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
    
    /*** MODULE DE CONTENU ****/
    public function addModuleMultiple () {
        try {
            $sql="
                INSERT INTO modules(nom,type,idpage,position,contenuHTML,showTitle)
                VALUES(:n,:t,:idp,:p,:c,:showTitle)";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("t"=>  $this->_type,"n"=>  $this->_nom,"idp"=>  $this->_idPage,
                "p"=>$this->_position,"c"=>$this->_contenu,"showTitle"=>$this->_showTitle));
            if($sth){
                $lastId = $this->_db->lastInsertId();
              
                $this->associeModulePages($lastId);
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
    
    public function updateModuleMultiple () {
        try {
            $sql="
                UPDATE modules
                    SET nom=:n,
                    position=:p,
                    contenuHTML=:c,
                    showTitle=:showTitle
                WHERE
                    id=:id
              ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("n"=>  $this->_nom,"id"=>  $this->_id,"p"=>$this->_position,"showTitle"=>$this->_showTitle,"c"=>$this->_contenu));
            if($sth){
               
                $this->associeModulePages($this->_id);
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
    
    public function associeModulePages ($idModule) {
        
        if ( is_null ( $this->_idPage) ||count($this->_idPage)==0 )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La page est obligatoire'
            );
        try {
            $sql="
                DELETE FROM modulepage WHERE idModule=".$idModule.";
                INSERT INTO modulepage (idPage,idModule) VALUES ";
            
            foreach($this->_idPage as $k=>$v):
                
                if($this->_idPage->{$k}) $sql.="(".$k.",".$idModule."),";
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
                $sql="DELETE FROM modules WHERE id=".$idModule;
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
    
    public function delModule () {
        try {
            $sql="
                DELETE FROM modules WHERE id=:i;
                DELETE FROM modulepage WHERE idModule=:id;
            ";
            
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$this->_id,"id"=>$this->_id));
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
    public function setContenu( $str) {
        $this->_contenu= $str;
    }    
    public function setPosition( $str) {
        $this->_position= trim($str);
    }    
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function setShowTitle($showTitle) {
        $this->_showTitle = $showTitle;
    }
    public function setIdCarou($idCaroussel) {
        $this->_idCarou = $idCaroussel;
    }
    public function call(){
        $this->next->call();
    }
}
?>