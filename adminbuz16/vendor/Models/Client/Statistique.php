<?php

namespace Models\Client;
class Statistique extends \Slim\Middleware{
    private $_db = null;
    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function addStat($idPage,$pageName,$browser,$platform){
	try {
            $sql="INSERT INTO statistiques(idPage,ipuser,datevisite,navigateur,uri,pagename,platform) 
                values (:id,:ip,NOW(),:nav,:uri,:p,:platform)";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->execute(array(
                "id"=>$idPage,
                "ip"=>$_SERVER['REMOTE_ADDR'],
                "nav"=>$browser,
                "uri"=>$_SERVER['REQUEST_URI'],
                "platform"=>$platform,
                "p"=>$pageName
            ));
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de l\'insertion de l\'adresse'
            );
        }	
    }
    public function call(){
        $this->next->call();
    }
}
