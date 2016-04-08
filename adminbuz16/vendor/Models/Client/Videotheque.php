<?php

namespace Models\Client;

class Videotheque extends \Slim\Middleware{
    private $_db = null;
    private $_strRep=null;
    private $_strNom=null;
    private $_intID=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function setNom ( $n) {
            $this->_strNom = trim ( $n);
    }
    public function setRep ( $d) {
            $this->_strRep = trim ( $d);
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>