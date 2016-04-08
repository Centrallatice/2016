<?php

namespace Models\Client;

class Association extends \Slim\Middleware{
    private $_db = null;
    private $_nom = null;
    private $_image = null;
    private $_contenu = null;
    private $_idCategorie = null;
    private $_id = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="
                SELECT 
                    A.id,
                    A.nom,
                    A.image,
                    A.idCategorie,
                    A.contenu,
                    C.nom as NomCategorie,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    association A
                LEFT JOIN
                    categorieAsso C
                ON
                    A.idCategorie=C.id
                order by 
                    A.nom ASC";
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
    
    public function getByID($id) {
        try {
            $sql="
                SELECT 
                    A.id,
                    A.nom,
                    A.image,
                    A.idCategorie,
                    A.contenu,
                    C.nom as NomCategorie,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    association A
                LEFT JOIN
                    categorieAsso C
                ON
                    A.idCategorie=C.id
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
    public function getByIDCat($id) {
        try {
            $sql="
                SELECT 
                    A.id,
                    A.nom,
                    A.image,
                    A.idCategorie,
                    A.contenu,
                    C.nom as NomCategorie,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout
                FROM
                    association A
                LEFT JOIN
                    categorieAsso C
                ON
                    A.idCategorie=C.id
                WHERE 
                    A.idCategorie=:i
                ORDER BY
                    A.image desc,A.nom asc
                ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$id, \PDO::PARAM_INT);
            if( $sth->execute()){
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
    
    public function addCategorie () {
        try {
            $sql="
                INSERT INTO 
                    association(nom,image,dateAjout,contenu,idCategorie) 
                VALUES 
                    (:N,:i,NOW(),:cont,:idC)";
                    
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':N', $this->_nom, \PDO::PARAM_STR,255);
            $sth->bindParam(':i', $this->_image, \PDO::PARAM_STR);
            $sth->bindParam(':idC', $this->_idCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':cont', $this->_contenu, \PDO::PARAM_STR);
            
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => $exception->getMessage()
            );
        }
    }
    public function updateCategorie ($withImage) {
        try {
            $sql="
                UPDATE 
                    association
                SET
                    nom=:N".(($withImage) ? ",image=:i" : "").",contenu=:cont,idCategorie=:idC
                WHERE
                    id=:id";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':N', $this->_nom, \PDO::PARAM_STR,255);
            if($withImage) $sth->bindParam(':i', $this->_image, \PDO::PARAM_STR);
            $sth->bindParam(':id', $this->_id, \PDO::PARAM_INT);
            $sth->bindParam(':idC', $this->_idCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':cont', $this->_contenu, \PDO::PARAM_STR);
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => $exception->getMessage()
            );
        }
    }
   
	public function deleteCategorie () {
        try {
            if(is_null($this->_id)):
                    return array (
                            'success' => false
                            ,'donnees' => null
                            ,'message' => "La catégorie à supprimer n'a pas été reconnue"
                    );
            endif;
            $sql="
                DELETE FROM
                    association
                WHERE
                    id=:i
                ";
            

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i', $this->_id, \PDO::PARAM_INT);
            
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => $exception->getMessage()
            );
        }
    }
    
    public function setNom( $str) {
        $this->_nom = trim ( $str);
    }
    public function setImage ( $str) {
        $this->_image = trim ($str);
    }
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function setIdCategorie($intID) {
        $this->_idCategorie = $intID;
    }
    public function setContenu($c) {
        $this->_contenu = $c;
    }
    public function call(){
        $this->next->call();
    }
}
?>