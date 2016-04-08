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
    
    public function getPageByUrl($url,$depth=2){
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage,
                    P.type,
                    P.IdCatAsso,
                    P.idCategorie,
                    C.Nom as CatNom,
                    C.color as ColorCategorie,
                    C.icone as IconeCategorie,
                    Cparent.color as ColorParentCategorie,
                    Cparent.icone as IconeParentCategorie,
                    Cparent.Nom as CatParentNom,
                    T.rep as themesRep,
                    (SELECT url FROM menulinks WHERE url=:url and depth=1 LIMIT 0,1) as urlParentPage
                FROM 
                    pages P
                LEFT JOIN
                    categories C
                ON
                    P.idCategorie=C.id
                LEFT JOIN
                    themes T
                ON
                    P.idTheme=T.id
		LEFT JOIN
                    categories Cparent
                ON
                    C.idParent=Cparent.id
                WHERE
                    P.id=(SELECT idPage FROM menulinks WHERE url=:url and depth=".$depth." LIMIT 0,1)
                OR
                    P.Nom='".$url."'";
           
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array("url"=>$url));
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                if(!$r && $depth>0) return $this->getPageByUrl($url,$depth-1);
                else return array (
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
    public function getPageAgenda(){
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage,
                    P.type,
                    P.idCategorie,
                    C.Nom as CatNom,
					P.IdCatAsso,
                    C.color as ColorCategorie,
                    C.icone as IconeCategorie
                FROM 
                    pages P
                LEFT JOIN
                    categories C
                ON
                    P.idCategorie=C.id
                WHERE
                    P.type=5";
            
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
    
            
    public function getDataPage ($id) {
        try {
            $sql="SELECT 
                    P.id as idPage,
                    P.Nom as NomPage,
                    P.titre as titrePage,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage,
                    P.idCategorie,
					P.IdCatAsso,
                    C.Nom as CatNom,
                    C.color as ColorCategorie,
                    C.icone as IconeCategorie
                FROM 
                    pages P
                LEFT JOIN
                    categories C
                ON
                    P.idCategorie=C.id
                WHERE
                    P.id=:i";
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
                    P.IdCatAsso,
                    P.description as descriptionPage, 
                    P.motsclefs as motsclefsPage,
                    T.rep as themesRep
                FROM 
                    pages P
                LEFT JOIN
                    themes T
                ON
                    P.idTheme=T.id
                WHERE
                    P.type=1";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute();
            if($sth){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                $r['descriptionPage']=utf8_encode($r['descriptionPage']);
                $r['motsclefsPage']=utf8_encode($r['motsclefsPage']);
                $r['titrePage']=utf8_encode($r['titrePage']);
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