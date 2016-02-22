<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models\Client;

/**
 * Description of Sociaux
 *
 * @author Sylvain
 */
class Sociaux extends \Slim\Middleware{

    private $_db = null;
    private $_intId = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="SELECT * FROM sociaux ORDER by nom ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()):
                $rFinal=array();
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)):
                    $rFinal[]=$r;
                endwhile;
                return array (
                    'success' => true
                    ,'donnees' => $rFinal
                    ,'message' => null
                );
            else:
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la récupération des données'
                );
            endif;
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function setId($id){
        $this->_intId=$id;
    }
    public function call(){
        $this->next->call();
    }
}
?>