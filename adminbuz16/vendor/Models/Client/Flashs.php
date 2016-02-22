<?php

namespace Models\Client;

class Flashs extends \Slim\Middleware{
    private $_db = null;
    private $_strTitre=null;
    private $_strContenu=null;
    private $_strResume=null;
    private $_intID=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
	public function getMailExiste($mail){
	try {
            $sql="
                SELECT 
                    COUNT(*) AS TOTAL
                FROM 
                    newsletteremail
                WHERE
					email=:email
            ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("email"=>$mail));
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
                ,'message' => 'Une erreur est survenue lors de l\'insertion de l\'adresse'
            );
        }	
	}
    public function inscriptionNewsletter($mail){
	try {
            $sql="INSERT INTO newsletteremail(email) VALUES(:email)";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("email"=>$mail));
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
                ,'message' => 'Une erreur est survenue lors de l\'insertion de l\'adresse'
            );
        }	
	}
    public function getAll ($onlyResume) {
        try {
            $sql=($onlyResume) ? "
                SELECT 
                    id,titre,resume
                FROM 
                    flashs
                order by 
                    dateAjout DESC
            " : "
                SELECT 
                    id,titre,contenu
                FROM 
                    flashs
                order by 
                    dateAjout DESC
            ";
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
    
    public function setTitre ( $t) {
            $this->_strTitre = trim ( $t);
    }
    public function setResume ( $n) {
            $this->_strResume = trim ( $n);
    }
    public function setContenu ( $d) {
            $this->_strContenu = trim ( $d);
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>