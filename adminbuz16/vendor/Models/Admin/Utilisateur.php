<?php

namespace Models\Admin;

class Utilisateur extends \Slim\Middleware{

    private $_strLogin = null;
    private $_strMdp = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }

    public function verifieLogin () {
		
        if ( is_null ( $this->_strLogin ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'L\'identifiant est obligatoire'
            );
        
        if ( is_null ( $this->_strMdp ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le mot de passe est obligatoire'
            );
		
        try {
            $sql="
                SELECT * FROM Utilisateurs WHERE 
                email=:u AND
                password=:p
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array(':u' => $this->_strLogin, ':p' => sha1($this->_strMdp)));
            $resultats = $sth->fetch(\PDO::FETCH_ASSOC);
           
            if(count($resultats)==0 || !$resultats){
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Les identifiants sont invalides'
                );
            }
            else{
                return array (
                    'success' => true
                    ,'donnees' => $resultats
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
    
    public function setLogin ( $strLogin) {
            $this->_strLogin = trim ( $strLogin);
    }
    public function setMdp ( $setMdp) {
            $this->_strMdp = trim ( $setMdp);
    }
    public function call(){
        $this->next->call();
    }
}
?>