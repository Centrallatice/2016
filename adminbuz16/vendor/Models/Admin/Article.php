<?php

namespace Models\Admin;
use Tools\StrTools;

class Article extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_strDescription = null;
    private $_strMotsClefs = null;
    private $_strLegende = null;
    private $_strImage = null;
    private $_intIdCategorie = null;
    private $_intIdCaroussel = null;
    private $_intIdArticle = null;
    private $_intIdPage = null;
    private $_strDisposition = null;
    private $_boolShowTitre = null;
    private $_boolShowPointilles = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getPictureFromIDArti(){
        try {
             if ( is_null ( $this->_intIdArticle) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'article n\'a pas été reconnnu'
                );

            $sql="
                SELECT 
                    image
                FROM
                    articles
                WHERE
                    id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intIdArticle))){
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getArticles($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    P.Nom as PageNom,
                    A.disposition,
                    A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel 
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getArticle(){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    C.id as idCategorie,
                    P.id as idPage,
                    P.Nom as PageNom,
                    A.disposition,
                    A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel 
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                WHERE
                    A.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdArticle))){
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function delArticles(){
        try {
            if ( is_null ( $this->_intIdArticle) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'article n\'a pas été reconnnu'
                );
            $sql="
                DELETE FROM
                    articles
                WHERE
                    id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intIdArticle))){
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function addArticle () {
		
        if ( is_null ( $this->_strTitre ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le titre est obligatoire'
            );
        
       
        if ( is_null ( $this->_strResume ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_intIdCategorie ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La catégorie est obligatoire'
            );
        if ( is_null ( $this->_strDescription ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La description est obligatoire'
            );
        if ( is_null ( $this->_strMotsClefs ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Les Mots clés sont obligatoires'
            );
		
        try {
            $sql="
                INSERT INTO `articles` 
                    (
                     `idcategorie`, 
                     `resume`, 
                     `contenu`, 
                     `url`, 
                     `idpage`, 
                     `image`, 
                     `description`, 
                     `motsclefs`, 
                     `dateajout`, 
                     `titre`,
                     `legende`,
                    `disposition`,
                    `showtitre`,
                    `showpointilles`,
                    `idCaroussel`
                     ) 
                VALUES      
                    (
                     :idc,
                     :r, 
                     :c, 
                     :url, 
                     :idp, 
                     :image, 
                     :desc, 
                     :mc, 
                     NOW(), 
                     :t,
                     :legende,
                     :disposition,
                     :showtitre,
                     :showpointilles,
                     :idCaroussel
                     ) 
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $url = StrTools::toAscii($this->_strTitre);
            
            $existe = $this->urlExiste($url);
            
            if($existe['success']):
                if($existe['donnees']['TOTAL']!=0) $url.='-'.$existe['donnees']['TOTAL'];
            endif;
            
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':url',$url , \PDO::PARAM_STR,255);
            $sth->bindParam(':idp', $this->_intIdPage, \PDO::PARAM_INT);
            $sth->bindParam(':desc',$this->_strDescription, \PDO::PARAM_STR,255);
            $sth->bindParam(':image',$this->_strImage, \PDO::PARAM_STR,255);
            $sth->bindParam(':mc',$this->_strMotsClefs, \PDO::PARAM_STR,255);
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':legende', $this->_strLegende, \PDO::PARAM_STR,255);
            $sth->bindParam(':disposition', $this->_strDisposition, \PDO::PARAM_STR);
            $sth->bindParam(':showtitre', $this->_boolShowTitre, \PDO::PARAM_INT);
            $sth->bindParam(':showpointilles', $this->_boolShowPointilles, \PDO::PARAM_INT);
            $sth->bindParam(':idCaroussel', $this->_intIdCaroussel, \PDO::PARAM_INT);
			
          
            if($sth->execute()){
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => $lastId
                    ,'message' => null
                );
            }else{
                
                print_r($sth->errorInfo());
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function urlExiste($u,$id=null){
        try {
            $sql="
                SELECT 
                    COUNT(*) as TOTAL
                FROM
                    articles
                WHERE
                    url LIKE '".$u."%'";
            if(!is_null($id)) $sql.=' AND id!='.$id;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
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
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function updateArticle ($updatePicture=false) {
	 if ( is_null ( $this->_strTitre ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le titre est obligatoire'
            );
        
        if ( is_null ( $this->_strContent ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_strResume ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_intIdCategorie ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La catégorie est obligatoire'
            );
        if ( is_null ( $this->_strDescription ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La description est obligatoire'
            );
        if ( is_null ( $this->_strMotsClefs ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Les Mots clés sont obligatoires'
            );
		$url = StrTools::toAscii($this->_strTitre);
            
        $existe = $this->urlExiste($url,$this->_intIdArticle);

        if($existe['success']):
            if($existe['donnees']['TOTAL']!=0) $url.='-'.$existe['donnees']['TOTAL'];
        endif;
               
             
        try {
            $sql="
                update
                    articles
                SET
                    titre=:t, 
                    contenu=:c,
                    resume=:r,
                    idCategorie=:idc,".(($updatePicture) ? 'image=:image,':'')."
                    description=:description,
                    motsclefs=:motsclefs,
                    idPage=:idPage,
                    url=:url,
                    legende=:legende,
                    disposition=:dispo,
                    showtitre=:showtitre,
                    showpointilles=:showpointilles,
                    idCaroussel=:idCaroussel
                WHERE
                    id=:idArticle
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            if($updatePicture) :
		$sth->bindParam(':image', $this->_strImage, \PDO::PARAM_STR);
            endif;
            $sth->bindParam(':url', $url, \PDO::PARAM_STR);
            $sth->bindParam(':description', $this->_strDescription, \PDO::PARAM_STR);
            $sth->bindParam(':motsclefs', $this->_strMotsClefs, \PDO::PARAM_STR);
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':idArticle', $this->_intIdArticle, \PDO::PARAM_INT);
            $sth->bindParam(':idPage', $this->_intIdPage, \PDO::PARAM_INT);
            $sth->bindParam(':legende', $this->_strLegende, \PDO::PARAM_STR);
            $sth->bindParam(':dispo', $this->_strDisposition, \PDO::PARAM_STR);
            $sth->bindParam(':showtitre', $this->_boolShowTitre, \PDO::PARAM_INT);
            $sth->bindParam(':showpointilles', $this->_boolShowPointilles, \PDO::PARAM_INT);
            $sth->bindParam(':idCaroussel', $this->_intIdCaroussel, \PDO::PARAM_INT);
            
            if($sth->execute()){
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{
                print_r($sth->errorInfo());
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function setTitre ( $str) {
        $this->_strTitre = trim ( $str);
    }
    public function setResume($str){
        $this->_strResume = $str;
    }
    public function setContent($str){
        $this->_strContent = $str;
    }
    public function setLegende($str){
        $this->_strLegende = $str;
    }
    public function setDescription($str){
        $this->_strDescription= $str;
    }
    public function setMotsCles($str){
        $this->_strMotsClefs = $str;
    }
    public function setImage($str){
        $this->_strImage = $str;
    }
    public function setDisposition($str){
        $this->_strDisposition = $str;
    }
    public function setShowTitre($bool){
        $this->_boolShowTitre = $bool;
    }
    public function setShowPointilles($bool){
        $this->_boolShowPointilles = $bool;
    }
    public function setIdCategorie($i){
        $this->_intIdCategorie = $i;
    }
    public function setIdCaroussel($i){
        $this->_intIdCaroussel = $i;
    }
    public function setIdPage($i){
        $this->_intIdPage = $i;
    }
    public function setIdArticle($i){
        $this->_intIdArticle= $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>