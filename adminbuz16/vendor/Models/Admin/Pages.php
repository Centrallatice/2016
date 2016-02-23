<?php

namespace Models\Admin;

class Pages extends \Slim\Middleware{
    private $_db = null;
    private $_strTitre=null;
    private $_strNom=null;
    private $_strDesc=null;
    private $_intIdTheme=null;
    private $_intID=null;
    private $_strMC=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getAll () {
        try {
            $sql="SELECT 
                    P.id, 
                    P.Nom, 
                    P.titre, 
                    P.type, 
                    P.idTheme, 
                    P.idAuteur, 
                    DATE_FORMAT(P.date,'%d/%m/%Y %H:%i') as date, 
                    P.description, 
                    P.motsclefs,
                    T.nom as ThemeName
                FROM 
                    pages P
                LEFT JOIN
                    themes T
                ON
                    P.idTheme=T.id
                order by 
                    P.titre ASC";
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
    public function urlExists($url,$id=null){
	try {
            $sql="SELECT 
                    COUNT(*) as TOTAL
                FROM 
                    pages
                WHERE	
                    url=:u";
					
            if(!is_null($id)):
                    $sql.=" AND id!=:id";
                    $p=array("u"=>$url,"id"=>$id);
            else:
                    $p=array("u"=>$url);
            endif;
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute($p);
            
			if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                   ,'donnees' => $r['TOTAL']
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
    public function addPage () {
        try {
            $sql="
                INSERT INTO pages
                    (Nom,titre,type,idTheme,idAuteur,date,description,motsclefs) 
                VALUES 
                (:Name,:Titre,:type,:idTheme,:Auteur,NOW(),:Desc,:MC)";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':Name', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':Titre', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':idTheme', $this->_intIdTheme, \PDO::PARAM_INT);
            $sth->bindParam(':type', $this->_intType, \PDO::PARAM_INT);
            $sth->bindParam(':Auteur', $_SESSION['DataUser']['id'], \PDO::PARAM_INT);
            $sth->bindParam(':Desc', $this->_strDesc, \PDO::PARAM_STR);
            $sth->bindParam(':MC', $this->_strMC, \PDO::PARAM_STR,255);
          
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
    public function delPage () {
        try {
            $sql="
                DELETE FROM pages
                    WHERE id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            
          
            if($sth->execute(array('i'=>$this->_intID))){
               
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
    public function updatePage () {
        
        try {
            $sql="
                UPDATE
                    pages
                SET
                    Nom=:Name,
                    titre=:Titre,
                    type=:type,
                    idTheme=:idTheme,
                    description=:Desc,
                    motsclefs=:MC
                WHERE
                    id=:i
               ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':Name', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':Titre', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':idTheme', $this->_intIdTheme, \PDO::PARAM_INT);
            $sth->bindParam(':type', $this->_intType, \PDO::PARAM_INT);
            $sth->bindParam(':Desc', $this->_strDesc, \PDO::PARAM_STR);
            $sth->bindParam(':MC', $this->_strMC, \PDO::PARAM_STR,255);
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
                ,'message' => 'Une erreur est survenue lors de la création de la page'
            );
        }
    }
    
    public function setTitre ( $t) {
            $this->_strTitre = trim ( $t);
    }
    public function setNom ( $n) {
            $this->_strNom = trim ( $n);
    }
    public function setDesc ( $d) {
            $this->_strDesc = trim ( $d);
    }
    public function setIdTheme( $i) {
            $this->_intIdTheme = $i;
    }
    public function setMotsClefs ( $MC) {
            $this->_strMC = trim ( $MC);
    }
    public function setType( $t) {
            $this->_intType = $t;
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>