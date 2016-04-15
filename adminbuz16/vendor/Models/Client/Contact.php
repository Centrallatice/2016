<?php

namespace Models\Client;

class Contact extends \Slim\Middleware{

    private $_strNom = null;
    private $_strMail = null;
    private $_strSujet = null;
    private $_strMessage = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function add(){
        try {
            $sql="
                INSERT INTO contact(
                    `datedemande`, `nom`, `mail`, `sujet`, `message`
                ) 
                VALUES 
                    (
                    NOW(),
                    :nom,
                    :mail,
                    :sujet,
                    :message
                )
            ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':nom', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':mail', $this->_strMail, \PDO::PARAM_STR,255);
            $sth->bindParam(':sujet', $this->_strSujet, \PDO::PARAM_STR,255);
            $sth->bindParam(':message', $this->_strMessage, \PDO::PARAM_STR);
            
            if($sth->execute()){
                
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{ print_r($sth->errorInfo());
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