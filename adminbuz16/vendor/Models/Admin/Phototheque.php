<?php

namespace Models\Admin;

class Phototheque extends \Slim\Middleware{
    private $_db = null;
    private $_strRep=null;
    private $_strNom=null;
    private $_intID=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getCategories () {
        try {
            $sql="SELECT 
                    *
                FROM 
                    categoriephotos
                order by 
                    Nom ASC";
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
    public function repExists($rep,$id=null){
	try {
            $sql="SELECT 
                    COUNT(*) as TOTAL
                FROM 
                    categoriephotos
                WHERE	
                    Repertoire=:Rep";
					
            if(!is_null($id)):
                $sql.=" AND id!=:id";
                $p=array("Rep"=>$rep,"id"=>$id);
            else:
                $p=array("Rep"=>$rep);
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
    public function addCategorie () {
        try {
            $sql="
                INSERT INTO 
                    categoriephotos
                        (Nom,Repertoire) 
                VALUES 
                    (:Name,:Rep)";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':Name', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':Rep', $this->_strRep, \PDO::PARAM_STR,255);
          
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
    public function updateCategorie () {
        try {
            $sql="
                Update 
                    categoriephotos 
                SET Nom=:Name,Repertoire=:Rep
                WHERE
                    id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':Name', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':Rep', $this->_strRep, \PDO::PARAM_STR,255);
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function deleteCategorie () {
        try {
            $sql="DELETE FROM categoriephotos WHERE id=:i";
            
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function setNom ( $n) {
            $this->_strNom = trim ( $n);
    }
    public function setRep ( $d) {
            $this->_strRep = trim ( $d);
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>