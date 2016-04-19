<?php
class Bdd_GetConnexion {

    public $void_instance_connect;

    public function __construct () {}

    public function _instancePdoConnec () {
        try {
            
            if(LOCAL==0) $this->void_instance_connect = new PDO('mysql:host=krealinefingcms.mysql.db;dbname=krealinefingcms', 'krealinefingcms' , 'Stewitap59',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            else $this->void_instance_connect=new PDO('mysql:host=localhost;dbname=mairbuza_baqy', 'root' , '',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
            if ( !$this->void_instance_connect ) {
                return false;
            }
            else{
                return $this->void_instance_connect;
            }

        } catch ( PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function __destruct () {
        $this->void_instance_connect = NULL;
    }
}
?>