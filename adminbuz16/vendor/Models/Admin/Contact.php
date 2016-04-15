<?php

namespace Models\Admin;

class Contact extends \Slim\Middleware{

    private $_strNom = null;
    private $_strMail = null;
    private $_strSujet = null;
    private $_strMessage = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function get(){
        try {
            $sql="
                SELECT 
                    DATE_FORMAT(datedemande,'%d/%m/%Y %H:%i') as datedemande,
                    id,
                    nom,
                    sujet,
                    message,
                    mail
                FROM contact ORDER BY datedemande desc
            ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r
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
    public function setMail($str){
        $this->_strMail = $str;
    }
    public function setSujet($str){
        $this->_strSujet = $str;
    }
    public function setMessage($str){
        $this->_strMessage = $str;
    }
    public function call(){
        $this->next->call();
    }
}
?>