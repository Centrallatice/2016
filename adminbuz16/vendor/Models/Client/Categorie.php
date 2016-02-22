<?php

namespace Models\Client;

class Categorie extends \Slim\Middleware{
    private $_db = null;
    private $_titre = null;
    private $_description = null;
    private $_icone= null;
    private $_color = null;
    private $_idParent = null;
    private $_id = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="
                SELECT 
                    C1.id, C1.Statut, 
                    C1.idParent, C1.Description, 
                    C1.Nom, C1.Ordre, C1.Depth, C1.color, C1.icone, 
                    DATE_FORMAT( C1.DateAjout,  '%d/%m/%Y %H:%i' ) AS DateAjout
                FROM categories C1
                WHERE C1.Statut =1
                ORDER BY C1.Ordre ASC 
                ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            if($sth){
                $res = array();
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)):
                    $res[$r['id']]=$r;
                endwhile;
                return array (
                    'success' => true
                    ,'donnees' => (count($res) > 0) ? $res : array()
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
    public function getAllDisplay() {
        try {
            $sql="
                SELECT 
                    C1.id,
                    C1.Statut,
                    C1.idParent,
                    C1.Description,
                    C1.Nom,
                    C1.Ordre,
                    C1.Depth,
                    C1.color,
                    C1.icone,
                    C2.Nom as NomParent,
                    DATE_FORMAT(C1.DateAjout,'%d/%m/%Y') as DateAjout
                FROM 
                    categories C1
                    LEFT JOIN
                    categories C2
                    ON C1.idParent = C2.id 
                order by 
                    C1.Ordre ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            if($sth){
                $resFinal = array();
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)):
                    $tiret='';
                    if($r['Depth']>0):
                        for($i=0;$i<$r['Depth'];$i++):
                            $tiret.='--';
                        endfor;
                    endif;
                    $r['prefixe']=$tiret;
                    $r['Nom']=$tiret.' '.$r['Nom'];
                    $resFinal[]=$r;
                endwhile;
                return array (
                    'success' => true
                    ,'donnees' => (count($resFinal) > 0) ? $resFinal : array()
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
    public function getByID($id) {
        try {
            $sql="
                SELECT 
                    C1.id,
                    C1.Statut,
                    C1.idParent,
                    C1.Description,
                    C1.Nom,
                    C1.Ordre,
                    C2.Nom,
                    C1.color,
                    C1.icone,
                    DATE_FORMAT(C1.DateAjout,'%d/%m/%Y') as DateAjout
                FROM 
                    categories C1
                    LEFT JOIN
                    categories C2
                    ON C1.idParent = C2.id
                WHERE 
                    id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$id, \PDO::PARAM_INT);
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
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
    
    
    public function setTitre( $strTitre) {
        $this->_titre = trim ( $strTitre);
    }
    public function setDesc ( $strDesc) {
        $this->_description = trim ($strDesc);
    }
    public function setColor ( $strColor) {
        $this->_color= trim ($strColor);
    }
    public function setIcone ( $strIcone) {
        $this->_icone = trim ($strIcone);
    }
    public function setIdParent( $intP) {
        $this->_idParent = $intP;
    }
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function call(){
        $this->next->call();
    }
}
?>