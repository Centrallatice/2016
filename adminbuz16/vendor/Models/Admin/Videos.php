<?php

namespace Models\Admin;

class Videos extends \Slim\Middleware{
    private $_db = null;
    private $_nom = null;
    private $_url = null;
    private $_id = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="
                SELECT    *
                FROM
                    videos
                order by 
                    nom ASC";
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
    public function deleteVideos() {
        try {
            if(is_null($this->_id)):
                    return array (
                            'success' => false
                            ,'donnees' => null
                            ,'message' => "La vidéos à supprimer n'a pas été reconnue"
                    );
            endif;
            $sql="
                DELETE FROM
                    videos
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
    public function addVideo() {
        try {
            if(is_null($this->_nom) || is_null($this->_url)):
                return array (
                        'success' => false
                        ,'donnees' => null
                        ,'message' => "Le nom et le lien sont obligatoires"
                );
            endif;
            $sql="
                INSERT INTO
                    videos(nom,url)
                VALUES
                    (:n,:u)
                ";
            

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':n', $this->_nom, \PDO::PARAM_STR);
            $sth->bindParam(':u', $this->_url, \PDO::PARAM_STR);
            
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
    public function setUrl ( $str) {
        $this->_url = trim ($str);
    }
    public function setId($intID) {
        $this->_id = $intID;
    }
   
    public function call(){
        $this->next->call();
    }
}
?>