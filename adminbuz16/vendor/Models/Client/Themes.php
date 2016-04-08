<?php
namespace Models\Client;

class Themes extends \Slim\Middleware{
    private $_db = null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getThemes(){
        try {
            $sql="SELECT 
                    *
                FROM 
                    themes t";
           
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute();
            if($sth){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r
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
	
    public function call(){
        $this->next->call();
    }
}
?>