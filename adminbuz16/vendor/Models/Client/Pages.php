<?php
namespace Models\Client;

class Pages extends \Slim\Middleware{
    private $_db = null;
    private $_strTitre=null;
    private $_strNom=null;
    private $_strDesc=null;
    private $_intIdTheme=null;
    private $_intID=null;
    private $_strMC=null;
    private $_strURL=null;
    
    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getPageByUrl($url){
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage,
                    P.type
                FROM 
                    pages P
                WHERE
                    id=(SELECT idPage FROM menulinks WHERE url=:url LIMIt 0,1)";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("url"=>$url));
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
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
    public function getDataPage ($id) {
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage
                FROM 
                    pages P
                WHERE
                    id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("i"=>$id));
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
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
    public function getDataPageHOME () {
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage
                FROM 
                    pages P
                WHERE
                    type=1";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute();
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
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
    public function setTitre ( $t) {
            $this->_strTitre = trim ( $t);
    }
    public function setNom ( $n) {
            $this->_strNom = trim ( $n);
    }
    public function setDesc ( $d) {
            $this->_strDesc = trim ( $d);
    }
    public function setIdTheme( $i) {
            $this->_intIdTheme = $i;
    }
    public function setMotsClefs ( $MC) {
            $this->_strMC = trim ( $MC);
    }
    public function setType( $t) {
            $this->_intType = $t;
    }
    public function setId( $i) {
            $this->_intID = $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>