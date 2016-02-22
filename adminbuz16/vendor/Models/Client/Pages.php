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
    
    public function getDataPage ($url) {
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.url as urlPage, 
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage
                FROM 
                    pages P
                WHERE
                    url=:u";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("u"=>$url));
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
    public function setUrl ( $url) {
            $this->_strURL = trim ( $url);
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