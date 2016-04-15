<?php

namespace Models\Client;

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
                foreach($r as $k=>$v):
                   
                    $r[$k]['albums']=$this->getAlbumByCategories($r[$k]['id']);
                endforeach;
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
    public function getAlbumByCategories ($idLiaison) {
        try {
            $sql="SELECT 
                    DISTINCT(NomAlbum),nomclean
                FROM 
                    medias
                WHERE
                    idLiaison = '".$idLiaison."'
                ORDER BY
                    NomAlbum ASC";
    
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            if($sth){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                
                return $r;

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